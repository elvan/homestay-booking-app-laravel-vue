<?php

namespace App\Http\Controllers\Api;

use App\Bookable;
use App\Http\Controllers\Controller;

class BookableReviewController extends Controller
{
    public function __invoke($id)
    {
        $bookable = Bookable::findOrFail($id);

        return $bookable->reviews()->latest()->get();
    }
}
