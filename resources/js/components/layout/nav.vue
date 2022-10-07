<template>
   <div class="container position-sticky z-index-sticky top-0">
      <div class="row">
        <div class="col-12">
          <!-- Navbar -->
          <nav class="navbar navbar-expand-lg blur border-radius-xl top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
            <div class="container-fluid ps-2 pe-0">
      <router-link :to="{name:'Posts'}"  class="navbar-brand font-weight-bolder ms-lg-0 ms-3 ">
              
                Bienvenido
      </router-link>
              <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon mt-2">
                  <span class="navbar-toggler-bar bar1"></span>
                  <span class="navbar-toggler-bar bar2"></span>
                  <span class="navbar-toggler-bar bar3"></span>
                </span>
              </button>
              <div class="collapse navbar-collapse" id="navigation">
                <ul class="navbar-nav mx-auto">
                  <li class="nav-item">
                     <router-link :to="{name:'Dashboard'}"  class="nav-link d-flex align-items-center me-2 active">
              
                      <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
                      Dashboard
                     </router-link>
                  </li>
                  <li class="nav-item">
                    <router-link :to="{name:'Dashboard'}"  class="nav-link me-2">
                      <i class="fa fa- opacity-6 text-dark me-1"></i>
                      Publicaciones
                    </router-link>
                  </li>
                  <li class="nav-item">
                  <router-link :to="{name:'Register'}"  class="nav-link me-2">
                      <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                      Registro
                  </router-link>
                  </li>
                  <li class="nav-item">
                    <router-link :to="{name:'Login'}"  class="nav-link me-2">
                      <i class="fas fa-key opacity-6 text-dark me-1"></i>
                     Inciar sesión
                    </router-link>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <!-- End Navbar -->
        </div>
      </div>
    </div>

</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>