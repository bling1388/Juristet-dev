<script setup>
import { ref } from 'vue'
import { useRouter } from "vue-router"
import { reactive, onMounted } from 'vue';
import axios from 'axios';
const logout = () => {
	localStorage.removeItem('token')
	router.push('/')
}
</script>
<template>
	<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
		data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="275px"
		data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_toggle">
		<!--begin::Logo-->
		<div class="d-flex flex-stack px-4 px-lg-6 py-3 py-lg-8" id="kt_app_sidebar_logo">
			<!--begin::Logo image-->
			<a href="#">
				<!-- <img alt="Logo" src="assets/media/admin.jpg" class="h-20px h-lg-45px theme-light-show" /> -->
				<!-- <img alt="Logo" src="assets/media/logos/demo23-dark.svg" class="h-20px h-lg-25px theme-dark-show" /> -->
				<H1>Logo</H1>
			</a>
			<!--end::Logo image-->
			<!--begin::User menu-->
			<div class="ms-3">
				<!--begin::Menu wrapper-->
				<div class="cursor-pointer position-relative symbol symbol-circle symbol-40px"
					data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
					data-kt-menu-placement="bottom-end">
					<img src="assets/media/avatars/300-2.jpg" alt="user" />
					<div class="position-absolute rounded-circle bg-success start-100 top-100 h-8px w-8px ms-n3 mt-n3">
					</div>
				</div>
				<!--begin::User account menu-->
				<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
					data-kt-menu="true">
					<!--begin::Menu item-->
					<div class="menu-item px-3">
						<div class="menu-content d-flex align-items-center px-3">
							<!--begin::Avatar-->
							<div class="symbol symbol-50px me-5">
								<img alt="Logo" src="assets/media/avatars/300-2.jpg" />
							</div>
							<!--end::Avatar-->
							<!--begin::Username-->
							<div class="d-flex flex-column">
								<div class="fw-bold d-flex align-items-center fs-5">Filan Fisteku
									<span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
								</div>
								<a href="#" class="fw-semibold text-muted text-hover-primary fs-7">filani@gmail.com</a>
							</div>
							<!--end::Username-->
						</div>
					</div>
					<!--end::Menu item-->
					<!--begin::Menu separator-->
					<div class="separator my-2"></div>
					<!--end::Menu separator-->
					<!--begin::Menu item-->
					<div class="menu-item px-5">
						<a href="../../demo23/dist/account/overview.html" class="menu-link px-5">My Profile</a>
					</div>
					<!--end::Menu item-->
					<!--begin::Menu item-->
					<div class="menu-item px-5">
						<a href="../../demo23/dist/apps/projects/list.html" class="menu-link px-5">
							<span class="menu-text">My Projects</span>
							<span class="menu-badge">
								<span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
							</span>
						</a>
					</div>
					<!--end::Menu item-->

					<!--begin::Menu item-->
					<div class="menu-item px-5">
						<a href="../../demo23/dist/account/statements.html" class="menu-link px-5">My Statements</a>
					</div>
					<!--end::Menu item-->
					<!--begin::Menu separator-->
					<div class="separator my-2"></div>
					<!--end::Menu separator-->
					<!--begin::Menu item-->
					<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
						data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
						<a href="#" class="menu-link px-5">
							<span class="menu-title position-relative">Mode
								<span class="ms-5 position-absolute translate-middle-y top-50 end-0">
									<i class="ki-outline ki-night-day theme-light-show fs-2"></i>
									<i class="ki-outline ki-moon theme-dark-show fs-2"></i>
								</span></span>
						</a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
							data-kt-menu="true" data-kt-element="theme-mode-menu">
							<!--begin::Menu item-->
							<div class="menu-item px-3 my-0">
								<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
									<span class="menu-icon" data-kt-element="icon">
										<i class="ki-outline ki-night-day fs-2"></i>
									</span>
									<span class="menu-title">Light</span>
								</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3 my-0">
								<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
									<span class="menu-icon" data-kt-element="icon">
										<i class="ki-outline ki-moon fs-2"></i>
									</span>
									<span class="menu-title">Dark</span>
								</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3 my-0">
								<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
									<span class="menu-icon" data-kt-element="icon">
										<i class="ki-outline ki-screen fs-2"></i>
									</span>
									<span class="menu-title">System</span>
								</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</div>
					<!--end::Menu item-->
					<!--begin::Menu item-->
					<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
						data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
						<a href="#" class="menu-link px-5">
							<span class="menu-title position-relative">Language
								<span
									class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
									<img class="w-15px h-15px rounded-1 ms-2" src="assets/media/flags/united-states.svg"
										alt="" /></span></span>
						</a>
						<!--begin::Menu sub-->
						<div class="menu-sub menu-sub-dropdown w-175px py-4">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo23/dist/account/settings.html" class="menu-link d-flex px-5 active">
									<span class="symbol symbol-20px me-4">
										<img class="rounded-1" src="assets/media/flags/united-states.svg" alt="" />
									</span>English</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo23/dist/account/settings.html" class="menu-link d-flex px-5">
									<span class="symbol symbol-20px me-4">
										<img class="rounded-1" src="assets/media/flags/spain.svg" alt="" />
									</span>Spanish</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo23/dist/account/settings.html" class="menu-link d-flex px-5">
									<span class="symbol symbol-20px me-4">
										<img class="rounded-1" src="assets/media/flags/germany.svg" alt="" />
									</span>German</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo23/dist/account/settings.html" class="menu-link d-flex px-5">
									<span class="symbol symbol-20px me-4">
										<img class="rounded-1" src="assets/media/flags/japan.svg" alt="" />
									</span>Japanese</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo23/dist/account/settings.html" class="menu-link d-flex px-5">
									<span class="symbol symbol-20px me-4">
										<img class="rounded-1" src="assets/media/flags/france.svg" alt="" />
									</span>French</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu sub-->
					</div>
					<!--end::Menu item-->
					<!--begin::Menu item-->
					<div class="menu-item px-5 my-1">
						<a href="../../demo23/dist/account/settings.html" class="menu-link px-5">Account Settings</a>
					</div>
					<!--end::Menu item-->
					<!--begin::Menu item-->
					<div class="menu-item px-5">
						<a href="#" @click="logout" class="menu-link px-5">Sign Out</a>
					</div>
					<!--end::Menu item-->
				</div>
				<!--end::User account menu-->
				<!--end::Menu wrapper-->
			</div>
			<!--end::User menu-->
		</div>
		<!--end::Logo-->
		<div class="d-flex justify-content-center px-4 px-lg-8 py-4">
			<!--begin::Details-->
			<div class="d-flex align-items-center">
				<!--begin::Avatar-->
				<div class="symbol symbol-70px symbol-circle">
					<img alt="Pic" src="assets/media/avatar-logo.png">
					<!-- <img alt="Pic" src="assets/media/avatars/300-2.jpg"> -->

				</div>
				<!--end::Avatar-->
				<!--begin::Details-->
				<div class="ms-4">
					<a href="../../demo23/dist/apps/contacts/view-contact.html"
						class="fs-2 fw-bold text-gray-900 text-hover-primary mb-2">Emer Mbiemer</a>
					<div class="fw-semibold fs-7 text-muted">Vepra Penale</div>
				</div>
				<!--end::Details-->
			</div>
			<!--end::Details-->
		</div>
		<!--begin::Sidebar nav-->
		<div class="flex-column-fluid px-4 px-lg-8 py-4" id="kt_app_sidebar_nav">
			<!--begin::Nav wrapper-->
			<div id="kt_app_sidebar_nav_wrapper" class="d-flex flex-column hover-scroll-y pe-4 me-n4" data-kt-scroll="true"
				data-kt-scroll-activate="true" data-kt-scroll-height="auto"
				data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
				data-kt-scroll-wrappers="#kt_app_sidebar, #kt_app_sidebar_nav" data-kt-scroll-offset="5px">
				<!--begin::Progress-->
				<div class="d-flex align-items-center flex-column w-100 mb-6">
					<div class="d-flex justify-content-between fw-bolder fs-6 text-gray-800 w-100 mt-auto mb-3">
						<span>Afati i ankimimit</span>
					</div>
					<div class="w-100 bg-light-primary rounded mb-2" style="height: 10px">
						<div class="bg-danger rounded" role="progressbar" style="height: 10px; width: 80%;"
							aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<div class="fw-semibold fs-7 text-primary w-100 mt-auto">
						<span>Edhe 2 dite te mbetura</span>
					</div>
				</div>
				<!--end::Progress-->
				<!--begin::Stats-->
				<!-- <div class="d-flex mb-3 mb-lg-6"> -->


				<!--begin::Links-->
				<div class="mb-6">
					<!--begin::Title-->
					<h3 class="text-gray-800 fw-bold mb-8">Çështje Penale</h3>
					<!--end::Title-->
					<!--begin::Row-->
					<div class="row row-cols-3" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
						<!--begin::Col-->
						<div class="col mb-4">
							<!--begin::Link-->
							<router-link to="/masa"
								class="btn btn-icon btn-outline btn-bg-light btn-active-light-primary btn-flex flex-column   flex-center w-lg-90px h-lg-90px w-70px h-70px border-gray-200">
								<span class="mb-2">
									<i class="ki-outline ki-calendar fs-1"></i>
								</span>
								<!--end::Icon-->
								<!--begin::Label-->
								<span class="fs-7 fw-bold ">Masa</span>
								<!--end::Label-->

							</router-link>
							<!--end::Link-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col mb-4">
							<!--begin::Link-->
							<router-link to="/hetime"
								class="btn btn-icon btn-outline btn-bg-light btn-active-light-primary btn-flex flex-column flex-center w-lg-90px h-lg-90px w-70px h-70px border-gray-200">
								<!--begin::Icon-->
								<span class="mb-2">
									<i class="ki-outline ki-security-check fs-1"></i>
								</span>
								<!--end::Icon-->
								<!--begin::Label-->
								<span class="fs-7 fw-bold">Hetimet</span>
								<!--end::Label-->
							</router-link>
							<!--end::Link-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col mb-4">
							<!--begin::Link-->
							<router-link to="/gjykim_shakalla_1"
								class="btn btn-icon btn-outline btn-bg-light btn-active-light-primary btn-flex flex-column flex-center w-lg-90px h-lg-90px w-70px h-70px border-gray-200">
								<!--begin::Icon-->
								<span class="mb-2">
									<i class="ki-outline ki-wifi-square fs-1"></i>
								</span>
								<!--end::Icon-->
								<!--begin::Label-->
								<span class="fs-7 fw-bold">Gjykim ne shkallen I</span>
								<!--end::Label-->
							</router-link>
							<!--end::Link-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col mb-4">
							<!--begin::Link-->
							<router-link to="/gjykim_themeli"
								class="btn btn-icon btn-outline btn-bg-light btn-active-light-primary btn-flex flex-column flex-center w-lg-90px h-lg-90px w-70px h-70px border-gray-200">
								<!--begin::Icon-->
								<span class="mb-2">
									<i class="ki-outline ki-chart-line-up-2 fs-1"></i>
								</span>
								<!--end::Icon-->
								<!--begin::Label-->
								<span class="fs-7 fw-bold">Gjykim Themeli</span>
								<!--end::Label-->
							</router-link>
							<!--end::Link-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col mb-4">
							<!--begin::Link-->
							<router-link to="/gjykim_apeli"
								class="btn btn-icon btn-outline btn-bg-light btn-active-light-primary btn-flex flex-column flex-center w-lg-90px h-lg-90px w-70px h-70px border-gray-200">
								<!--begin::Icon-->
								<span class="mb-2">
									<i class="ki-outline ki-shield-tick fs-1"></i>
								</span>
								<!--end::Icon-->
								<!--begin::Label-->
								<span class="fs-7 fw-bold">Gjykim Apeli</span>
								<!--end::Label-->
							</router-link>
							<!--end::Link-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col mb-4">
							<!--begin::Link-->
							<router-link to="/gjykim_ne_gjykate_te_larte"
								class="btn btn-icon btn-outline btn-bg-light btn-active-light-primary btn-flex flex-column flex-center w-lg-90px h-lg-90px w-70px h-70px border-gray-200">
								<!--begin::Icon-->
								<span class="mb-2">
									<i class="ki-outline ki-rocket fs-1"></i>
								</span>
								<!--end::Icon-->
								<!--begin::Label-->
								<span class="fs-7 fw-bold">Gjykim ne gjykate te larte</span>
								<!--end::Label-->
							</router-link>
							<!--end::Link-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col mb-4">
							<!--begin::Link-->
							<router-link to="/gjykata_kushtetuese"
								class="btn btn-icon btn-outline btn-bg-light btn-active-light-primary btn-flex flex-column flex-center w-lg-90px h-lg-90px w-70px h-70px border-gray-200">
								<!--begin::Icon-->
								<span class="mb-2">
									<i class="ki-outline ki-geolocation fs-1"></i>
								</span>
							<!--end::Icon-->
							<!--begin::Label-->
							<span class="fs-7 fw-bold">Gjykate Kushtetuese</span>
							<!--end::Label-->
						</router-link>
						<!--end::Link-->
					</div>
					<!--end::Col-->
					<!--begin::Col-->
					<!-- <div class="col mb-4">
							
							<a href="../../demo23/dist/apps/file-manager/folders.html"
								class="btn btn-icon btn-outline btn-bg-light btn-active-light-primary btn-flex flex-column flex-center w-lg-90px h-lg-90px w-70px h-70px border-gray-200"
								data-kt-button="true">
								
									<span class="mb-2">
										<i class="ki-outline ki-abstract-28 fs-1"></i>
									</span>
								
									<span class="fs-7 fw-bold">Te tjera</span>
								
								</a>
							
							</div> -->
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col mb-4">
							<!--begin::Link-->
							<a href="../../demo23/dist/apps/contacts/add-contact.html"
								class="btn btn-icon btn-outline btn-bg-light btn-active-light-primary btn-flex flex-column flex-center w-lg-90px h-lg-90px w-70px h-70px active border-primary border-dashed"
								data-kt-button="true">
								<!--begin::Icon-->
								<span class="mb-2">
									<i class="ki-outline ki-plus fs-1"></i>
								</span>
								<!--end::Icon-->
								<!--begin::Label-->
								<span class="fs-7 fw-bold">Shto</span>
								<!--end::Label-->
							</a>
							<!--end::Link-->
						</div>
						<!--end::Col-->
					</div>
					<!--end::Row-->
				</div>
				<!--end::Links-->
			</div>
			<!--end::Nav wrapper-->
		</div>
		<!--end::Sidebar nav-->
		<!--begin::Footer-->
		<div class="flex-column-auto d-flex flex-center px-4 px-lg-8 py-3 py-lg-8" id="kt_app_sidebar_footer">
			<!--begin::Apps-->
			<div class="app-footer-item me-6">
				<!--begin::Menu- wrapper-->
				<div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px"
					data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
					data-kt-menu-placement="bottom-start">
					<i class="ki-outline ki-abstract-26 fs-2"></i>
				</div>
				<!--begin::My apps-->
				<div class="menu menu-sub menu-sub-dropdown menu-column w-100 w-sm-350px" data-kt-menu="true">
					<!--begin::Card-->
					<div class="card">
						<!--begin::Card header-->
						<div class="card-header">
							<!--begin::Card title-->
							<div class="card-title">My Apps</div>
							<!--end::Card title-->
							<!--begin::Card toolbar-->
							<div class="card-toolbar">
								<!--begin::Menu-->
								<button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n3"
									data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
									data-kt-menu-placement="bottom-end">
									<i class="ki-outline ki-setting-3 fs-2"></i>
								</button>
								<!--begin::Menu 3-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
									data-kt-menu="true">
									<!--begin::Heading-->
									<div class="menu-item px-3">
										<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
									</div>
									<!--end::Heading-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Create Invoice</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link flex-stack px-3">Create Payment
											<span class="ms-2" data-bs-toggle="tooltip"
												title="Specify a target name for future usage and reference">
												<i class="ki-outline ki-information fs-6"></i>
											</span></a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Generate Bill</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3" data-kt-menu-trigger="hover"
										data-kt-menu-placement="right-end">
										<a href="#" class="menu-link px-3">
											<span class="menu-title">Subscription</span>
											<span class="menu-arrow"></span>
										</a>
										<!--begin::Menu sub-->
										<div class="menu-sub menu-sub-dropdown w-175px py-4">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Plans</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Billing</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Statements</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator my-2"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content px-3">
													<!--begin::Switch-->
													<label
														class="form-check form-switch form-check-custom form-check-solid">
														<!--begin::Input-->
														<input class="form-check-input w-30px h-20px" type="checkbox"
															value="1" checked="checked" name="notifications" />
														<!--end::Input-->
														<!--end::Label-->
														<span class="form-check-label text-muted fs-6">Recuring</span>
														<!--end::Label-->
													</label>
													<!--end::Switch-->
												</div>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu sub-->
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3 my-1">
										<a href="#" class="menu-link px-3">Settings</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu 3-->
								<!--end::Menu-->
							</div>
							<!--end::Card toolbar-->
						</div>
						<!--end::Card header-->
						<!--begin::Card body-->
						<div class="card-body py-5">
							<!--begin::Scroll-->
							<div class="mh-450px scroll-y me-n5 pe-5">
								<!--begin::Row-->
								<div class="row g-2">
									<!--begin::Col-->
									<div class="col-4">
										<a href="#"
											class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
											<img src="assets/media/svg/brand-logos/amazon.svg" class="w-25px h-25px mb-2"
												alt="" />
											<span class="fw-semibold">AWS</span>
										</a>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-4">
										<a href="#"
											class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
											<img src="assets/media/svg/brand-logos/angular-icon-1.svg"
												class="w-25px h-25px mb-2" alt="" />
											<span class="fw-semibold">AngularJS</span>
										</a>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-4">
										<a href="#"
											class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
											<img src="assets/media/svg/brand-logos/atica.svg" class="w-25px h-25px mb-2"
												alt="" />
											<span class="fw-semibold">Atica</span>
										</a>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-4">
										<a href="#"
											class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
											<img src="assets/media/svg/brand-logos/beats-electronics.svg"
												class="w-25px h-25px mb-2" alt="" />
											<span class="fw-semibold">Music</span>
										</a>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-4">
										<a href="#"
											class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
											<img src="assets/media/svg/brand-logos/codeigniter.svg"
												class="w-25px h-25px mb-2" alt="" />
											<span class="fw-semibold">Codeigniter</span>
										</a>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-4">
										<a href="#"
											class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
											<img src="assets/media/svg/brand-logos/bootstrap-4.svg"
												class="w-25px h-25px mb-2" alt="" />
											<span class="fw-semibold">Bootstrap</span>
										</a>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-4">
										<a href="#"
											class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
											<img src="assets/media/svg/brand-logos/google-tag-manager.svg"
												class="w-25px h-25px mb-2" alt="" />
											<span class="fw-semibold">GTM</span>
										</a>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-4">
										<a href="#"
											class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
											<img src="assets/media/svg/brand-logos/disqus.svg" class="w-25px h-25px mb-2"
												alt="" />
											<span class="fw-semibold">Disqus</span>
										</a>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-4">
										<a href="#"
											class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
											<img src="assets/media/svg/brand-logos/dribbble-icon-1.svg"
												class="w-25px h-25px mb-2" alt="" />
											<span class="fw-semibold">Dribble</span>
										</a>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-4">
										<a href="#"
											class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
											<img src="assets/media/svg/brand-logos/google-play-store.svg"
												class="w-25px h-25px mb-2" alt="" />
											<span class="fw-semibold">Play Store</span>
										</a>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-4">
										<a href="#"
											class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
											<img src="assets/media/svg/brand-logos/google-podcasts.svg"
												class="w-25px h-25px mb-2" alt="" />
											<span class="fw-semibold">Podcasts</span>
										</a>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-4">
										<a href="#"
											class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
											<img src="assets/media/svg/brand-logos/figma-1.svg" class="w-25px h-25px mb-2"
												alt="" />
											<span class="fw-semibold">Figma</span>
										</a>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-4">
										<a href="#"
											class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
											<img src="assets/media/svg/brand-logos/github.svg" class="w-25px h-25px mb-2"
												alt="" />
											<span class="fw-semibold">Github</span>
										</a>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-4">
										<a href="#"
											class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
											<img src="assets/media/svg/brand-logos/gitlab.svg" class="w-25px h-25px mb-2"
												alt="" />
											<span class="fw-semibold">Gitlab</span>
										</a>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-4">
										<a href="#"
											class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
											<img src="assets/media/svg/brand-logos/instagram-2-1.svg"
												class="w-25px h-25px mb-2" alt="" />
											<span class="fw-semibold">Instagram</span>
										</a>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-4">
										<a href="#"
											class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
											<img src="assets/media/svg/brand-logos/pinterest-p.svg"
												class="w-25px h-25px mb-2" alt="" />
											<span class="fw-semibold">Pinterest</span>
										</a>
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
							</div>
							<!--end::Scroll-->
						</div>
						<!--end::Card body-->
					</div>
					<!--end::Card-->
				</div>
				<!--end::My apps-->
				<!--end::Menu wrapper-->
			</div>
			<!--end::Apps-->
			<!--begin::Quick links-->
			<div class="app-footer-item me-6">
				<!--begin::Menu- wrapper-->
				<div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px"
					data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
					data-kt-menu-placement="bottom-start">
					<i class="ki-outline ki-notification-status fs-2"></i>
				</div>
				<!--begin::Menu-->
				<div class="menu menu-sub menu-sub-dropdown menu-column w-250px w-lg-325px" data-kt-menu="true">
					<!--begin::Heading-->
					<div class="d-flex flex-column flex-center bgi-no-repeat rounded-top px-9 py-10"
						style="background-image:url('assets/media/misc/menu-header-bg.jpg')">
						<!--begin::Title-->
						<h3 class="text-white fw-semibold mb-3">Quick Links</h3>
						<!--end::Title-->
						<!--begin::Status-->
						<span class="badge bg-primary text-inverse-primary py-2 px-3">25 pending tasks</span>
						<!--end::Status-->
					</div>
					<!--end::Heading-->
					<!--begin:Nav-->
					<div class="row g-0">
						<!--begin:Item-->
						<div class="col-6">
							<a href="../../demo23/dist/apps/projects/budget.html"
								class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end border-bottom">
								<i class="ki-outline ki-dollar fs-3x text-primary mb-2"></i>
								<span class="fs-5 fw-semibold text-gray-800 mb-0">Accounting</span>
								<span class="fs-7 text-gray-400">eCommerce</span>
							</a>
						</div>
						<!--end:Item-->
						<!--begin:Item-->
						<div class="col-6">
							<a href="../../demo23/dist/apps/projects/settings.html"
								class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-bottom">
								<i class="ki-outline ki-sms fs-3x text-primary mb-2"></i>
								<span class="fs-5 fw-semibold text-gray-800 mb-0">Administration</span>
								<span class="fs-7 text-gray-400">Console</span>
							</a>
						</div>
						<!--end:Item-->
						<!--begin:Item-->
						<div class="col-6">
							<a href="../../demo23/dist/apps/projects/list.html"
								class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end">
								<i class="ki-outline ki-abstract-41 fs-3x text-primary mb-2"></i>
								<span class="fs-5 fw-semibold text-gray-800 mb-0">Projects</span>
								<span class="fs-7 text-gray-400">Pending Tasks</span>
							</a>
						</div>
						<!--end:Item-->
						<!--begin:Item-->
						<div class="col-6">
							<a href="../../demo23/dist/apps/projects/users.html"
								class="d-flex flex-column flex-center h-100 p-6 bg-hover-light">
								<i class="ki-outline ki-briefcase fs-3x text-primary mb-2"></i>
								<span class="fs-5 fw-semibold text-gray-800 mb-0">Customers</span>
								<span class="fs-7 text-gray-400">Latest cases</span>
							</a>
						</div>
						<!--end:Item-->
					</div>
					<!--end:Nav-->
					<!--begin::View more-->
					<div class="py-2 text-center border-top">
						<a href="../../demo23/dist/pages/user-profile/activity.html"
							class="btn btn-color-gray-600 btn-active-color-primary">View All
							<i class="ki-outline ki-arrow-right fs-5"></i></a>
					</div>
					<!--end::View more-->
				</div>
				<!--end::Menu-->
				<!--end::Menu wrapper-->
			</div>
			<!--end::Quick links-->
			<!--begin::Settings-->
			<div class="app-footer-item">
				<!--begin::Menu- wrapper-->
				<a href="../../demo23/dist/account/settings.html"
					class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px">
					<i class="ki-outline ki-setting-2 fs-2"></i>
				</a>
				<!--end::Menu wrapper-->
			</div>
			<!--begin::Settings-->
		</div>
		<!--end::Footer-->
	</div>
</template>