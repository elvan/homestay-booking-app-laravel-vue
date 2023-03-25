<?php

use App\Bookable;
use App\Booking;
use App\Review;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 100)->create();

        factory(Bookable::class, 100)->create();

        Bookable::all()->each(function (Bookable $bookable) {
            $booking = factory(Booking::class)->make();
            $bookings = collect([$booking]);

            for ($i = 0; $i < random_int(1, 20); $i++) {
                $from = (clone $booking->to)->addDays(random_int(1, 14));
                $to = (clone $from)->addDays(random_int(0, 14));

                $booking = Booking::make([
                    'from' => $from,
                    'to' => $to,
                    'price' => random_int(200, 5000)
                ]);
                $bookings->push($booking);
            }

            $bookable->bookings()->saveMany($bookings);
        });

        Bookable::all()->each(function (Bookable $bookable) {
            $reviews = factory(Review::class, random_int(5, 30))->make();
            $bookable->reviews()->saveMany($reviews);
        });
    }
}
