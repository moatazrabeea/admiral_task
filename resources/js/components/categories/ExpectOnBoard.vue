<script setup>
import { ref } from 'vue';
import Category from "./Category.vue";



const props =defineProps({
    categories: {
        type: Array,
        required: true
    }
})
const selectedIndex = ref(0);
function selectCategory(index) {
    selectedIndex.value = index;
}
</script>

<template>
    <div class="expect-on-board" v-if="categories.length">
        <div class="header-container">
            <h1>WHAT TO EXPECT ON BOARD</h1>
            <button class="book-button">BOOK A CABIN</button>
        </div>
        <div class="categories-nav">
            <button
                v-for="(category, index) in categories"
                :key="index"
                @click="selectCategory(index)"
                :class="{ active: selectedIndex === index }"
            >
                {{ category.name }}
            </button>
        </div>
        <div v-for="(category, index) in categories" :key="index">
            <Category v-show="selectedIndex === index" :category="category" />
        </div>
    </div>
</template>

<style scoped>
.expect-on-board {
    text-align: center;
    position: absolute;
    top: 460%;
    margin: 20px;
}
.header-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 20px;
}

.header-container h1 {
    margin: 0;
    color: #FF00B7;
;
}

.header-container .book-button {
    margin-left: 20px;
}
.book-button {
    background-color: #007bff;
    color: white;
    padding: 8px 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.categories-nav {
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
}

.categories-nav button {
    background-color: transparent;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    font-size: 1.2rem;
    margin: 0 5px;
    position: relative;
}

.categories-nav button.active::after {
    content: '';
    position: absolute;
    bottom: -5px;
    left: 0;
    right: 0;
    height: 2px;
    background-color: #007bff;
}
</style>
