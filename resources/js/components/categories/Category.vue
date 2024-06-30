<script setup>
import {computed} from "vue";

const props =defineProps({
    category: {
        type: Object,
        required: true
    }
})
const  currentIndex = 0;

const visibleImages = computed(()=>{
    const visibleCount = 3;
    return props.category.images.slice(currentIndex.value, currentIndex.value + visibleCount);
})

function  prevImage() {
    if (currentIndex.value > 0) {
        currentIndex.value--;
    }
}
function nextImage() {
    if (currentIndex.value < props.category.images.length - 3) {
        currentIndex.value++;
    }
}
</script>

<template>
    <div class="category">
        <h2>{{ category.name }}</h2>
        <p>{{ category.description }}</p>
        <div class="images-container">
            <button @click="prevImage">‹</button>
            <div class="images">
                <img v-for="(image, index) in visibleImages" :key="index" :src="image" class="image" />
            </div>
            <button @click="nextImage">›</button>
        </div>
    </div>
</template>

<style scoped>
.category {
    text-align: center;
    margin: 20px 0;
}

.images-container {
    display: flex;
    align-items: center;
    justify-content: center;
}

.images {
    display: flex;
    overflow: hidden;
    width: 80%;
}

.image {
    width: 33.33%;
    margin: 0 5px;
}

button {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 10px;
    cursor: pointer;
}
</style>
