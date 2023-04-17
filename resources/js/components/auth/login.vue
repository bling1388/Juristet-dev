
<script setup>
import axios from 'axios';
import { reactive } from 'vue'

import { ref } from 'vue'
// import refreshToken from '@/token';
import { useRouter } from 'vue-router';


const router = useRouter();
const isAuthenticated = ref(false);
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
		isAuthenticated.value = true;
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
				<div class="d-flex flex-column flex-column-fluid flex-lg-row flex-grow-1 min-vh-100">
					<!--begin::Aside-->
					<div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10 mb-20">
						<!--begin::Aside-->
						<div class="d-flex flex-center flex-lg-start flex-column">
							<!--begin::Logo-->
							<a href="#" class="mb-7">
								<img alt="Logo" src="assets/media/logos/custom-3.svg" />
							</a>
							<!--end::Logo-->
							<!--begin::Title-->
							<h1 class="text-white fw-bold m-0">Juristët</h1>
							<!--end::Title-->
						</div>
						<!--begin::Aside-->
					</div>
					<!--begin::Aside-->
					<!--begin::Body-->
					<div
						class="d-flex  flex-lg-row-auto justify-content-center justify-content-lg-end p-12 p-lg-20 h-800px mt-20">
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

										<!--end::Subtitle=-->
									</div>

									<div class="separator separator-content my-14">
										<span class="w-125px text-gray-500 fw-semibold fs-7"></span>
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


