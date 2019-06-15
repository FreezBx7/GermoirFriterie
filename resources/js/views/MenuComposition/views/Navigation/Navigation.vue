<template>
  <div class="Navigation">
    <div>
      <b-tabs content-class="mt-3">
        <b-tab @click="emission(category.name)"  v-for="category in categories" :key="category.name" :title="category.name">
        </b-tab>
      </b-tabs>
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
    this.$emit('category', 'Viande Chaude');
  },
};
</script>
