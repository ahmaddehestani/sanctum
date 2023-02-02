import {createRouter, createWebHistory} from "vue-router";
import Training from "../../vue/components/Traning.vue";
import Users from "../../vue/components/Users.vue";
import NotFound from "../../vue/components/NotFound.vue";

const routes = [

    {
        path: '/training',
        name:'Training',
        component: Training,
    },
    {
        path: '/user/:id',
        name:'Users',
        component: Users,
    },
    {
        path: '/:catchAll(.*)',
        name:'NotFound',
        component: NotFound,
    },
];
const router = createRouter({
    history: createWebHistory(),
    routes
})
export default router;
