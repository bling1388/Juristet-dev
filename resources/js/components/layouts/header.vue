<script setup>

import { ref } from 'vue'
import { useRouter } from "vue-router"
import { reactive, onMounted } from 'vue';
import axios from 'axios';


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



const showNavHeader = ref(false)

const openNavheader = () => {

	showNavHeader.value = !showNavHeader.value
}

const logout = () => {
	localStorage.removeItem('token')
	router.push('/')
}
</script>

<template>
	<div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate-="true"
		data-kt-sticky-name="app-header-sticky" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
		<!--begin::Header container-->
		<div class="app-container container-xxl d-flex align-items-stretch justify-content-between"
			id="kt_app_header_container">
			<!--begin::Header wrapper-->
			<div class="app-header-wrapper d-flex flex-grow-1 align-items-stretch justify-content-between"
				id="kt_app_header_wrapper">
				<!--begin::Menu wrapper-->
				<div class="app-header-menu app-header-mobile-drawer align-items-start align-items-lg-center w-100"
					data-kt-drawer="true" data-kt-drawer-name="app-header-menu"
					data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
					data-kt-drawer-width="250px" data-kt-drawer-direction="end"
					data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
					data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
					data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
					<!--begin::Menu-->
					<div class="menu menu-rounded menu-column menu-lg-row menu-active-bg menu-state-primary menu-title-gray-700 menu-arrow-gray-400 menu-bullet-gray-400 my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0"
						id="#kt_header_menu" data-kt-menu="true">
						<!--begin:Menu item-->
						<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
							class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
							<!--begin:Menu link-->
							<router-link to="/masa" class="menu-link">
								<span class="menu-title">Çështje Penale</span>
								<span class="menu-arrow d-lg-none"></span>
							</router-link>
							<!--end:Menu link-->
							<!--begin:Menu sub-->

							<!--end:Menu sub-->
						</div>
						<!--end:Menu item-->
						<!--begin:Menu item-->
						<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
							class="menu-item menu-lg-down-accordion me-0 me-lg-2">
							<!--begin:Menu link-->

							<router-link to="/masa" class="menu-link">
								<span class="menu-title">Çështje Administrative</span>
								<span class="menu-arrow d-lg-none"></span>
							</router-link>

						</div>
						<!--end:Menu item-->
						<!--begin:Menu item-->
						<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
							class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
							<!--begin:Menu link-->
							<router-link to="/masa" class="menu-link">
								<span class="menu-title">Çështje Civile</span>
								<span class="menu-arrow d-lg-none"></span>
							</router-link>

						</div>
						<!--end:Menu item-->
						<!--begin:Menu item-->
						<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
							class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
							<!--begin:Menu link-->
							<router-link to="/masa" class="menu-link">
								<span class="menu-title">Çështje Kushtetuese</span>
								<span class="menu-arrow d-lg-none"></span>
							</router-link>

						</div>
						<!--end:Menu item-->
					</div>
					<!--end::Menu-->
				</div>
				<!--end::Menu wrapper-->
				<!--begin::Logo wrapper-->
				<div class="d-flex align-items-center">
					<!--begin::Logo wrapper-->
					<div class="btn btn-icon btn-color-gray-600 btn-active-color-primary ms-n3 me-2 d-flex d-lg-none"
						id="kt_app_sidebar_toggle">
						<i class="ki-outline ki-abstract-14 fs-2"></i>
					</div>
					<!--end::Logo wrapper-->
					<!--begin::Logo image-->
					<a href="../../demo23/dist/index.html" class="d-flex d-lg-none">
						<img alt="Logo" src="assets/media/logos/demo23.svg" class="h-20px theme-light-show" />
						<img alt="Logo" src="assets/media/logos/demo23-dark.svg" class="h-20px theme-dark-show" />
					</a>
					<!--end::Logo image-->
				</div>
				<!--end::Logo wrapper-->
				<!--begin::Navbar-->
				<div class="app-navbar flex-shrink-0">
					<!--begin::Chat-->
					<div class="app-navbar-item ms-1 ms-lg-3">
						<!--begin::Menu wrapper-->
						<div class="btn btn-icon btn-circle btn-color-gray-500 btn-active-color-primary btn-custom shadow-xs bg-body"
							id="kt_drawer_chat_toggle">
							<i class="ki-outline ki-notification fs-1"></i>
						</div>
						<!--end::Menu wrapper-->
					</div>
					<!--end::Chat-->
					<!--begin::Header menu mobile toggle-->
					<div class="app-navbar-item d-lg-none ms-2 me-n1" title="Show header menu">
						<div class="btn btn-icon btn-color-gray-600 btn-active-color-primary"
							id="kt_app_header_menu_toggle">
							<i class="ki-outline ki-text-align-left fs-2 fw-bold"></i>
						</div>
					</div>
					<!--end::Header menu mobile toggle-->
				</div>
				<!--end::Navbar-->
			</div>
			<!--end::Header wrapper-->
		</div>
		<!--end::Header container-->
	</div>
</template>