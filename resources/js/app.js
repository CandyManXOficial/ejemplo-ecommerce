require('./bootstrap');

window.Vue = require('vue');

const Vuex = require('vuex');

window.store = new Vuex.Store({
    state: {
        productsCount: 0
    },
    mutations: {
        increment(state){
            return state.productsCount++;
        },
        set(state, value){
            return state.productsCount = value;
        }
    }
});

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('products-component', require('./components/products/ProductComponents.vue').default);
Vue.component('add-products-component-button', require('./components/products/AddToCartComponent.vue').default);
Vue.component('products-counter-component', require('./components/shopping_cart/CounterComponent.vue').default);
Vue.component('products-shopping-cart-component', require('./components/shopping_cart/ProductsShoppingCartComponent.vue').default);
Vue.component('product-card-component', require('./components/products/ProductCardComponent.vue').default);
Vue.component('material-transition-group', require('./components/animations/MaterialCollectionComponent.vue').default);

const app = new Vue({
    el: '#app',
});
