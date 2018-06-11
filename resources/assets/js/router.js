import VueRouter from 'vue-router'
import Vue from 'vue'

// Components
import Home from './components/Home.vue';

Vue.use(VueRouter);

const routes = [

{ path: '/', component: Home },
{ path: '/members', component: Home }

];

const router = new VueRouter({
	routes,
	mode: 'history'
});

export default router;