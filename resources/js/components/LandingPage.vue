<script setup>
import SectionOne from "./SectionOne.vue";
import SectionTwo from "./SectionTwo.vue";
import SectionThree from "./SectionThree.vue";
import ProductList from "./cabinProducts/ProductList.vue";
import ExpectOnBoard from "./categories/ExpectOnBoard.vue";

const props = defineProps({
    products:{
        required:true,
        type:Array
    },
    categories:{
        required:true,
        type:Array
    }
})
</script>

<template>
    <div class="landing-page">
        <SectionOne></SectionOne>
        <SectionTwo></SectionTwo>
        <SectionThree></SectionThree>
        <ProductList :products="products"></ProductList>
        <ExpectOnBoard :categories="categories"></ExpectOnBoard>
    </div>
</template>

<style scoped>
.landing-page {
    text-align: center;
    position: relative;
}
</style>
