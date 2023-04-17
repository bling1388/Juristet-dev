<template>
    <!-- <Base /> -->
    <!-- <div v-if="isAuthenticated">
        <Base />

    </div>
    <div v-else>
        <router-view></router-view>

    </div> -->
    <router-view></router-view>
</template>

<script setup>
import Base from '@/components/layouts/base.vue';
// import { isAuthenticated } from '@/components/auth/login.vue';
// import Login from '@/components/auth/login.vue';
// import { computed } from 'vue'
// import routes from '@/router/index.js'

// const LoginPage = computed(() => {

//     return routes.name === 'login'
// })
</script>