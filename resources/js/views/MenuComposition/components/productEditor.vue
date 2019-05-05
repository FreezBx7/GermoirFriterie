<template>
  <div class="productEditor">
      {{product.name}}
      <div v-if="product.sizes.length > 1">
        <label>Taille</label>
        <div v-for="size in product.sizes" v-bind:key="size.id">
          <button @click="updateSize(size.label)">{{size.label}}</button>
        </div>
      </div>
      <div> 
        <label>Suppléments</label>
        <div v-for="extra in extras" v-bind:key="extra.id">
          {{extra.label}}
          <button @click="updateExtrasSize(extra, 'less')">Moins</button>
          <button @click="updateExtrasSize(extra, 'same')">Comme c'est</button>
          <button @click="updateExtrasSize(extra, 'more')">Plus</button>
        </div>
        <!-- Créer un composent générique pour les extras -->
      </div>
      <div>
        <label>Cuissons</label>
        <div v-for="bake in bakes" v-bind:key="bake.id">
          <button @click="updateBake(bake.meta)">{{bake.label}}</button>
        </div>
      </div>
      <!-- Quantity -->
      <div>
        <button @click="decrement">-</button>
        <span>{{editProduct.quantity}}</span>
        <button @click="increment">+</button>
      </div>
      <!-- Footer button -->
      <div>
        <button @click="valid">Valider</button>
        <button @click="close">Annuler</button>
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
  data() {
    return {
      bakes: [
        {
          label: 'Bleu',
          meta: 'BL',
          id: 0,
        },
        {
          label: 'Saignant',
          meta: 'SG',
          id: 1,
        },
        {
          label: 'A point',
          meta: 'AP',
          id: 2,
        },
        {
          label: 'Bien cuit',
          meta: 'BC',
          id: 3,
        },
        {
          label: 'Semelle',
          meta: 'BBC',
          id: 4,
        },
        {
          label: 'None',
          meta: null,
          id: 5,
        },
      ],
      extras: [
        {
          label: 'Cornichon',
          meta: 'Corni',
          id: 0,
        },
        {
          label: 'Oignon frits',
          meta: 'OigF',
          id: 1,
        },
        {
          label: "Confit d'oignons",
          meta: 'Confit',
          id: 2,
        },
        {
          label: 'Cheddar',
          meta: 'Fro',
          price: 0.5,
          id: 3,
        },
        {
          label: 'Maroille',
          meta: 'Maroi',
          price: 0.8,
          id: 4,
        },
        {
          label: 'Lard',
          meta: 'Lard',
          price: 0.3,
          id: 5,
        },
        {
          label: 'Tomates',
          meta: 'Tomates',
          id: 6,
        },
        {
          label: 'Salade',
          meta: 'Salade',
          id: 7,
        },
      ],
      editProduct: {
        size: null,
        quantity: 1,
        extras: [],
        bake: null,
      },
    };
  },
  methods: {
    increment(){
      this.editProduct.quantity += 1;
    },
    decrement(){
      if (this.quantity > 0) {
        this.editProduct.quantity -= 1;
      }
    },
    updateSize(size){
      this.editProduct.size = size;
    },
    updateBake(bake) {
      console.log('bake', bake);
      this.editProduct.bake = bake;
    },
    updateExtrasSize(extra, size) {
      let sizeString = null;
      switch (size) {
        case 'less' :
        sizeString = '-- ' + `${extra.label}`;
        break;
        case 'more' :
        sizeString = '++ ' + `${extra.label}`;
        break;
        default:
        sizeString = null;
        break;
      }
      let found = false;
      if (this.product.extras !== (null || undefined)) {
        this.product.extras.forEach((extraProd, index) => {
          if (extraProd.label === extra) {
            found = true;
            this.product.extras.splice(index, 1, {label: extra, size: sizeString});
          }
        });
        if(!found) {
          this.product.extras.push({label: extra, size: sizeString});
        }
      } else if (sizeString){
        this.product.extras = [];
        this.product.extras.push({label: extra, size: sizeString})
      }
      console.log('@updateExtrasSize product : ', this.product);
    },
    valid(){
      this.editProduct.extras = this.product.extras;
      this.editProduct.name = this.product.name;
      this.$emit('updateOrder', this.editProduct);
      console.log('My Product : ', this.editProduct);
      this.close();
    },
    close(){
      this.$emit('close');
    }
  },
};
</script>

