<script setup>
import Header from './header.vue'
import Sidebar from './sidebar.vue'
import Footer from './footer.vue'


</script>

<template>
	<!-- <div class="base">
		    <Header/>
		    <Sidebar/>
		    <router-view></router-view>
		    <Footer/>
    
		    </div> -->
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
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					<!--begin::Sidebar-->
					<Sidebar />
					<!--end::Sidebar-->
					<!--begin::Main-->
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Content-->
							<router-view></router-view>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->
						<!--begin::Footer-->
						<Footer />
						<!--end::Footer-->
					</div>
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


<style>
/* @import './base.css'; */
</style>