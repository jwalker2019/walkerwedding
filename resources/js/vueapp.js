import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import App from './components/App'
import Example from './components/ExampleComponent'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/home',
            name: 'example',
            component: Example,
            props: { title: "This is the SPA home" }
        },
           
    ],
})
const app = new Vue({
    el: '#app',
    components: { App },
    router,
});