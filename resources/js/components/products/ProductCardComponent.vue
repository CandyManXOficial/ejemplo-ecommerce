<template>
    <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="card">
            <header class="bg-primary padding">&nbsp;</header>
            <div class="card-body padding">
                <h2 class="card-title">
                    <a :href="'/productos/'+ product.id">{{ product.title }}</a>
                </h2>
                <h4 class="card-subtitle">{{ product.humanPrice }}</h4>
                <p class="card-text">{{ product.description }}</p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:{
            product:{
                type: Object
            }
        }
    }
</script>

<style lang="css">

</style>
