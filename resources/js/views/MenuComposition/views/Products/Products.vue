<template>
  <div class="products col-12">
    <modal class="Modal" name="product-editor" width="70%" height="auto">
      <product-editor
      @close="$modal.hide('product-editor')"
      @updateOrder="updateOrder"
      :product="productToEdit"
      ></product-editor>
    </modal>
    <b-row>
      <b-col cols="9">
        <div v-if="products">
          <b-row>
            <div v-for="product in products" :key="product.name">
              <b-card @click="showMore(product)" class="m-1" >
                <b-card-text>
                  {{product.name}}
                </b-card-text>
              </b-card>
            </div>
          </b-row>
        </div>
      </b-col>
      <b-col cols="3">
        <b-jumbotron class="text-center">
        <div>
          <div v-if="order">
            <div v-for="item in order" :key="item.name">
              <display-order :product="item"></display-order>
            </div>
          </div> 
          <b-button @click="valid">Valider</b-button>
        </div>
        </b-jumbotron>
      </b-col>
    </b-row>
    
        
    
    
    
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
