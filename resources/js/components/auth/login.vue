<template>
  <div>
        <main-nav></main-nav>
      <main class="main-content  mt-0">
              <div class="page-header align-items-start min-vh-100" >
                <span class="mask bg-gradient-dark opacity-6"></span>

    <div class="container my-auto">
      <div class="row">
        <div class="col-lg-4 col-md-8 col-12 mx-auto">
          <div class="card z-index-0 fadeIn3 fadeInBottom">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Iniciar sesion</h4>
              </div>
            </div>
            <div class="card-body">
              <form role="form" class="text-start">
                <div class="input-grou input-group-outline my-3">
                 <p>Email</p>
                  <input type="email" class="form-control" required v-model="user.email" />
                </div>
                  <div  v-if="errors.email" class="alert alert-danger text-white" role="alert">
                      <strong>¡Error! </strong>{{errors.email[0]}}
                  </div>
                <div class="input-grou input-group-outline mb-3">
                  <p>Password</p>
                  <input type="password" v-model="user.password" class="form-control" />
                  
                </div>
                  <div  v-if="errors.password" class="alert alert-danger text-white" role="alert">
                      <strong>¡Error! </strong>{{errors.password[0]}}
                  </div>
                     <div  v-if="errors.error" class="alert alert-danger text-white" role="alert">
                      <strong>¡Error! </strong>{{errors.error}}
                  </div>
                <div class="text-center">
                  <button
                    type="button"
                    @click="login"
                    class="btn bg-gradient-primary w-100 my-4 mb-2"
                  >Iniciar sesión</button>
                </div>
                <p class="mt-4 text-sm text-center">
                  Registrarse
                  <a
                    href
                    class="text-primary text-gradient font-weight-bold"
                  >Iniciar sesión</a>
                </p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <main-footer-component></main-footer-component>
        </div> 
       
    </main>
  </div>
</template>

<script>

import mainNav from "../layout/nav.vue";
import Auth from "../../Auth.js";

export default {
   components: {
        mainNav, 
      },
  data() {
    return {
      user: {
        email: "",
        password: ""
      },
      errors: {}
    };
  },

  methods: {
    login() {
      this.axios
        .post("http://127.0.0.1:8000/api/login", this.user)
        .then(({ data }) => {
          Auth.login(data.access_token, data.user); //set local storage
          this.$router.push("/");
        })
        .catch(error => {
         this.errors = error.response.data.errors;
       // console.log( error.response.data.errors.password[0]);
        });
    }
  }
};
</script>
