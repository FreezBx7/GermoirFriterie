<template>
  <div v-if="product.quantity > 0">
    {{product.quantity}} -
    <div v-if="product.size && product.size != 'Seul'">
      {{product.size}}
    </div>
    {{product.name}} 
    <div v-if="product.bake">{{product.bake}}</div>
    <div v-if="product.extras">
      <div v-for="extra in product.extras" :key="extra.size">
        <div v-if="extra.size">
          {{extra.size}}
        </div>
      </div>
    </div>
  </div>

  </div>
</template>

<script>
export default {
  props: {
    product : {
      required : true,
      default : null,
    }
  }
}
</script>
