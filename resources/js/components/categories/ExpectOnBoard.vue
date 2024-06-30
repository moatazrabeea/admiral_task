<script setup>
import Category from "./Category.vue";

let selectedIndex = 0

const props =defineProps({
    categories: {
        type: Array,
        required: true
    }
})

function selectCategory(index) {
    selectedIndex = index;
}
</script>

<template>
    <div class="expect-on-board" v-if="categories.length">
        <h1>WHAT TO EXPECT ON BOARD</h1>
        <button class="book-button">BOOK A CABIN</button>
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
        <Category :category="categories[selectedIndex]" />
    </div>
</template>

<style scoped>
.expect-on-board {
    text-align: center;
    position: absolute;
    top: 460%;
}

.book-button {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 10px 20px;
    margin: 10px;
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
