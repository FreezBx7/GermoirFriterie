<template>
  <div class="Navigation">
    <div v-for="category in categories" :key="category.name">
      <button @click="emission(category.name)">{{category.name}}</button>
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
