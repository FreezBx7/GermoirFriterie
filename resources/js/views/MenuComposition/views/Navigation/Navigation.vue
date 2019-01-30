<template>
  <div class="Navigation">
    <div v-for="categorie in categories" :key="categorie.name">
      <button @click="emission(categorie.name)">{{categorie.name}}</button>
    </div>
  </div>
</template>

<script>
import categories from '../../../../utils/categories';

export default {
  data() {
    return {
      value: 0,
      categories,
    };
  },
  methods: {
    emission(name) {
      this.$emit('category', name);
    },
  },
  created() {
    console.log('navig');
  },
};
</script>
