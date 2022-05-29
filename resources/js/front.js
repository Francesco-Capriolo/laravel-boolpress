window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Vue = require('vue');

import App from "./views/App.vue";
import VueRouter from 'vue-router';

Vue.use(VueRouter)

import About from "./pages/About.vue";
import Contact from "./pages/Contact.vue";
import Home from "./pages/Home.vue";
import Posts from "./pages/Posts.vue";

const router = new VueRouter({
    mode: "history",
    routes: [{
            path: '/home',
            name: 'home',
            component: Home
        }, {
            path: '/posts',
            name: 'posts',
            component: Posts
        },
        {
            path: '/contact',
            name: 'contact',
            component: Contact
        },
        {
            path: '/about-us',
            name: 'about-us',
            component: About
        },
    ]
})


const app = new Vue({
    el: '#root',
    render: h => h(App),
    router
});
