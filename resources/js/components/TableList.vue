<template>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th v-for="title in titles" scope="col">{{title}}</th>
                <th>ação</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="item in itens">
                <td v-for="i in item">{{i}}</td>
                <td>
                    <a class="btn btn-outline-primary mr-1" href="#">editar</a>
                    <a class="btn btn-outline-danger" href="#">excluir</a>
                </td>
            </tr>
        </tbody>
    </table>
</template>

<script>
    export default {
        props: ['titles', 'itens'],
        name: "TableList",
    }
</script>

<style scoped>

</style>
