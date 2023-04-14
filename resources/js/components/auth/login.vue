
<script setup>
import axios from 'axios';
import { reactive } from 'vue'

import { ref } from 'vue'
// import refreshToken from '@/token';
import { useRouter } from 'vue-router'

const router = useRouter()

let form = reactive({
	email: '',
	password: '',
})


let error = ref('')

const login = async () => {
	try {
		const response = await axios.post('/api/login', form, {
			withCredentials: true
		});

		if (response.data.success) {
			const newToken = response.data.data.token;
			localStorage.setItem('token', newToken);
			axios.defaults.headers.common['Authorization'] = `Bearer ${newToken}`;
			router.push('/admin/home');
		}
	} catch (e) {
		if (e && e.response.data && e.response.data.errors) {
			errors.value = Object.values(e.response.data.errors);
		} else {
			errors.value = e.response.data.message || "";
		}
	}

};

</script>
<style>
#kt_body {
	background-image: url('assets/media/auth/bg4.jpg');
}

[data-bs-theme="dark"] #kt_body {
	background-image: url('assets/media/auth/bg4-dark.jpg');
}
</style>
<template>
	<div>


		<!--end::Head-->
		<!--begin::Body-->
		<div id="kt_body" class=" app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center bgi-no-repeat">
			<!--begin::Theme mode setup on page load-->
			<!--end::Theme mode setup on page load-->
			<!--begin::Root-->
			<div class="d-flex flex-column flex-root" id="kt_app_root">
				<!--begin::Page bg image-->
				<!--end::Page bg image-->
				<!--begin::Authentication - Sign-in -->
				<div class="d-flex flex-column flex-column-fluid flex-lg-row" style="padding: 8.76rem;">
					<!--begin::Aside-->
					<div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
						<!--begin::Aside-->
						<div class="d-flex flex-center flex-lg-start flex-column">
							<!--begin::Logo-->
							<a href="../../demo23/dist/index.html" class="mb-7">
								<img alt="Logo" src="assets/media/logos/custom-3.svg" />
							</a>
							<!--end::Logo-->
							<!--begin::Title-->
							<h2 class="text-white fw-normal m-0">Branding tools designed for your business</h2>
							<!--end::Title-->
						</div>
						<!--begin::Aside-->
					</div>
					<!--begin::Aside-->
					<!--begin::Body-->
					<div
						class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12 p-lg-20">
						<!--begin::Card-->
						<div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-4 w-md-600px p-20">
							<!--begin::Wrapper-->
							<div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-15 pb-lg-20">
								<!--begin::Form-->
								<form class="form w-100" novalidate="novalidate" @submit.prevent="login">
									<!--begin::Heading-->
									<div class="text-center mb-11">
										<!--begin::Title-->
										<h1 class="text-dark fw-bolder mb-3">Sign In</h1>
										<!--end::Title-->
										<!--begin::Subtitle-->
										<div class="text-gray-500 fw-semibold fs-6">Your Social Campaigns</div>
										<!--end::Subtitle=-->
									</div>
									<!--begin::Heading-->
									<!--begin::Login options-->
									<div class="row g-3 mb-9">
										<!--begin::Col-->
										<div class="col-md-6">
											<!--begin::Google link=-->
											<a href="#"
												class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
												<img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg"
													class="h-15px me-3" />Sign in with Google</a>
											<!--end::Google link=-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6">
											<!--begin::Google link=-->
											<a href="#"
												class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
												<img alt="Logo" src="assets/media/svg/brand-logos/apple-black.svg"
													class="theme-light-show h-15px me-3" />
												<img alt="Logo" src="assets/media/svg/brand-logos/apple-black-dark.svg"
													class="theme-dark-show h-15px me-3" />Sign in with Apple</a>
											<!--end::Google link=-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Login options-->
									<!--begin::Separator-->
									<div class="separator separator-content my-14">
										<span class="w-125px text-gray-500 fw-semibold fs-7">Or with email</span>
									</div>
									<!--end::Separator-->
									<!--begin::Input group=-->
									<div class="fv-row mb-8">
										<!--begin::Email-->
										<input type="text" placeholder="Email" name="email" autocomplete="off"
											class="form-control bg-transparent" v-model="form.email" />
										<!--end::Email-->
									</div>
									<!--end::Input group=-->
									<div class="fv-row mb-3">
										<!--begin::Password-->
										<input type="password" placeholder="Password" name="password" autocomplete="off"
											class="form-control bg-transparent" v-model="form.password" />
										<!--end::Password-->
									</div>
									<!--end::Input group=-->
									<!--begin::Wrapper-->
									<div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
										<div></div>
										<!--begin::Link-->
										<a href="../../demo23/dist/authentication/layouts/creative/reset-password.html"
											class="link-primary">Forgot Password ?</a>
										<!--end::Link-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Submit button-->
									<div class="d-grid mb-10">
										<button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
											<!--begin::Indicator label-->
											<span class="indicator-label">Sign In</span>
											<!--end::Indicator label-->
											<!--begin::Indicator progress-->
											<span class="indicator-progress">Please wait...
												<span
													class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
											<!--end::Indicator progress-->
										</button>
									</div>
									<!--end::Submit button-->
									<!--begin::Sign up-->
									<div class="text-gray-500 text-center fw-semibold fs-6">Not a Member yet?
										<router-link to="/register" class="link-primary">Sign up</router-link>
									</div>
									<!--end::Sign up-->
								</form>
								<!--end::Form-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Footer-->
							<div class="d-flex flex-stack px-lg-10">
								<!--begin::Languages-->
								<div class="me-0">
									<!--begin::Toggle-->
									<button
										class="btn btn-flex btn-link btn-color-gray-700 btn-active-color-primary rotate fs-base"
										data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start"
										data-kt-menu-offset="0px, 0px">
										<img data-kt-element="current-lang-flag" class="w-20px h-20px rounded me-3"
											src="assets/media/flags/united-states.svg" alt="" />
										<span data-kt-element="current-lang-name" class="me-1">English</span>
										<i class="ki-outline ki-down fs-5 text-muted rotate-180 m-0"></i>
									</button>
									<!--end::Toggle-->
									<!--begin::Menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-4 fs-7"
										data-kt-menu="true" id="kt_auth_lang_menu">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link d-flex px-5" data-kt-lang="English">
												<span class="symbol symbol-20px me-4">
													<img data-kt-element="lang-flag" class="rounded-1"
														src="assets/media/flags/united-states.svg" alt="" />
												</span>
												<span data-kt-element="lang-name">English</span>
											</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link d-flex px-5" data-kt-lang="Spanish">
												<span class="symbol symbol-20px me-4">
													<img data-kt-element="lang-flag" class="rounded-1"
														src="assets/media/flags/spain.svg" alt="" />
												</span>
												<span data-kt-element="lang-name">Spanish</span>
											</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link d-flex px-5" data-kt-lang="German">
												<span class="symbol symbol-20px me-4">
													<img data-kt-element="lang-flag" class="rounded-1"
														src="assets/media/flags/germany.svg" alt="" />
												</span>
												<span data-kt-element="lang-name">German</span>
											</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link d-flex px-5" data-kt-lang="Japanese">
												<span class="symbol symbol-20px me-4">
													<img data-kt-element="lang-flag" class="rounded-1"
														src="assets/media/flags/japan.svg" alt="" />
												</span>
												<span data-kt-element="lang-name">Japanese</span>
											</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link d-flex px-5" data-kt-lang="French">
												<span class="symbol symbol-20px me-4">
													<img data-kt-element="lang-flag" class="rounded-1"
														src="assets/media/flags/france.svg" alt="" />
												</span>
												<span data-kt-element="lang-name">French</span>
											</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu-->
								</div>
								<!--end::Languages-->
								<!--begin::Links-->
								<div class="d-flex fw-semibold text-primary fs-base gap-5">
									<a href="../../demo23/dist/pages/team.html" target="_blank">Terms</a>
									<a href="../../demo23/dist/pages/pricing/column.html" target="_blank">Plans</a>
									<a href="../../demo23/dist/pages/contact.html" target="_blank">Contact Us</a>
								</div>
								<!--end::Links-->
							</div>
							<!--end::Footer-->
						</div>
						<!--end::Card-->
					</div>
					<!--end::Body-->
				</div>
				<!--end::Authentication - Sign-in-->
			</div>
			<!--end::Root-->
			<!--begin::Javascript-->
		</div>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->

	</div>
</template>


