<template>
    <br><br>
    <div class="mt-5">

        <div class="d-flex justify-content-center align-items-center flex-wrap mb-2 container mt-5">

            <div class="d-flex my-4">
                <a href="#" @click="showCreateDosjeForm = true" class="btn btn-sm btn-success me-2"><i
                        class="ki-outline ki-check fs-3 d-none"></i><!--begin::Indicator label-->
                    <span class="indicator-label">
                        Krijo Dosje
                    </span>
                    <span class="indicator-progress">

                    </span>
                </a>
                <a @click="showAddClientForm = true; showCreateDosjeForm = false" href="#"
                    class="btn btn-sm btn-primary me-3" data-bs-toggle="modal" data-bs-target="#klient">Shto
                    kliente
                </a>


            </div><!--end::Actions-->
        </div>

    </div>

    <div style="d-flex justify-content-center">

        <teleport to="body">
            <div class="modal " v-if="showCreateDosjeForm">
                <div class="modal-content col-md-6">
                    <h1>hello</h1>
                    <p>Lorem ipsum dolor sit
                        amet consectetur adipisicing
                        elit. Voluptatem consequuntur
                        vel illum asperiores tempore
                        sequi?</p>

                </div>

            </div>
        </teleport>
    </div>


    <br><br>
    <div class="modal " v-if="showAddClientForm">
        <div class="card mb-5 mb-xl-10 container mt-5 col-md-4">
            <!--begin::Card header-->
            <div class="card-header border-0 cursor-pointer d-flex align-items-center" role="button"
                data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true"
                aria-controls="kt_account_profile_details">
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bold m-0">Detajet e profilit</h3>
                </div>
                <!--begin::Close-->
                <div @click=" showAddClientForm = false" class="btn btn-sm btn-icon btn-active-color-primary"
                    data-bs-dismiss="modal">
                    <i class="ki-outline ki-cross fs-1"></i>
                </div>
                <!--end::Close-->
                <!--end::Card title-->
            </div>
            <!--begin::Card header-->

            <!--begin::Content-->
            <div id="kt_account_settings_profile_details" class="collapse show">
                <!--begin::Form-->
                <form @submit.prevent="handleSubmit">

                    <!--begin::Card body-->
                    <div class="card-body border-top p-9">
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">Foto</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-6">
                                <!--begin::Image input-->
                                <div class="image-input image-input-outline" data-kt-image-input="true"
                                    style="background-image: url('/metronic8/demo23/assets/media/svg/avatars/blank.svg')">
                                    <!--begin::Preview existing avatar-->
                                    <div class="image-input-wrapper w-125px h-125px"
                                        style="background-image: url(/metronic8/demo23/assets/media/avatars/300-1.jpg)">
                                    </div>
                                    <!--end::Preview existing avatar-->

                                    <!--begin::Label-->
                                    <label
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                        aria-label="Change avatar" data-bs-original-title="Change avatar"
                                        data-kt-initialized="1">
                                        <i class="ki-outline ki-pencil fs-7"></i>
                                        <!--begin::Inputs-->
                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                                        <input type="hidden" name="avatar_remove">
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Label-->

                                    <!--begin::Cancel-->
                                    <span
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                        aria-label="Cancel avatar" data-bs-original-title="Cancel avatar"
                                        data-kt-initialized="1">
                                        <i class="ki-outline ki-cross fs-2"></i> </span>
                                    <!--end::Cancel-->

                                    <!--begin::Remove-->
                                    <span
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                        aria-label="Remove avatar" data-bs-original-title="Remove avatar"
                                        data-kt-initialized="1">
                                        <i class="ki-outline ki-cross fs-2"></i> </span>
                                    <!--end::Remove-->
                                </div>
                                <!--end::Image input-->

                                <!--begin::Hint-->
                                <div class="form-text">Formatet e lejuara: png, jpg, jpeg.</div>
                                <!--end::Hint-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Emri</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                <input type="text" name="emer" class="form-control form-control-lg form-control-solid"
                                    v-model="emer">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Atesia</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                <input type="text" name="atesia" class="form-control form-control-lg form-control-solid"
                                    v-model="atesia">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Mbiemri</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                <input type="text" name="mbiemer" class="form-control form-control-lg form-control-solid"
                                    v-model="mbiemer">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                <span class="required">Nr. Identifikimit</span>

                                <span class="ms-1" data-bs-toggle="tooltip" aria-label="Phone number must be active"
                                    data-bs-original-title="Phone number must be active" data-kt-initialized="1">
                                </span>
                            </label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                <input type="tel" name="id_nr" class="form-control form-control-lg form-control-solid"
                                    v-model="id_nr">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">I denuar</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                <!--begin::Options-->
                                <div class="d-flex align-items-center mt-3">
                                    <!--begin::Option-->
                                    <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                                        <input class="form-check-input" name="i_denuar" type="radio" value="1"
                                            v-model="i_denuar">
                                        <span class="fw-semibold ps-2 fs-6">
                                            PO
                                        </span>
                                    </label>
                                    <!--end::Option-->

                                    <!--begin::Option-->
                                    <label class="form-check form-check-custom form-check-inline form-check-solid">
                                        <input class="form-check-input" name="i_denuar" type="radio" value="0"
                                            v-model="i_denuar">
                                        <span class="fw-semibold ps-2 fs-6">
                                            JO
                                        </span>
                                    </label>
                                    <!--end::Option-->
                                </div>
                                <!--end::Options-->
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>

                            <!--end::Col-->
                        </div>
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">Statusi Civil</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <select name="statusi_civil" class="form-control form-control-lg form-control-solid"
                                    v-model="statusi_civil">
                                    <option value="">Zgjidhni Statusin Civil</option>
                                    <option value="I Martuar">I Martuar</option>
                                    <option value="Beqar">Beqar</option>
                                    <option value="I Divorcuar">I Divorcuar</option>
                                </select>
                            </div>

                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Femije te Mitur</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                <!--begin::Options-->
                                <div class="d-flex align-items-center mt-3">
                                    <!--begin::Option-->
                                    <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                                        <input class="form-check-input" name="femije_te_mitur" type="radio" value="1"
                                            v-model="femije_te_mitur">
                                        <span class="fw-semibold ps-2 fs-6">
                                            PO
                                        </span>
                                    </label>
                                    <!--end::Option-->

                                    <!--begin::Option-->
                                    <label class="form-check form-check-custom form-check-inline form-check-solid">
                                        <input class="form-check-input" name="femije_te_mitur" type="radio" value="0"
                                            v-model="femije_te_mitur">
                                        <span class="fw-semibold ps-2 fs-6">
                                            JO
                                        </span>
                                    </label>
                                    <!--end::Option-->
                                </div>
                                <!--end::Options-->
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>

                            <!--end::Col-->
                        </div>
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Personi Kontaktit</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                <input type="text" name="personi_kontaktit"
                                    class="form-control form-control-lg form-control-solid" v-model="personi_kontaktit">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Numri Kontaktit</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                <input type="text" name="numri_kontaktit"
                                    class="form-control form-control-lg form-control-solid" v-model="numri_kontaktit">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">Arsimi</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <select name="arsimi" class="form-control form-control-lg form-control-solid"
                                    v-model="arsimi">
                                    <option value="">Zgjidhni Arsimin</option>
                                    <option value="9 vjeçar">9 vjeçar</option>
                                    <option value="I Mesëm">I Mesëm</option>
                                    <option value="I Lartë">I Lartë</option>
                                </select>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                    </div>
                    <!--end::Card body-->

                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <!-- <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button> -->
                        <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Ruaj</button>
                    </div>
                    <!--end::Actions-->
                    <input type="hidden">
                </form>
                <!--end::Form-->
            </div>
            <!--end::Content-->
        </div>
    </div>


    <teleport to="body ">
        <div class="modal " tabindex="-1" role="dialog" v-if="showCreateDosjeForm">

            <!--begin::Modal content-->
            <div class="modal-content ">
                <!--begin::Modal header-->
                <div class="modal-header d-flex align-items-center">
                    <!--begin::Modal title-->
                    <div>
                        <h2>Krijo Dosje</h2>
                        <!--end::Modal title-->
                    </div>
                    <!--begin::Close-->
                    <div @click=" showCreateDosjeForm = false" class="btn btn-sm btn-icon btn-active-color-primary"
                        data-bs-dismiss="modal">
                        <i class="ki-outline ki-cross fs-1 fw-bold"></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body py-lg-10 px-lg-10">
                    <!--begin::Stepper-->
                    <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid"
                        id="kt_modal_create_app_stepper" data-kt-stepper="true">
                        <!--begin::Aside-->
                        <div class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
                            <!--begin::Nav-->
                            <div class="stepper-nav ps-lg-10">
                                <!--begin::Step 1-->
                                <div class="stepper-item current" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="ki-outline ki-check stepper-check fs-2"></i> <span
                                                class="stepper-number">1</span>
                                        </div>
                                        <!--end::Icon-->

                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">
                                                Klienti
                                            </h3>

                                            <div class="stepper-desc">
                                                Zgjidh Klientin
                                            </div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Wrapper-->

                                    <!--begin::Line-->
                                    <div class="stepper-line h-40px"></div>
                                    <!--end::Line-->
                                </div>
                                <!--end::Step 1-->

                                <!--begin::Step 2-->
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="ki-outline ki-check stepper-check fs-2"></i> <span
                                                class="stepper-number">2</span>
                                        </div>
                                        <!--begin::Icon-->

                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">
                                                Frameworks
                                            </h3>

                                            <div class="stepper-desc">
                                                Define your app framework
                                            </div>
                                        </div>
                                        <!--begin::Label-->
                                    </div>
                                    <!--end::Wrapper-->

                                    <!--begin::Line-->
                                    <div class="stepper-line h-40px"></div>
                                    <!--end::Line-->
                                </div>
                                <!--end::Step 2-->

                                <!--begin::Step 3-->
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="ki-outline ki-check stepper-check fs-2"></i> <span
                                                class="stepper-number">3</span>
                                        </div>
                                        <!--end::Icon-->

                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">
                                                Database
                                            </h3>

                                            <div class="stepper-desc">
                                                Select the app database type
                                            </div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Wrapper-->

                                    <!--begin::Line-->
                                    <div class="stepper-line h-40px"></div>
                                    <!--end::Line-->
                                </div>
                                <!--end::Step 3-->

                                <!--begin::Step 4-->
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="ki-outline ki-check stepper-check fs-2"></i> <span
                                                class="stepper-number">4</span>
                                        </div>
                                        <!--end::Icon-->

                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">
                                                Billing
                                            </h3>

                                            <div class="stepper-desc">
                                                Provide payment details
                                            </div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Wrapper-->

                                    <!--begin::Line-->
                                    <div class="stepper-line h-40px"></div>
                                    <!--end::Line-->
                                </div>
                                <!--end::Step 4-->

                                <!--begin::Step 5-->
                                <div class="stepper-item mark-completed" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="ki-outline ki-check stepper-check fs-2"></i> <span
                                                class="stepper-number">5</span>
                                        </div>
                                        <!--end::Icon-->

                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">
                                                Completed
                                            </h3>

                                            <div class="stepper-desc">
                                                Review and Submit
                                            </div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Step 5-->
                            </div>
                            <!--end::Nav-->
                        </div>
                        <!--begin::Aside-->

                        <!--begin::Content-->
                        <div class="flex-row-fluid py-lg-5 px-lg-15">
                            <!--begin::Form-->
                            <form class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate"
                                id="kt_modal_create_app_form">
                                <!--begin::Step 1-->
                                <div class="current" data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10 fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">Emri Klientit</span>


                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    aria-label="Specify your unique app name"
                                                    data-bs-original-title="Specify your unique app name"
                                                    data-kt-initialized="1">
                                                    <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i></span>
                                            </label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <!-- <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="name" placeholder="" value="" > -->
                                            <select id="name-dropdown" v-model="selectedName"
                                                class="form-control form-control-lg form-control-solid" name="emer">
                                                <option v-for="    klient     in     klients    " :value="klient.id">{{
                                                    klient.emer }}
                                                </option>
                                            </select>
                                            <!--end::Input-->
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="fv-row">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                                                <span class="required">Category</span>


                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    aria-label="Select your app category"
                                                    data-bs-original-title="Select your app category"
                                                    data-kt-initialized="1">
                                                    <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i></span>
                                            </label>
                                            <!--end::Label-->

                                            <!--begin:Options-->
                                            <div class="fv-row fv-plugins-icon-container">
                                                <!--begin:Option-->
                                                <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                    <!--begin:Label-->
                                                    <span class="d-flex align-items-center me-2">
                                                        <!--begin:Icon-->
                                                        <span class="symbol symbol-50px me-6">
                                                            <span class="symbol-label bg-light-primary">
                                                                <i class="ki-outline ki-compass fs-1 text-primary"></i>
                                                            </span>
                                                        </span>
                                                        <!--end:Icon-->

                                                        <!--begin:Info-->
                                                        <span class="d-flex flex-column">
                                                            <span class="fw-bold fs-6">Quick Online Courses</span>

                                                            <span class="fs-7 text-muted">Creating a clear text
                                                                structure is
                                                                just one SEO</span>
                                                        </span>
                                                        <!--end:Info-->
                                                    </span>
                                                    <!--end:Label-->

                                                    <!--begin:Input-->
                                                    <span class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio" name="category"
                                                            value="1">
                                                    </span>
                                                    <!--end:Input-->
                                                </label>
                                                <!--end::Option-->

                                                <!--begin:Option-->
                                                <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                    <!--begin:Label-->
                                                    <span class="d-flex align-items-center me-2">
                                                        <!--begin:Icon-->
                                                        <span class="symbol symbol-50px me-6">
                                                            <span class="symbol-label bg-light-danger  ">
                                                                <i class="ki-outline ki-element-11 fs-1 text-danger"></i>
                                                            </span>
                                                        </span>
                                                        <!--end:Icon-->

                                                        <!--begin:Info-->
                                                        <span class="d-flex flex-column">
                                                            <span class="fw-bold fs-6">Face to Face Discussions</span>

                                                            <span class="fs-7 text-muted">Creating a clear text
                                                                structure is
                                                                just one aspect</span>
                                                        </span>
                                                        <!--end:Info-->
                                                    </span>
                                                    <!--end:Label-->

                                                    <!--begin:Input-->
                                                    <span class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio" name="category"
                                                            value="2">
                                                    </span>
                                                    <!--end:Input-->
                                                </label>
                                                <!--end::Option-->

                                                <!--begin:Option-->
                                                <label class="d-flex flex-stack cursor-pointer">
                                                    <!--begin:Label-->
                                                    <span class="d-flex align-items-center me-2">
                                                        <!--begin:Icon-->
                                                        <span class="symbol symbol-50px me-6">
                                                            <span class="symbol-label bg-light-success">
                                                                <i class="ki-outline ki-timer fs-1 text-success"></i>
                                                            </span>
                                                        </span>
                                                        <!--end:Icon-->

                                                        <!--begin:Info-->
                                                        <span class="d-flex flex-column">
                                                            <span class="fw-bold fs-6">Full Intro Training</span>

                                                            <span class="fs-7 text-muted">Creating a clear text
                                                                structure
                                                                copywriting</span>
                                                        </span>
                                                        <!--end:Info-->
                                                    </span>
                                                    <!--end:Label-->

                                                    <!--begin:Input-->
                                                    <span class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio" name="category"
                                                            value="3">
                                                    </span>
                                                    <!--end:Input-->
                                                </label>
                                                <!--end::Option-->
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                            <!--end:Options-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                </div>
                                <!--end::Step 1-->
                                <!--begin::Step 2-->
                                <div data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="fv-row fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                                                <span class="required">Select Framework</span>


                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    aria-label="Specify your apps framework"
                                                    data-bs-original-title="Specify your apps framework"
                                                    data-kt-initialized="1">
                                                    <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i></span>
                                            </label>
                                            <!--end::Label-->

                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack cursor-pointer mb-5">
                                                <!--begin:Label-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin:Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-warning">
                                                            <i class="ki-outline ki-html fs-2x text-warning"></i>
                                                        </span>
                                                    </span>
                                                    <!--end:Icon-->

                                                    <!--begin:Info-->
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">HTML5</span>

                                                        <span class="fs-7 text-muted">Base Web Projec</span>
                                                    </span>
                                                    <!--end:Info-->
                                                </span>
                                                <!--end:Label-->

                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" checked="" name="framework"
                                                        value="1">
                                                </span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->

                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack cursor-pointer mb-5">
                                                <!--begin:Label-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin:Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-success">
                                                            <i class="ki-outline ki-react fs-2x text-success"></i>
                                                        </span>
                                                    </span>
                                                    <!--end:Icon-->

                                                    <!--begin:Info-->
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">ReactJS</span>
                                                        <span class="fs-7 text-muted">Robust and flexible app
                                                            framework</span>
                                                    </span>
                                                    <!--end:Info-->
                                                </span>
                                                <!--end:Label-->

                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" name="framework" value="2">
                                                </span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->

                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack cursor-pointer mb-5">
                                                <!--begin:Label-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin:Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-danger">
                                                            <i class="ki-outline ki-angular fs-2x text-danger"></i>
                                                        </span>
                                                    </span>
                                                    <!--end:Icon-->

                                                    <!--begin:Info-->
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">Angular</span>
                                                        <span class="fs-7 text-muted">Powerful data mangement</span>
                                                    </span>
                                                    <!--end:Info-->
                                                </span>
                                                <!--end:Label-->

                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" name="framework" value="3">
                                                </span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->

                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack cursor-pointer">
                                                <!--begin:Label-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin:Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-primary">
                                                            <i class="ki-outline ki-vue fs-2x text-primary"></i> </span>
                                                    </span>
                                                    <!--end:Icon-->

                                                    <!--begin:Info-->
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">Vue</span>
                                                        <span class="fs-7 text-muted">Lightweight and responsive
                                                            framework</span>
                                                    </span>
                                                    <!--end:Info-->
                                                </span>
                                                <!--end:Label-->

                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" name="framework" value="4">
                                                </span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                </div>
                                <!--end::Step 2-->
                                <!--begin::Step 3-->
                                <div data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10 fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label class="required fs-5 fw-semibold mb-2">
                                                Database Name
                                            </label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="dbname" placeholder="" value="master_db">
                                            <!--end::Input-->
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="fv-row fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                                                <span class="required">Select Database Engine</span>


                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    aria-label="Select your app database engine"
                                                    data-bs-original-title="Select your app database engine"
                                                    data-kt-initialized="1">
                                                    <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i></span>
                                            </label>
                                            <!--end::Label-->

                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack cursor-pointer mb-5">
                                                <!--begin::Label-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin::Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-success">
                                                            <i class="ki-outline ki-note text-success fs-2x"></i>
                                                        </span>
                                                    </span>
                                                    <!--end::Icon-->

                                                    <!--begin::Info-->
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">MySQL</span>

                                                        <span class="fs-7 text-muted">Basic MySQL database</span>
                                                    </span>
                                                    <!--end::Info-->
                                                </span>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" name="dbengine" checked=""
                                                        value="1">
                                                </span>
                                                <!--end::Input-->
                                            </label>
                                            <!--end::Option-->

                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack cursor-pointer mb-5">
                                                <!--begin::Label-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin::Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-danger">
                                                            <i class="ki-outline ki-google text-danger fs-2x"></i>
                                                        </span>
                                                    </span>
                                                    <!--end::Icon-->

                                                    <!--begin::Info-->
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">Firebase</span>

                                                        <span class="fs-7 text-muted">Google based app data
                                                            management</span>
                                                    </span>
                                                    <!--end::Info-->
                                                </span>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" name="dbengine" value="2">
                                                </span>
                                                <!--end::Input-->
                                            </label>
                                            <!--end::Option-->

                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack cursor-pointer">
                                                <!--begin::Label-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin::Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-warning">
                                                            <i class="ki-outline ki-microsoft text-warning fs-2x"></i>
                                                        </span>
                                                    </span>
                                                    <!--end::Icon-->

                                                    <!--begin::Info-->
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">DynamoDB</span>

                                                        <span class="fs-7 text-muted">Microsoft Fast NoSQL
                                                            Database</span>
                                                    </span>
                                                    <!--end::Info-->
                                                </span>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" name="dbengine" value="3">
                                                </span>
                                                <!--end::Input-->
                                            </label>
                                            <!--end::Option-->
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                </div>
                                <!--end::Step 3-->
                                <!--begin::Step 4-->
                                <div data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                <span class="required">Name On Card</span>


                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    aria-label="Specify a card holder's name"
                                                    data-bs-original-title="Specify a card holder's name"
                                                    data-kt-initialized="1">
                                                    <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i></span>
                                            </label>
                                            <!--end::Label-->

                                            <input type="text" class="form-control form-control-solid" placeholder=""
                                                name="card_name" value="Max Doe">
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label class="required fs-6 fw-semibold form-label mb-2">Card Number</label>
                                            <!--end::Label-->

                                            <!--begin::Input wrapper-->
                                            <div class="position-relative">
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid"
                                                    placeholder="Enter card number" name="card_number"
                                                    value="4111 1111 1111 1111">
                                                <!--end::Input-->

                                                <!--begin::Card logos-->
                                                <div class="position-absolute translate-middle-y top-50 end-0 me-5">
                                                    <img src="/metronic8/demo23/assets/media/svg/card-logos/visa.svg" alt=""
                                                        class="h-25px">
                                                    <img src="/metronic8/demo23/assets/media/svg/card-logos/mastercard.svg"
                                                        alt="" class="h-25px">
                                                    <img src="/metronic8/demo23/assets/media/svg/card-logos/american-express.svg"
                                                        alt="" class="h-25px">
                                                </div>
                                                <!--end::Card logos-->
                                            </div>
                                            <!--end::Input wrapper-->
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="row mb-10">
                                            <!--begin::Col-->
                                            <div class="col-md-8 fv-row">
                                                <!--begin::Label-->
                                                <label class="required fs-6 fw-semibold form-label mb-2">Expiration
                                                    Date</label>
                                                <!--end::Label-->

                                                <!--begin::Row-->
                                                <div class="row fv-row fv-plugins-icon-container">
                                                    <!--begin::Col-->
                                                    <div class="col-6">
                                                        <select name="card_expiry_month"
                                                            class="form-select form-select-solid select2-hidden-accessible"
                                                            data-control="select2" data-hide-search="true"
                                                            data-placeholder="Month" data-select2-id="select2-data-16-2vf1"
                                                            tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                                            <option data-select2-id="select2-data-18-5be1"></option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                        </select><span
                                                            class="select2 select2-container select2-container--bootstrap5"
                                                            dir="ltr" data-select2-id="select2-data-17-hnc6"
                                                            style="width: 100%;"><span class="selection"><span
                                                                    class="select2-selection select2-selection--single form-select form-select-solid"
                                                                    role="combobox" aria-haspopup="true"
                                                                    aria-expanded="false" tabindex="0" aria-disabled="false"
                                                                    aria-labelledby="select2-card_expiry_month-jz-container"
                                                                    aria-controls="select2-card_expiry_month-jz-container"><span
                                                                        class="select2-selection__rendered"
                                                                        id="select2-card_expiry_month-jz-container"
                                                                        role="textbox" aria-readonly="true"
                                                                        title="Month"><span
                                                                            class="select2-selection__placeholder">Month</span></span><span
                                                                        class="select2-selection__arrow"
                                                                        role="presentation"><b
                                                                            role="presentation"></b></span></span></span><span
                                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                        <div class="fv-plugins-message-container invalid-feedback">
                                                        </div>
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-6">
                                                        <select name="card_expiry_year"
                                                            class="form-select form-select-solid select2-hidden-accessible"
                                                            data-control="select2" data-hide-search="true"
                                                            data-placeholder="Year" data-select2-id="select2-data-19-m1le"
                                                            tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                                            <option data-select2-id="select2-data-21-avxl"></option>
                                                            <option value="2023">2023</option>
                                                            <option value="2024">2024</option>
                                                            <option value="2025">2025</option>
                                                            <option value="2026">2026</option>
                                                            <option value="2027">2027</option>
                                                            <option value="2028">2028</option>
                                                            <option value="2029">2029</option>
                                                            <option value="2030">2030</option>
                                                            <option value="2031">2031</option>
                                                            <option value="2032">2032</option>
                                                            <option value="2033">2033</option>
                                                        </select><span
                                                            class="select2 select2-container select2-container--bootstrap5"
                                                            dir="ltr" data-select2-id="select2-data-20-uj6g"
                                                            style="width: 100%;"><span class="selection"><span
                                                                    class="select2-selection select2-selection--single form-select form-select-solid"
                                                                    role="combobox" aria-haspopup="true"
                                                                    aria-expanded="false" tabindex="0" aria-disabled="false"
                                                                    aria-labelledby="select2-card_expiry_year-32-container"
                                                                    aria-controls="select2-card_expiry_year-32-container"><span
                                                                        class="select2-selection__rendered"
                                                                        id="select2-card_expiry_year-32-container"
                                                                        role="textbox" aria-readonly="true"
                                                                        title="Year"><span
                                                                            class="select2-selection__placeholder">Year</span></span><span
                                                                        class="select2-selection__arrow"
                                                                        role="presentation"><b
                                                                            role="presentation"></b></span></span></span><span
                                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                        <div class="fv-plugins-message-container invalid-feedback">
                                                        </div>
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4 fv-row fv-plugins-icon-container">
                                                <!--begin::Label-->
                                                <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                    <span class="required">CVV</span>


                                                    <span class="ms-1" data-bs-toggle="tooltip"
                                                        aria-label="Enter a card CVV code"
                                                        data-bs-original-title="Enter a card CVV code"
                                                        data-kt-initialized="1">
                                                        <i
                                                            class="ki-outline ki-information-5 text-gray-500 fs-6"></i></span>
                                                </label>
                                                <!--end::Label-->

                                                <!--begin::Input wrapper-->
                                                <div class="position-relative">
                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-solid" minlength="3"
                                                        maxlength="4" placeholder="CVV" name="card_cvv">
                                                    <!--end::Input-->

                                                    <!--begin::CVV icon-->
                                                    <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                                                        <i class="ki-outline ki-credit-cart fs-2hx"></i>
                                                    </div>
                                                    <!--end::CVV icon-->
                                                </div>
                                                <!--end::Input wrapper-->
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Label-->
                                            <div class="me-5">
                                                <label class="fs-6 fw-semibold form-label">Save Card for further
                                                    billing?</label>
                                                <div class="fs-7 fw-semibold text-muted">If you need more info, please
                                                    check
                                                    budget planning</div>
                                            </div>
                                            <!--end::Label-->

                                            <!--begin::Switch-->
                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1" checked="checked">
                                                <span class="form-check-label fw-semibold text-muted">
                                                    Save Card
                                                </span>
                                            </label>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Input group-->

                                    </div>
                                </div>
                                <!--end::Step 4-->
                                <!--begin::Step 5-->
                                <div data-kt-stepper-element="content">
                                    <div class="w-100 text-center">
                                        <!--begin::Heading-->
                                        <h1 class="fw-bold text-dark mb-3">Release!</h1>
                                        <!--end::Heading-->

                                        <!--begin::Description-->
                                        <div class="text-muted fw-semibold fs-3">
                                            Submit your app to kickstart your project.
                                        </div>
                                        <!--end::Description-->

                                        <!--begin::Illustration-->
                                        <div class="text-center px-4 py-15">
                                            <img src="/metronic8/demo23/assets/media/illustrations/sketchy-1/9.png" alt=""
                                                class="mw-100 mh-300px">
                                        </div>
                                        <!--end::Illustration-->
                                    </div>
                                </div>
                                <!--end::Step 5-->


                                <!--begin::Actions-->
                                <div class="d-flex flex-stack pt-10">
                                    <!--begin::Wrapper-->
                                    <div class="me-2">
                                        <button type="button" class="btn btn-lg btn-light-primary me-3"
                                            data-kt-stepper-action="previous">
                                            <i class="ki-outline ki-arrow-left fs-3 me-1"></i> Back
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->

                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="button" class="btn btn-lg btn-primary"
                                            data-kt-stepper-action="submit">
                                            <span class="indicator-label">
                                                Submit
                                                <i class="ki-outline ki-arrow-right fs-3 ms-2 me-0"></i> </span>
                                            <span class="indicator-progress">
                                                Please wait... <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                            </span>
                                        </button>

                                        <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">
                                            Continue
                                            <i class="ki-outline ki-arrow-right fs-3 ms-1 me-0"></i> </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Stepper-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
    </teleport>
