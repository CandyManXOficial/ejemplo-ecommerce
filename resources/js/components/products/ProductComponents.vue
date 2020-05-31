<template>
    <transition-group
        tag="div"
        :css="false"
        name="fadeIn"
        @before-enter="beforeEnter"
        @enter="enter"
        @leave="leave"
        class="row">
<!--    Agregamos un segundo argumento al "v-for" el cuál es "index", éste argumento nos sirve para saber en que posición se encuentra
        el elemento que está siendo procesado por el ciclo-->
<!--        Agregamos un atributo "data-index" de HTML para almacenar la variable "index" que recibimos del "v-for". Accederemos a éste
            atributo desde el metodo "enter" de JavaScript-->
        <product-card-component :key="product.id" v-bind:product="product" :data-index="index" v-for="(product, index) in products"></product-card-component>
    </transition-group>
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
            beforeEnter(el){
                el.style.opacity = 0;
                el.style.transform = 'scale(0)';
                el.style.transition = 'all 1s cubic-bezier(0.4, 0.0, 0.2, 1)';
            },
            enter(el){
                /**
                 * Aqui definimos una constante nombrada "delay" en la cual almacenaremos
                 * el valor del argumento "index" sustraido del "v-for". Con ésta variable
                 * determinaremos el tiempo de delay entre cada uno de los elementos de
                 * la lista resultante del "v-for".
                 **/
                const delay = 100 * el.dataset.index;
                setTimeout(()=>{
                    el.style.opacity = 1;
                    el.style.transform = 'scale(1)';
                }, delay);
            },
            leave(el){
                el.style.opacity = 0;
                el.style.transform = 'scale(0)';
            }
        }
    }
</script>
