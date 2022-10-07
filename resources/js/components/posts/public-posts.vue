<template>
<div>
    <main-nav></main-nav>
    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-100">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container my-auto">
                <div class="row mt-4">
                    <div class="col-md-7 mt-4">
                        <div class="card">
                            <div class="card-header pb-0 px-3">
                                <h6 class="mb-0">Citas</h6>
                            </div>
                            <div class="card bg-gradient-default">
                                <div class="card-body">
                                    <h5 class="font-weight-normal text-info text-gradient">Testimonial</h5>
                                    <blockquote class="blockquote text-white mb-0">
                                        <p class="text-dark ms-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                        <footer class="blockquote-footer text-gradient text-info text-sm ms-3">
                                            Someone famous in
                                            <cite title="Source Title">Source Title</cite>
                                        </footer>
                                    </blockquote>
                                </div>
                                <div class="ms-auto text-end">
                                    <a class="btn btn-link text-dark px-3 mb-0">
                                        <i class="material-icons text-sm me-2">comment</i>Comentarios
                                    </a>
                                    <a class="btn btn-link text-success px-3 mb-0">
                                        <i class="material-icons text-sm me-2">circle</i>Publicado
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 mt-4">
                        <div class="card h-100 mb-4">
                            <div class="card-header pb-0 px-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6 class="mb-0">
                                            <i class="material-icons me-2 text-lg">comment</i> Comentarios
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-4 p-3">
                                <form>
                                    <div class="input-group input-group-dynamic">
                                        <textarea class="form-control" rows="5" placeholder="Escribe un comentario..." spellcheck="false"></textarea>
                                    </div>
                                </form>

                                <h6 class="text-uppercase text-bdy text-xs font-weight-bolder my-3">
                                    Ultimos comentarios de
                                    <b>lorems</b>
                                </h6>
                                <div class="card card-frame">
                                    <div class="card-body">
                                        <p>admin@email.com:</p>This is some text within a card body.
                                    </div>
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
        mainNav
    },
    mounted() {
        console.log("Component mounted.");
    }
};
</script>
