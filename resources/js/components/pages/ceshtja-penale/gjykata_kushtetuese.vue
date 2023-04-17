<script setup>
import { ref } from 'vue'
import { useRouter } from "vue-router"
import { reactive, onMounted } from 'vue';
import axios from 'axios';
import Header from '@/components/layouts/header.vue'
import Sidebar from '@/components/layouts/sidebar.vue'
import Footer from '@/components/layouts/footer.vue'


</script>

<template>
	<div id="kt_app_body" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true"
		data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
		data-kt-app-sidebar-push-footer="true" class="app-default">
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				<!--begin::Header-->
				<Header />
				<!--end::Header-->
				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid  " id="kt_app_wrapper">
					<!--begin::Sidebar-->
					<Sidebar />
					<!--end::Sidebar-->
					<!--begin::Main-->
					<main class="app-main flex-column flex-row-fluid " id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid flex-grow-2 min-vh-100">
							<!--begin::Content-->
							<router-view class=" "></router-view>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->
						<!--begin::Footer-->

						<!--end::Footer-->
					</main>
					<Footer />
					<!--end:::Main-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::App-->
		<!--begin::Drawers-->
		<!--begin::Activities drawer-->

	</div>
</template>


