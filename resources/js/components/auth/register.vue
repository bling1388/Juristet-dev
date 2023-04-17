
<script setup>
import { reactive } from 'vue'
import { ref } from 'vue'

import { useRouter } from 'vue-router'

const router = useRouter()

let form = reactive({
	name: '',
	email: '',
	password: '',
	c_password: '',
})

let error = ref('')

const register = async () => {
	await axios.post('/api/register', form)
		// withCredentials: true
		.then(response => {
			if (response.data.success) {
				localStorage.setItem('token', response.data.data.token);
				router.push('/admin/home')
			} else {
				error.value = response.data.message;
			}
		})
}
</script>
<template>
	<!--end::Head-->
	<!--begin::Body-->

	<body id="kt_body"
		class="app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center bgi-no-repeat flex-grow-1 min-vh-100">
		<!--begin::Theme mode setup on page load-->
		<!--end::Theme mode setup on page load-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<!--begin::Page bg image-->
			<!--end::Page bg image-->
			<!--begin::Authentication - Sign-up -->
			<div class="d-flex flex-column flex-column-fluid flex-lg-row">
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
						<h1 class="text-white  fw-bold m-0">Juristët</h1>
						<!--end::Title-->
					</div>
					<!--begin::Aside-->
				</div>
				<!--begin::Aside-->
				<!--begin::Body-->
				<div
					class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12 p-lg-20 h-950px mt-20">
					<!--begin::Card-->
					<div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-4 w-md-600px p-20">
						<!--begin::Wrapper-->
						<div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-15 pb-lg-20">
							<!--begin::Form-->
							<form @submit.prevent="register" class="form w-100" novalidate="novalidate" id="kt_sign_up_form"
								data-kt-redirect-url="../../demo23/dist/authentication/layouts/creative/sign-in.html"
								action="#">
								<!--begin::Heading-->
								<div class="text-center mb-11">
									<!--begin::Title-->
									<h1 class="text-dark fw-bolder mb-3">Sign Up</h1>
									<!--end::Title-->
									<!--begin::Subtitle-->

									<!--end::Subtitle=-->
								</div>

								<div class="separator separator-content my-14">
									<span class="w-125px text-gray-500 fw-semibold fs-7"></span>
								</div>
								<!--end::Separator-->
								<!--begin::Input group=-->
								<p class="text-danger" v-if="error">{{ error }}</p>
								<div class="fv-row mb-8">
									<!--begin::Name-->
									<input type="text" placeholder="Name" name="name" autocomplete="off"
										class="form-control bg-transparent" v-model="form.name" />
									<!--end::Name-->
								</div>
								<div class="fv-row mb-8">
									<!--begin::Email-->
									<input type="text" placeholder="Email" name="email" autocomplete="off"
										class="form-control bg-transparent" v-model="form.email" />
									<!--end::Email-->
								</div>
								<!--begin::Input group-->
								<div class="fv-row mb-8" data-kt-password-meter="true">
									<!--begin::Wrapper-->
									<div class="mb-1">
										<!--begin::Input wrapper-->
										<div class="position-relative mb-3">
											<input class="form-control bg-transparent" type="password"
												placeholder="Password" name="password" autocomplete="off"
												v-model="form.password" />
											<span
												class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
												data-kt-password-meter-control="visibility">
												<i class="ki-outline ki-eye-slash fs-2"></i>
												<i class="ki-outline ki-eye fs-2 d-none"></i>
											</span>
										</div>
										<!--end::Input wrapper-->
										<!--begin::Meter-->
										<div class="d-flex align-items-center mb-3"
											data-kt-password-meter-control="highlight">
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
											</div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
											</div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
											</div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
										</div>
										<!--end::Meter-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Hint-->
									<div class="text-muted">Use 8 or more characters with a mix of letters, numbers &
										symbols.</div>
									<!--end::Hint-->
								</div>
								<!--end::Input group=-->
								<!--end::Input group=-->
								<div class="fv-row mb-8">
									<!--begin::Repeat Password-->
									<input placeholder="Repeat Password" name="confirm-password" type="password"
										autocomplete="off" class="form-control bg-transparent" v-model="form.c_password" />
									<!--end::Repeat Password-->
								</div>
								<!--end::Input group=-->
								<!--begin::Accept-->
								<div class="fv-row mb-8">
									<label class="form-check form-check-inline">
										<input class="form-check-input" type="checkbox" name="toc" value="1" />
										<span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">I Accept the
											<a href="#" class="ms-1 link-primary">Terms</a></span>
									</label>
								</div>
								<!--end::Accept-->
								<!--begin::Submit button-->
								<div class="d-grid mb-10">
									<button type="submit" id="kt_sign_up_submit" class="btn btn-primary">
										<!--begin::Indicator label-->
										<span class="indicator-label">Sign up</span>
										<!--end::Indicator label-->
										<!--begin::Indicator progress-->
										<span class="indicator-progress">Please wait...
											<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										<!--end::Indicator progress-->
									</button>
								</div>
								<!--end::Submit button-->
								<!--begin::Sign up-->
								<div class="text-gray-500 text-center fw-semibold fs-6">Already have an Account?
									<router-link to="/login" class="link-primary">Sign up</router-link>
								</div> <!--end::Sign up-->
							</form>
							<!--end::Form-->
						</div>

					</div>
					<!--end::Card-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Authentication - Sign-up-->
		</div>

	</body>
	<!--end::Body-->
</template>


