<template>
  <div id="MenuComposition">
    <navigation @category="myfonct"></navigation>
    <products :products="productList"></products>
    <router-view :key="$route.fullPath"></router-view>
  </div>
</template>

<script>
import categories from '../../utils/categories';
import Navigation from './views/Navigation/Navigation.vue';
import Products from './views/Products/Products.vue';
import PRODUCTS from '../../utils/products';

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
    };
  },
  methods: {
    myfonct(value) {
      this.category = value;
      this.updateProductList();
    },
    updateProductList() {
      this.productList = [];
      if (this.category) {
        for (const product in PRODUCTS) {
          if (PRODUCTS[product].category === this.category) {
            this.productList.push(PRODUCTS[product]);
          }
        }
      }
      console.log('product list : ', this.productList);
    },
  },
  created() {
    console.log('menu composition');
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
