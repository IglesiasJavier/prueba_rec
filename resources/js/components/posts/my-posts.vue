<template>
  <div>
    <main-nav></main-nav>
      <main class="main-content  mt-0">
              <div class="page-header align-items-start min-vh-100" >
                <span class="mask bg-gradient-dark opacity-6"></span>
               
    <div class="container my-auto">
      <div class="row mt-3">
        <div class="col-6 mt-6">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2"></div>
            <div class="card-body mt-2">
              <div class="input-group input-group-outline mt-2">
                <label class="form-label">Autor</label>
                <input type="text" class="form-control" />
              </div>
              <div class="input-group input-group-dynamic">
                <textarea
                  class="form-control"
                  rows="5"
                  placeholder="Escribe una entrada..."
                  spellcheck="false"
                ></textarea>
              </div>
              <button type="button" class="btn btn-info mt-2">Crear publicación</button>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Mis publicaciones</h6>
              </div>
            </div>

            <div class="card-body px-0 pb-2">
              <form class="form-inline" action>
                <div class="row m-auto">
                  <div class="col-12 col-md-3 bg-white">
                    <div class="input-group input-group-static p-2">
                      <label>Fecha inicial</label>
                      <input type="date" class="form-control" />
                    </div>
                  </div>
                  <div class="col-12 col-md-3 bg-white">
                    <div class="input-group input-group-static p-2">
                      <label>Fecha final</label>
                      <input type="date" class="form-control" />
                    </div>
                  </div>
                  <div class="col-12 col-md-3 bg-white">
                    <div class="input-group input-group-static mb-4">
                      <label for="status" class="ms-0">Estado</label>
                      <select class="form-control" id="status">
                        <option>Publicada</option>
                        <option>Retirada</option>
                        <option>En espera</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-12 col-md-3 bg-white">
                    <button type="button" class="btn bg-gradient-primary">
                      <i class="fas fa-filter"></i> Filtrar
                    </button>
                  </div>
                </div>
              </form>
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th
                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                      >Autor</th>
                      <th
                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"
                      >Publicacion</th>
                      <th
                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                      >Estado</th>
                      <th
                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                      >Fecha de creacion</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img  v-bind:src="require('/assets/img/illustrations/chat.png')"
                                             class="avatar avatar-sm me-3 border-radius-lg"
                              alt="user1"
                            />
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">adds essdea sda</h6>
                            <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p
                          class="text-xs text-secondary mb-0"
                        >Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut maxime a eum ea ac</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Online</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                      </td>
                      <td class="align-middle">
                        <a
                          href="javascript:;"
                          class="text-secondary font-weight-bold text-xs"
                          data-toggle="tooltip"
                          data-original-title="Retirar"
                        >Retirar</a>
                        |
                        <a
                          href="javascript:;"
                          class="text-secondary font-weight-bold text-xs"
                          data-toggle="tooltip"
                          data-original-title="publicar"
                        >publicar</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <nav aria-label="Page navigation example">
                  <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                      <a class="page-link" href="javascript:;" tabindex="-1">
                        <span class="material-icons">keyboard_arrow_left</span>
                        <span class="sr-only">Previous</span>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:;">1</a>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="javascript:;">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:;">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:;">
                        <span class="material-icons">keyboard_arrow_right</span>
                        <span class="sr-only">Next</span>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
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
  mounted() {
    console.log("Component mounted.");
  }
};
</script>