<template>
    <div class="card" style="width: 100%;">
        <img :src="getCardImage()" class="card-img-top" alt="">
        <div class="card-body">
            <h5 class="card-title">{{titulo}}</h5>
            <p class="card-text">{{descricao}}</p>
            <a :href="cardRoute()" class="btn btn-primary">Acessar</a>
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
