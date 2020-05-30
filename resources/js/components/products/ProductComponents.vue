<template>
    <div class="row">
        <product-card-component v-bind:product="product" v-for="product in products"></product-card-component>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                name: 'Products Component',
                products: [
                    {title: 'Cama', price: 500, description: 'De cedro marrón'},
                    {title: 'Ropero', price: 200, description: 'De ocre'},
                    {title: 'Bicicleta', price: 5300, description: 'De aluminio'},
                    {title: 'Sillón', price: 2500, description: 'De bambú'}
                ]
            }
        }
    }
</script>
