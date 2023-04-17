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
import gjykata_kushtetuese from '../components/pages/ceshtja-penale/gjykata_kushtetuese.vue'

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
            requiresAuth: true
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
            requiresAuth: true
        }
    },
    {
        path: '/hetime',
        name: 'Hetime',
        component: hetime,
        meta: {
            requiresAuth: true
        }
    },
    {
        path: '/gjykim_shakalla_1',
        name: 'Gjykim_shakalla_1',
        component: gjykim_shakalla_1,
        meta: {
            requiresAuth: true
        }
    },
    {
        path: '/gjykim_themeli',
        name: 'Gjykim_themeli',
        component: gjykim_themeli,
        meta: {
            requiresAuth: true
        }
    },
    {
        path: '/gjykim_apeli',
        name: 'Gjykim_apeli',
        component: gjykim_apeli,
        meta: {
            requiresAuth: true
        }
    },
    {
        path: '/gjykim_ne_gjykate_te_larte',
        name: 'Gjykim_ne_gjykate_te_larte',
        component: gjykim_ne_gjykate_te_larte,
        meta: {
            requiresAuth: true
        }
    },
    {
        path: '/gjykata_kushtetuese',
        name: 'Gjykata_kushtetuese',
        component: gjykata_kushtetuese,
        meta: {
            requiresAuth: true
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
    const isLoggedIn = !!localStorage.getItem('token')

    if (to.name === 'Login' && isLoggedIn) {
        next('/masa')
    } else if (to.matched.some(record => record.meta.requiresAuth) && !isLoggedIn) {
        next('/login')
    } else {
        next()
    }
})



export default router
