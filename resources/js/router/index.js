import { createRouter, createWebHistory } from "vue-router";
import Base from '@/components/layouts/base.vue';

//admin

import homeAdminIndex from '../components/admin/home/index.vue'

//pages
import homePagesIndex from '../components/pages/home/index.vue'

//ceshtja-penale
import masa from '../components/pages/ceshtja-penale/masa.vue'
import hetime from '../components/pages/ceshtja-penale/hetime.vue'
import gjykim_shakalla_1 from '../components/pages/ceshtja-penale/gjykim_shakalla_1.vue'
import gjykim_themeli from '../components/pages/ceshtja-penale/gjykim_themeli.vue'
import gjykim_apeli from '../components/pages/ceshtja-penale/gjykim_apeli.vue'
import gjykim_ne_gjykate_te_larte from '../components/pages/ceshtja-penale/gjykim_ne_gjykate_te_larte.vue'

//norfound
import notFound from '../components/notFound.vue'

//login
import login from '../components/auth/login.vue'


//register
import register from '../components/auth/register.vue'

const routes = [

    // //admin
    {
        path: '/admin/home',
        component: homeAdminIndex,
        meta: {
            requiresAuth: true
        }
    },

    //pages
    {
        path: '/',
        name: 'Home',
        component: homePagesIndex,
        meta: {
            requiresAuth: false
        }
    },

    //login
    {
        path: '/login',
        name: 'Login',
        component: login,
        meta: {
            requiresAuth: false
        }
    },

    //register
    {
        path: '/register',
        name: 'Register',
        component: register,
        meta: {
            requiresAuth: false
        }
    },

    //ceshtja penale
    {
        path: '/masa',
        name: 'Masa',
        component: masa,
        meta: {
            requiresAuth: false
        }
    },
    {
        path: '/hetime',
        name: 'Hetime',
        component: hetime,
        meta: {
            requiresAuth: false
        }
    },
    {
        path: '/gjykim_shakalla_1',
        name: 'Gjykim_shakalla_1',
        component: gjykim_shakalla_1,
        meta: {
            requiresAuth: false
        }
    },
    {
        path: '/gjykim_themeli',
        name: 'Gjykim_themeli',
        component: gjykim_themeli,
        meta: {
            requiresAuth: false
        }
    },
    {
        path: '/gjykim_apeli',
        name: 'Gjykim_apeli',
        component: gjykim_apeli,
        meta: {
            requiresAuth: false
        }
    },
    {
        path: '/gjykim_ne_gjykate_te_larte',
        name: 'Gjykim_ne_gjykate_te_larte',
        component: gjykim_ne_gjykate_te_larte,
        meta: {
            requiresAuth: false
        }
    },

    //notfound
    {
        path: '/:pathMatch(.*)*',
        name: 'notFound',
        component: notFound,
        meta: {
            requiresAuth: false
        }
    }

]
const router = createRouter({
    history: createWebHistory(),
    routes,
})

router.beforeEach((to, from, next) => {
    if (to.matched.some(record => record.meta.requiresAuth)) {
        const token = localStorage.getItem('token')
        if (!token) {
            next('/login')
        } else {
            next()
        }
    } else {
        next()
    }
})




export default router
