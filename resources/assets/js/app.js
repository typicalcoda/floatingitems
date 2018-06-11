import './bootstrap'
import Vue from 'vue'
import router from './router'

// Components 
import Sidebar from './components/includes/Sidebar.vue'

Vue.component('sidebar', Sidebar);

const app = new Vue({
    el: '#app',
    router
});
