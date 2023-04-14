<script setup>

import {ref} from 'vue'
import { useRouter } from "vue-router"
import { reactive, onMounted } from 'vue';
import axios from 'axios';
import DataTable from 'datatables.net-vue3'
import DataTablesLib from 'datatables.net';


DataTable.use(DataTablesLib);

const showForm = (formName) => {
  currentForm.value = formName
}

const currentForm = ref('')

// const router = useRouter();

// const data = reactive({
//   name: '',
// //   age: '',
//   email: '',
  
// });

// onMounted(async () => {
//   const response = await axios.get('/api/user', {
//     headers: { Authorization: `Bearer ${localStorage.getItem('token')}` 
//         }
//   });
//   const responseData = response.data;
// // console.log(responseData.user.name);
//   data.name = responseData.user.name;
// //   data.age = responseData.age;
//   data.email = responseData.user.email;
// });

</script>

<style scoped>
@media (max-width: 768px) {
  .parent {
    display: flex;
    flex-direction: column;

  }
  ul {
  display: flex;
  flex-wrap: nowrap;
  overflow-x: auto;
  -webkit-overflow-scrolling: touch; /* Optional: Enables smooth scrolling on iOS */
}
li  a{
width:100px;
height:50px;
}
  
  }
</style>

<template>
   <h1 class="text-center m-5">Hetimet</h1>
  <div class="d-flex justify-content-center parent">
    <div class="card p-5 m-5 col-md-2  ">
  <ul class="nav nav-pills nav-pills-custom mb-3"  role="tablist">
                              <!--begin::Item-->
                              <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                <!--begin::Link-->
                                <a @click="showForm('form1')" class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-160px h-50px pt-2 pb-2 active" data-bs-toggle="pill" href="#kt_stats_widget_6_tab_1" aria-selected="true" role="tab">
                                  <!--begin::Icon-->
                                  
                                  <!--end::Icon-->
                                  <!--begin::Title-->
                                  <span class="nav-text text-gray-800 fw-bold fs-6 lh-2 text-start">2.1 Data e hapjes se hetimeve </span>
                                  <!--end::Title-->
                                  <!--begin::Bullet-->
                                  <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                  <!--end::Bullet-->
                                </a>
                                <!--end::Link-->
                              </li>
                              <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                <!--begin::Link-->
                                <a @click="showForm('form2')" class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-160px h-50px pt-5 pb-2 " data-bs-toggle="pill" href="#kt_stats_widget_6_tab_1" aria-selected="true" role="tab">
                                  <!--begin::Icon-->
                                  
                                  <!--end::Icon-->
                                  <!--begin::Title--> 
                                  <span class="nav-text text-gray-800 fw-bold fs-6 lh-1 text-start">2.2 Prokurori </span>
                                  <!--end::Title-->
                                  <!--begin::Bullet-->
                                  <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                  <!--end::Bullet-->
                                </a>
                                <!--end::Link-->
                              </li>
                              <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                <!--begin::Link-->
                                <a @click="showForm('form3')" class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-160px h-50px pt-5 pb-2 " data-bs-toggle="pill" href="#kt_stats_widget_6_tab_1" aria-selected="true" role="tab">
                                  <!--begin::Icon-->
                                  
                                  <!--end::Icon-->
                                  <!--begin::Title-->
                                  <span class="nav-text text-gray-800 fw-bold fs-6 lh-1 text-start">2.3 Masa e sigurise </span>
                                  <!--end::Title-->
                                  <!--begin::Bullet-->
                                  <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                  <!--end::Bullet-->
                                </a>
                                <!--end::Link-->
                              </li>
                              <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                <!--begin::Link-->
                                <a @click="showForm('form4')" class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-160px h-50px pt-2 pb-2 " data-bs-toggle="pill" href="#kt_stats_widget_6_tab_1" aria-selected="true" role="tab">
                                  <!--begin::Icon-->
                                  
                                  <!--end::Icon-->
                                  <!--begin::Title-->
                                  <span class="nav-text text-gray-800 fw-bold fs-6 lh-2 text-start">2.4 Data e rregjistrimit te personit </span>
                                  <!--end::Title-->
                                  <!--begin::Bullet-->
                                  <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                  <!--end::Bullet-->
                                </a>
                                <!--end::Link-->
                              </li>
                              <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                <!--begin::Link-->
                                <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-160px h-50px pt-5 pb-2 " data-bs-toggle="pill" href="#kt_stats_widget_6_tab_1" aria-selected="true" role="tab">
                                  <!--begin::Icon-->
                                  
                                  <!--end::Icon-->
                                  <!--begin::Title-->
                                  <span class="nav-text text-gray-800 fw-bold fs-6 lh-1 text-start">2.5 Paraqitja e kerkesave </span>
                                  <!--end::Title-->
                                  <!--begin::Bullet-->
                                  <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                  <!--end::Bullet-->
                                </a>
                                <!--end::Link-->
                              </li>
                              
                              
                            
                              
                            </ul>
    </div>
    <div class="card p-5 m-5 col-md-5 right">
      <br>
    
      <form @submit.prevent="submitForm" class="p-5 col-md-10 mx-auto" v-show="currentForm === 'form1'">
        <h4 class="text-center pb-3">Data e hapjes se hetimeve</h4>
      <div class="mb-10">
          <label for="exampleFormControlInput1" class="required form-label">Date</label>
          <input type="email" class="form-control form-control-solid" placeholder="Example input"  v-model="name"/>
      </div>
      <div class="mb-10">
          <label for="exampleFormControlInput1" class="required form-label">Dokument</label>
          <input type="file" class="form-control form-control-solid" placeholder="Example input"  v-on:change="file"/>
      </div>
      <div class="mb-10">
          <label for="exampleFormControlInput1" class="required form-label">Shpjegim</label>
          <textarea type="email" class="form-control form-control-solid" placeholder="Example input"  v-model="name"></textarea>
      </div>
     
          
        <button type="submit" class="btn btn-primary float-end">Shto</button>
      </form>
      <!-- form 2 -->
      
      <form @submit.prevent="submitForm" class="p-5 col-md-10 mx-auto" v-show="currentForm === 'form2'">
        <h4 class="text-center pb-3">Prokurori</h4>
        <div class="mb-10">
          <label for="exampleFormControlInput1" class="required form-label">Date</label>
          <input type="email" class="form-control form-control-solid" placeholder="Example input"  v-model="name"/>
      </div>
      <div class="mb-10">
          <label for="exampleFormControlInput1" class="required form-label">Dokument</label>
          <input type="file" class="form-control form-control-solid" placeholder="Example input"  v-on:change="file"/>
      </div>
      <div class="mb-10">
          <label for="exampleFormControlInput1" class="required form-label">Shpjegim</label>
          <textarea type="email" class="form-control form-control-solid" placeholder="Example input"  v-model="name"></textarea>
      </div>
     
          
        <button type="submit" class="btn btn-primary float-end">Shto</button>
     
      </form>
      <!-- form 3 -->
      <form @submit.prevent="submitForm" class="p-5 col-md-10 mx-auto" v-show="currentForm === 'form3'">
        <h4 class="text-center pb-3">Masa e sigurise</h4>
        <div class="mb-10">
          <label for="exampleFormControlInput1" class="required form-label">Date</label>
          <input type="email" class="form-control form-control-solid" placeholder="Example input"  v-model="name"/>
      </div>
      <div class="mb-10">
          <label for="exampleFormControlInput1" class="required form-label">Dokument</label>
          <input type="file" class="form-control form-control-solid" placeholder="Example input"  v-on:change="file"/>
      </div>
      <div class="mb-10">
          <label for="exampleFormControlInput1" class="required form-label">Shpjegim</label>
          <textarea type="email" class="form-control form-control-solid" placeholder="Example input"  v-model="name"></textarea>
      </div>
     
          
        <button type="submit" class="btn btn-primary float-end">Shto</button>
    
      </form>
      <!-- form 4 -->

      <form @submit.prevent="submitForm" class="p-5 col-md-10 mx-auto" v-show="currentForm === 'form4'">
        <h4 class="text-center pb-3">Shto seance</h4>
      <div class="mb-10">
          <label for="exampleFormControlInput1" class="required form-label">Data</label>
          <input type="email" class="form-control form-control-solid" placeholder="Example input"  v-model="name"/>
      </div>
      <div class="mb-10">
          <label for="exampleFormControlInput1" class="required form-label">Konkluzioni</label>
          <textarea type="email" class="form-control form-control-solid" placeholder="Example input"  v-model="name"></textarea>
      </div>
      <div class="mb-10">
          <label for="exampleFormControlInput1" class="required form-label">Shenime</label>
          <textarea type="email" class="form-control form-control-solid" placeholder="Example input"  v-model="name"></textarea>
      </div>
     
<br><br>
        <button type="submit" class="btn btn-success float-end">Submit</button>
      </form>
    </div>

    <div>
    
  </div>
</div>
          
          
          
</template>