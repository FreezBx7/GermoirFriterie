<template>
<div id="MenuComposition">  
    <navigation @category="updateNavigation"></navigation>
    <products :products="shortList"></products>
    <router-view :key="$route.fullPath"></router-view>
  </div>
</template>

<script>
import categories from '../../utils/categories';
import Navigation from './views/Navigation/Navigation.vue';
import Products from './views/Products/Products.vue';
import { getProducts } from '../../services/products-service.js';

export default {
  components: {
    Navigation,
    Products,
  },
  data() {
    return {
      categories,
      category: null,
      productList: null,
      shortList: [],
    };
  },
  methods: {
    updateNavigation(value) {
      this.category = value;
      this.updateProductList();
    },
    updateShortList() {
      this.shortList = [];
      this.productList.forEach((product, indexProd) => {
        console.log('product & index : ', product, indexProd);
        //If ShortList already exists
        if (this.shortList.length > 0) {
          this.shortList.forEach((shortListProduct, index) => {
            // If the name of the short list product matches the current product
            if (shortListProduct.name === product.name) {
              shortListProduct.sizes.push({ label: product.size, id: indexProd});
            } else if (!this.shortList[index + 1]){ // If it's the end of the array
              this.shortList.push({name: product.name, sizes: [{ label: product.size, id: indexProd}]}); // Initialize a nexw product
            }
          });
        } else {
          this.shortList.push({name: product.name, sizes: [{ label: product.size, id: indexProd}]});
        }
      });
    },
    async updateProductList() {
      this.productList = [];
      if (this.category) {
        const { data : productsData } = await getProducts();
        console.log('productsData : ', productsData);
        productsData.forEach( product => {
          if (this.category === product.cat) {
            this.productList.push(product);
          }         
        });
      }
      console.log('productList : ', this.productList);
      if(this.productList.length > 0 ) {
        this.updateShortList();
      }
    },
  },
};
</script>

<style lang="scss">
#MenuComposition {
  display: grid;
  grid-template-rows: auto auto;
  justify-items: stretch;
  @media (min-width: 720px) {
    justify-items: center;
  }
}
</style>
