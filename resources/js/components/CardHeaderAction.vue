<template>
    <div class="row">
        <div class="col">
            {{titulo}}
        </div>
        <div class="col">
            <div class="text-right">
                <a v-bind:href="link" class="btn btn-outline-primary btn-sm">+ Novo Registro</a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "CardHeaderAction",
        props: ['titulo', 'link'],
    }
</script>

<style scoped>

</style>
