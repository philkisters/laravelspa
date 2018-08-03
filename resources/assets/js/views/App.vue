<template>
    <div>
        <nav class="uk-navbar-container" uk-navbar>
            <div class="uk-navbar-left">
                <router-link class="uk-navbar-item uk-logo" :to="{ name: 'home' }">Logo</router-link>
                <ul class="uk-navbar-nav">
                    <li>
                        <router-link :to="{ name: 'home' }">Home</router-link>
                    </li>
                    <li>
                        <a href="#">Parent</a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="#">Active</a></li>
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                            </ul>
                        </div>
                    </li>
                    <li v-if="$store.state.user && $store.state.user.role === 'admin'">
                        <router-link :to="{ name: 'admindashboard' }">Admin Dashboard</router-link>
                    </li>
                </ul>
            </div>
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav">
                    <li v-if="$store.state.user">
                        <router-link :to="{ name: 'profile' }">Profile</router-link>
                    </li>
                    <li v-if="$store.state.user">
                        <a href="/logout"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="/logout" method="POST" style="display: none;">
                            <input type="hidden" name="_token" v-bind:value="$store.state.csrf">
                        </form>
                    </li>
                    <li v-else>
                        <router-link v-if="$route.path != '/login'" :to="{ name: 'login' }">Login</router-link>
                        <router-link v-else :to="{ name: 'register' }">Register</router-link>
                    </li>
                </ul>
            </div>
        </nav>
        <router-view></router-view>
    </div>
</template>
<script>
    export default {
        props: ['authuser', 'csrf', 'errors'],
        created() {
            console.log(this.errors);
            this.$store.commit('startup', {
                user: JSON.parse(this.authuser), 
                csrf: this.csrf}
            );
        },
    }
</script>