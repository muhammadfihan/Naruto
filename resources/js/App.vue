<template>
    <!-- Header -->
    <div v-if="!loggedIn">
        <!-- navbar -->
    </div>

    <div v-else-if="loggedIn">
        <TopBar/>
        <!-- <Navbar/> -->
    </div>

    <router-view />

</template>

<script>
import TopBar from './dashboard/TopBar.vue'
export default {
    components: {
        TopBar,
    },

    data() {
        return {
             token: localStorage.getItem("token"),
            loggedIn: null,
            statusPage: null
        };
    },

    methods: {
        getLoggedIn() {
            this.loggedIn = localStorage.getItem("loggedIn");
            // localStorage.clear();
        },
    },

    watch: {
        $route: {
            immediate: true,
            handler() {
                this.getLoggedIn();
            },
        },
    },

};
</script>
