<template>
  <div class="products">
    <modal class="Modal" name="product-editor" width="70%" height="auto">
      <product-editor
      @close="$modal.hide('product-editor')"
      @updateOrder="updateOrder"
      :product="productToEdit"
      ></product-editor>
    </modal>
    <div v-if="products">
      <div v-for="product in products" :key="product.name">
        <button @click="showMore(product)">{{product.name}}</button>
      </div>
    </div>
    <div>
      <div v-if="order">
        <div v-for="item in order" :key="item.name">
          <display-order :product="item"></display-order>
        </div>
      </div>
      <button @click="valid">Valider</button>
    </div>
    
  </div>
</template>

<script>
import productEditor from '../../components/productEditor.vue';
import displayOrder from '../../components/displayOrder.vue';
import { postOrder } from '../../../../services/order-service.js';

export default {
  data() {
    return {
      productToEdit: null,
      order: [],
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
    updateOrder(value){
      console.log('value : ', value);
      this.order.push(value);
    },
    async valid(){
      //post order
      console.log('this.order : ', this.order);
      const {
        data: ans,
      } = await postOrder(this.order);
      console.log('OK');
    }
  },
  components: {
    productEditor,
    displayOrder,
  },
  created() {
    console.log('created products ! : ', this.products);
  },
};
</script>
