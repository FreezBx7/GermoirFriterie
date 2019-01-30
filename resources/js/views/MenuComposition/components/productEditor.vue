<template>
  <div class="productEditor">
    <font-awesome-icon
      class="CloseIcon"
      color="#293676"
      icon="times"
      @click="$emit('close')"/>
      {{product.name}}
      <div v-if="product.priceAlone">
        <button>Seul</button>
      </div>
      <div v-if="product.priceSandwich">
        <button>Sandwich</button>
      </div>
      <div v-if="product.priceAmerican">
        <button>Américain</button>
      </div>
  </div>
</template>

<script>
export default {
  props: {
    product: {
      required: true,
    },
  },
};
</script>

