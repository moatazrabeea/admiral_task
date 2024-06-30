<script setup>
import ProductCard from "./ProductCard.vue";
import CabinHeader from "./CabinHeader.vue";

const props = defineProps({
  products:{
    required:true,
    type:Array
  }
})
</script>

<template>
  <div class="product-list">
    <div class="cabin-header">
      <CabinHeader></CabinHeader>
    </div>

  <div class="carousel-wrapper">
    <carousel :per-page="1">
      <slide v-for="product in products" :key="product.id">
        <ProductCard
            :product="product"
        />
      </slide>
    </carousel>
  </div>
  </div>
</template>

<style scoped>
.product-list{
  position: absolute;
  top: 300%;
}
</style>
