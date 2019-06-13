<template>
  <div class="Navigation">
    <div>
      <b-tabs content-class="mt-3">
        <b-tab v-for="category in categories" :key="category.name" :title="category.name">
	        Im tab {{category.name}}
        </b-tab>
      </b-tabs>
    </div>
    <div v-for="category in categories" :key="category.name">
      <b-button @click="emission(category.name)">{{category.name}}</b-button>
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
