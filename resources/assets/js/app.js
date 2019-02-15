require('./bootstrap');

window.Vue = require('vue');

import VueSweetalert2 from 'vue-sweetalert2';
Vue.use(VueSweetalert2);

import VueRouter from 'vue-router';
Vue.use(VueRouter);

let views = {
    current: 'home',
    project: false
};

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('carousel', require('./components/Carousel.vue'));
Vue.component('framed-image', require('./components/FramedImage.vue'));

import Home from './components/Home.vue';
import Portfolio from './components/Portfolio.vue';
import Contact from './components/Contact.vue';
import About from './components/About.vue';
import Lms from './components/Lms.vue';
import Exam from './components/Exam.vue';
import Chat from './components/Chat.vue';
import Tours from './components/Tours.vue';
import Resort from './components/Resort.vue';
import Estate from './components/Estate.vue';

const routes = [
    { path: '/', component: Home },
    { path: '/portfolio', component: Portfolio },
    { path: '/portfolio/lms', component: Lms },
    { path: '/portfolio/exam', component: Exam },
    { path: '/portfolio/chat', component: Chat },
    { path: '/portfolio/tours', component: Tours },
    { path: '/portfolio/resort', component: Resort },
    { path: '/portfolio/estate', component: Estate },
    { path: '/contact', component: Contact },
    { path: '/about', component: About },
];

const router = new VueRouter({
    routes
});

const app = new Vue({
    router,
    el: '#app',
    components: {
        Home, Portfolio, Contact, About, Lms, Exam, Chat, Tours, Resort, Estate
    },
    data: {
        views: views,
        currentView: views.current,
        css: {
            active: 'header__menu--item-active'
        }
    },
    methods: {
        changeView(view){
            this.views.project = false;
            this.$router.push(view);
            // this.views.current = view;
            // this.views.active = view;
        }
    }
});
