<template>
    <div class="container">
        <div class="row mt-5">
            <h1 class="border-bottom border-primary" id="dashboard">Dashboard</h1>
        </div>
        <div class="row mt-5">
            <div class="col-md-4 mb-2">
                <div class="card" id="arquivo">
                    <div class="card-body">
                        <div class="float-left">
                            <i class="fas fa-archive fa-5x"></i>
                        </div>
                        <div class="float-right">
                            <h5 class="card-title m-auto">Relatórios</h5>
                            <p>
                                Histórico de atividades.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-2">
                <div class="card" id="usuario">
                    <div class="card-body">
                        <div class="float-left" id="arquivo">
                            <i class="fas fa-users fa-5x"></i>
                        </div>
                        <div class="float-right">
                            <h5 class="card-title m-auto">Usuários</h5>
                            <p>
                                Controle de Usuários.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-2">
                <div class="card" id="controle">
                    <div class="card-body">
                        <div class="float-left">
                            <i class="fas fa-gamepad fa-5x"></i>
                        </div>
                        <div class="float-right">
                            <h5 class="card-title m-auto">Eventos</h5>
                            <p>
                                Controle de eventos.
                            </p>
                        </div>
                    </div>
                </div>
           </div>
           <pre>
            {{dados}}
           </pre>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                dados: []
            }
        },
        mounted() {
            axios.get('/admin').then(
                response => this.dados = response.data
            );
        }
    }
</script>
<style>
    #arquivo > div > div {
        color: rgba(203,96,179,1);
    }

    .card:hover {
        background-color: rgba(226,226,226,0.7);
        cursor: pointer;
    }

    #usuario > div > div {
        color: rgba(248,80,50,1);
    }

    #controle > div > div {
        color: rgba(98,125,77,1);
    }

    #dashboard {
        color: rgba(88,98,243,1);
    }
</style>
