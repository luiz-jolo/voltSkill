<template>
    <div>
        <div class="form-inline mb-2">
            <div class="form-group">
                <input type="search" class="form-control" placeholder="Buscar" v-model="buscar">
            </div>
        </div>
        <table class="table table-hover">
            <thead class="">
                <tr>
                    <th v-for="title in titles" scope="col">{{title}}</th>
                    <th v-if="editar || deletar">action</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(item, index) in lista">
                    <td v-for="i in item">{{i}}</td>
                    <td v-if="editar || deletar">
                        <form v-bind:id="index" v-if="deletar && token" v-bind:action="deletar" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" v-bind:value="token">

                            <a v-if="editar" class="btn btn-sm btn-outline-primary mr-1" v-bind:href="editar">editar</a>
                            <a v-if="deletar" class="btn btn-sm btn-outline-danger" v-bind:href="deletar">excluir</a>
                            <a href="" v-on:click="executaForm(index)"></a>

                        </form>
                        <span v-if="!token">
                            <a v-if="editar" class="btn btn-sm btn-outline-primary mr-1" v-bind:href="editar">editar</a>
                            <a v-if="deletar" class="btn btn-sm btn-outline-danger" v-bind:href="deletar">excluir</a>
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        props: ['titles', 'itens', 'visualizar', 'editar', 'deletar', 'token'],
        name: "TableList",
        data: function(){
            return {
                buscar:''
            }
        },
        methods: {
            executaForm: function (index) {
                document.getElementById(index).submit()
            }
        },
        computed: {
            lista: function () {
                return this.itens.filter(res => {
                    for(let k = 0; k<res.length; k++){
                        if ((res[k] + "").toLowerCase().indexOf(this.buscar.toLowerCase()) >=0 ){
                            return true;
                        }
                    }
                    return false;
                });
                return this.itens;
            }
        }
    }
</script>

<style scoped>

</style>
