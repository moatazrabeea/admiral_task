<script setup>
import {computed} from "vue";

const props = defineProps({
    product:{
        required:true,
        type:Object
    }
})
const formattedPhases = computed(()=>{
    const phases = JSON.parse(props.product.phases_dates);
    const formatted = {};
    for (const key in phases) {
        const [year, month, day] = phases[key].split("-");
        formatted[key] = `${day}/${month}/${year}`;
    }
    return formatted;
})
</script>

<template>
    <div class="product-card">
        <img :src="product.image" alt="Product Image" class="product-image" />
        <div class="product-info">
            <h2 class="product-title">{{ product.name }}</h2>
            <p class="price">{{ product.price_range }}</p>
            <div class="dates">
                <p v-for="(key,date) in formattedPhases" :key="key">{{ key }} - {{ date }}</p>
            </div>
            <p class="description">{{ product.description }}</p>
            <button class="book-button">BOOK CABIN</button>
            <p class="flexi-pay">FLEXI PAY OPTION IS AVAILABLE</p>
        </div>
    </div>
</template>

<style scoped>
.product-card {
    border: 1px solid #ccc;
    padding: 16px;
    border-radius: 8px;
    max-width: 300px;
}

.product-image {
    width: 100%;
    border-radius: 8px;
}

.product-info {
    text-align: center;
}


.product-title {
    font-size: 18px;
    color: #ff007f;
    margin-top: 16px;
}

.price {
    font-size: 16px;
    margin: 8px 0;
}

.dates {
    margin: 8px 0;
}

.description {
    font-size: 14px;
    margin: 8px 0;
}

.book-button {
    background-color: #007bff;
    color: white;
    padding: 8px 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.flexi-pay {
    font-size: 12px;
    margin-top: 8px;
}
</style>
