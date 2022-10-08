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
                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Registrarse</h4>
              </div>
            </div>
            <div class="card-body">
              <form role="form" class="text-start">
                <div class="input-grou input-group-outline my-3">
                  <input placeholder="Nombre"  v-model="user.name" type="email" class="form-control" />
                </div>
                <div class="input-grou input-group-outline my-3">
                 
                  <input type="email" placeholder="Email" v-model="user.email" class="form-control" />
                </div>
                <div class="input-grou input-group-outline mb-3">
    
                  <input type="password"  placeholder="password" v-model="user.password" class="form-control" />
                </div>
                <div class="input-grou input-group-outline mb-3">
                 
                  <input type="password"  placeholder="confirmar password" v-model="user.password_confirmation" class="form-control" />
                </div>
                 <div  v-if="errors.errors" class="alert alert-danger text-white" role="alert">
                      <strong>¡Error! </strong>{{errors.errors}}
                  </div>
                <div class="text-center">
                  <button @click="register()"
                    type="button"
                    class="btn bg-gradient-primary w-100 my-4 mb-2"
                  >Registrarme</button>
                </div>
                <p class="mt-4 text-sm text-center">
                  ¿Ya tienes una cuenta? 
                  <router-link :to="{name:'Login'}" class="text-primary text-gradient font-weight-bold">
                Iniciar sesión
                  </router-link>
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
export default {   
  components: {
        mainNav, 
      },
data() {
        return {
             user: {
                 name: '',
                 email: '',
                 password: '',
                 password_confirmation: ''
                },
                errors: []
            };
        },
          methods: {
            register() {
                console.log(this.user);
                this.axios.post('http://127.0.0.1:8000/api/register', this.user)
                    .then(({data}) => {
                        this.$router.push('/login');
                    })
                    .catch((error) => {
                       this.errors = error.response.data;
                        console.log(errors[0]);
                    });
            }
        },
  mounted() {
    console.log("Component mounted.");
  }
};
</script>