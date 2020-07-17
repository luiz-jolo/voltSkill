<template>
    <div class="card" style="width: 16rem;">
        <img :src="getCardImage()" class="card-img-top" alt="">
        <div class="card-body">
            <h5 class="card-title">{{titulo}}</h5>
            <p class="card-text">{{descricao}}</p>
            <a :href="cardRoute()" class="btn btn-primary">Listagem</a>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['titulo', 'descricao', 'imagem', 'rota'],
        name: "CardDashboard",
        methods:{
            getCardImage(){
                return "storage/images/"+ this.imagem;
            },
            cardRoute(){
                return ""+ this.rota;
            }
        }
    }
</script>

<style scoped>

</style>
