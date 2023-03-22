<template>
    <div>
        <nav class="navbar navbar-dark bg-primary border-bottom">
            <router-link class="navbar-brand mr-auto" :to="{ name: 'home' }"
                >HomestayBooking</router-link
            >
            <router-link class="btn nav-button text-white" :to="{ name: 'home' }"
                >Second</router-link
            >
        </nav>

        <div class="container mt-4 mb-4 pr-4 pl-4">
            <router-view></router-view>
        </div>
    </div>
</template>
