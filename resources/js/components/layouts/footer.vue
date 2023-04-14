
<script setup>

import { ref } from 'vue'
import { useRouter } from "vue-router"
import { reactive, onMounted } from 'vue';
import axios from 'axios';

const currentYear = new Date().getFullYear()

const router = useRouter();

const data = reactive({
	name: '',
	//   age: '',
	email: '',

});

onMounted(async () => {
	const response = await axios.get('/api/user', {
		headers: {
			Authorization: `Bearer ${localStorage.getItem('token')}`
		}
	});
	const responseData = response.data;
	// console.log(responseData.user.name);
	data.name = responseData.user.name;
	//   data.age = responseData.age;
	data.email = responseData.user.email;
});

</script>

<template>
	<div id="kt_app_footer" class="app-footer">
		<!--begin::Footer container-->
		<div class="app-container container-xxl d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
			<!--begin::Copyright-->
			<div class="text-dark order-2 order-md-1">
				<span class="text-muted fw-semibold me-1">{{ currentYear }}&copy;</span>
				<router-link to="/" class="text-gray-800 text-hover-primary">Juristet</router-link>
			</div>
			<!--end::Copyright-->
			<!--begin::Menu-->
			<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
				<li class="menu-item">
					<a href="https://futureblock.al" target="_blank" class="menu-link px-2">Designed by
						<strong class="ms-2"> FutureBlock</strong></a>
				</li>
				<!-- <li class="menu-item">
																									<a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
																								</li>
																								<li class="menu-item">
																									<a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
																								</li> -->
			</ul>
			<!--end::Menu-->
		</div>
		<!--end::Footer container-->
	</div>
</template>