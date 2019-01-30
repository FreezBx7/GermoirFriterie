<template>
  <div class="products">
    <modal class="Modal" name="product-editor" width="70%" height="auto">
      <product-editor
      @close="$modal.hide('product-editor')"
      :product="productToEdit"
      ></product-editor>
    </modal>
    <div v-if="products">
      <div v-for="product in products" :key="product.name">
        <button @click="showMore(product)">{{product.name}}</button>
      </div>
    </div>
  </div>
</template>

<script>
import productEditor from '../../components/productEditor.vue';

export default {
  data() {
    return {
      productToEdit: null,
    };
  },
  props: {
    products: {
      required: true,
      default: [],
    },
  },
  methods: {
    showMore(product) {
      this.productToEdit = product;
      this.$modal.show('product-editor');
    },
  },
  components: {
    productEditor,
  },
};
</script>
