<template>
    <div>
        <nav class="navbar navbar-dark navbar-expand-lg bg-primary border-bottom">
            <router-link class="navbar-brand mr-auto" :to="{ name: 'home' }"
                >HomestayBooking</router-link
            >

            <ul class="navbar-nav">
                <li class="nav-item">
                    <router-link class="nav-link" :to="{ name: 'basket' }">
                        Basket
                        <span v-if="itemsInBasket" class="badge badge-secondary">{{
                            itemsInBasket
                        }}</span>
                    </router-link>
                </li>

                <li class="nav-item" v-if="!isLoggedIn">
                    <router-link :to="{ name: 'register' }" class="nav-link">Register</router-link>
                </li>

                <li class="nav-item" v-if="!isLoggedIn">
                    <router-link :to="{ name: 'login' }" class="nav-link">Sign-in</router-link>
                </li>

                <li class="nav-item" v-if="isLoggedIn">
                    <a class="nav-link" href="#" @click.prevent="logout">Logout</a>
                </li>
            </ul>
        </nav>

        <div class="container mt-4 mb-4 pr-4 pl-4">
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
import { mapState, mapGetters } from 'vuex';

export default {
    data() {
        return {
            lastSearch: this.$store.state.lastSearch,
        };
    },
    computed: {
        ...mapState({
            lastSearchComputed: 'lastSearch',
            isLoggedIn: 'isLoggedIn',
        }),
        ...mapGetters({
            itemsInBasket: 'itemsInBasket',
        }),
        somethingElse() {
            return 1 + 2;
        },
    },
    methods: {
        async logout() {
            try {
                axios.post('/logout');
                this.$store.dispatch('logout');
            } catch (error) {
                this.$store.dispatch('logout');
            }
        },
    },
};
</script>
