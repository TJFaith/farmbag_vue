
require('./bootstrap');
import VueRouter from 'vue-router';
window.Vue = require('vue');
Vue.use(VueRouter);

const routes=[
    {path:'/', component:require('./components/homeComponent.vue').default}
]
const router = new VueRouter({
    routes:routes,
    mode:"history"
})

const app = new Vue({
    router
}).$mount('#app')

// Vue.component('example', require('./components/homeComponent.vue').default);


// require('./bootstrap');

// window.Vue = require('vue');
// import VueRouter from 'vue-router';
// import axios from 'axios';

// Vue.use(VueRouter, axios);
// // Vue.component('farm-home',require('./components/home.vue'));
// const routes=[
//     {path:'/',component:require('./components/homeComponent.vue').default}
// ]
// const router= new VueRouter({
//     mode:'history',
//     routes
// });
// const app = new Vue({
//     el: '#app',   
//     router
// });