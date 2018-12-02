require('./bootstrap');

window.Vue = require('vue');

Vue.component('updates', require('./components/Updates.vue'));
Vue.component('onlinelist', require('./components/OnlineList.vue'));
Vue.component('suggestions', require('./components/Suggestions.vue'));

const app = new Vue({
    el: '#app'
});