</template>


<style>
.root {
    position: relative;
}

.modal {
    position: absolute;

    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.2);
    display: flex;
    justify-content: center;
    align-items: center;
}

.modal-content {
    background-color: white;
    padding: 50px;
    border-radius: 10px;
    width: 50%;
    display: flex;
    /* justify-content: center; */
    align-items: center;
}
</style>
  
<script setup>
import { ref } from 'vue';
import axios from 'axios';
// import Modal from './Modal.vue';

let showModal = false;

const showCreateDosjeForm = ref(false);



const showAddClientForm = ref(false);

const dosjeName = ref('');
const dosjeSurname = ref('');
const dosjeEmail = ref('');



const emri = ref('');
const atesia = ref('');
const mbiemri = ref('');
const id_nr = ref('');
const i_denuar = ref('');
const statusi_civil = ref('');
const femije_te_mitur = ref('');
const personi_kontaktit = ref('');
const numri_kontaktit = ref('');
const arsimi = ref('');

const handleSubmit = async () => {
    try {
        const response = await axios.post('/api/klients', {
            emri: emri.value,
            atesia: atesia.value,
            mbiemri: mbiemri.value,
            id_nr: id_nr.value,
            i_denuar: i_denuar.value,
            statusi_civil: statusi_civil.value,
            femije_te_mitur: femije_te_mitur.value,
            personi_kontaktit: personi_kontaktit.value,
            numri_kontaktit: numri_kontaktit.value,
            mbiemri: mbiemri.value,
        });
        emit('klient-created', response.data.klient);
        // name.value = '';
        // email.value = '';
        // phone.value = '';
    } catch (error) {
        console.error(error);
    }
};


const addClient = () => {
    axios.post('/klients', {
        name: clientName.value,
        surname: clientSurname.value,
        email: clientEmail.value
    })
        .then(response => {
            console.log(response.data);
            clientName.value = '';
            clientSurname.value = '';
            clientEmail.value = '';
            showAddClientForm.value = false;
        })
        .catch(error => {
            console.log(error);
        });
};
</script>
  