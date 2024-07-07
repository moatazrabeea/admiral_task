<script setup>
import ProductCard from "./ProductCard.vue";
import CabinHeader from "./CabinHeader.vue";
import { VueperSlides, VueperSlide } from 'vueperslides'
import 'vueperslides/dist/vueperslides.css'

const props = defineProps({
  products:{
    required:true,
    type:Array
  }
})
</script>

<template>
  <div class="product-list container">
    <div class="cabin-header">
      <CabinHeader></CabinHeader>
    </div>

  <div class="carousel-wrapper">

    <vueper-slides arrows-outside bullets-outside transition-speed="250"
                   :visible-slides="3"
                   slide-multiple
                   >
      <vueper-slide
          v-for="product in products"
          :key="product.product_id">
          <template #content>
              <ProductCard :product="product"></ProductCard>
          </template>
      </vueper-slide>
    </vueper-slides>
  </div>
  </div>
</template>

<style scoped>
.product-list{
  position: absolute;
  top: 300%;
    margin-left: 15%;
    margin-bottom: 10%;
}
.carousel-wrapper{
    margin-left: 7%;
}
</style>
