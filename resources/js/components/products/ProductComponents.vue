<template>
    <material-transition-group tag="div" class="row">
<!--    Agregamos un segundo argumento al "v-for" el cuál es "index", éste argumento nos sirve para saber en que posición se encuentra
        el elemento que está siendo procesado por el ciclo-->
<!--        Agregamos un atributo "data-index" de HTML para almacenar la variable "index" que recibimos del "v-for". Accederemos a éste
            atributo desde el metodo "enter" de JavaScript-->
        <product-card-component :key="product.id" v-bind:product="product" :data-index="index" v-for="(product, index) in products"></product-card-component>
    </material-transition-group>
</template>

<script>
    export default {
        data(){
            return{
                name: 'Products Component',
                products: [],
                endpoint: "/productos"
            }
        },
        created() {
            this.fetchProducts();
        },
        methods: {
            fetchProducts(){
                axios.get(this.endpoint).then((response) => {
                    console.log(response.data.data)
                    this.products = response.data.data;
                });
            },
        }
    }
</script>
