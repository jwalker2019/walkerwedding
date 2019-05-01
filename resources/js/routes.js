import VueRouter from 'vue-router';

let routes = [
    {
        path: '/',
        component: require('./views/Home.vue').default
    },
    {
        path: '/couple',
        component: require('./views/Couple.vue').default
    },
    {
        path: '/ceremony',
        component: require('./views/Ceremony.vue').default
    },
    {
        path: '/reception',
        component: require('./views/Reception.vue').default
    },
    {
        path: '/gifts',
        component: require('./views/Gifts.vue').default
    },
    {
        path: '/messages',
        component: require('./views/Messages.vue').default
    },
    {
        path: '/slides',
        component: require('./views/Slides.vue').default
    }
]

export default new VueRouter({
    routes
});
