<script setup>

</script>

<template>
    <section class="cabin-section">
        <div class="cabin-content">
            <img src="/images/cabinProducts/Frame%2026085832.png" alt="Cabin Image" class="cabin-image" />
            <div class="cabin-details">
                <h2 class="cabin-title">YOUR CABIN INCLUDES</h2>
                <p class="cabin-description">Your cabin includes</p>
                <ul class="cabin-list">
                    <li>4D3N luxury accommodation</li>
                    <li>Access to music stages</li>
                    <li>Exclusive Artist experiences</li>
                    <li>Themed Parties</li>
                    <li>Side Activities</li>
                    <li>24-Hours all-you-can-eat buffet</li>
                    <li>Access to facilities on the Costa Serena</li>
                </ul>
            </div>
        </div>
    </section>
</template>

<style scoped>
.cabin-section {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
    background-color: #f8f4e3;
}

.cabin-content {
    display: flex;
    flex-direction: row;
    align-items: center;
}

.cabin-image {
    max-width: 300px;
    margin-right: 20px;
}

.cabin-details {
    max-width: 500px;
}

.cabin-title {
    font-size: 2rem;
    color: #ff007f;
    margin-bottom: 10px;
}

.cabin-description {
    font-size: 1.2rem;
    font-weight: bold;
    margin-bottom: 10px;
}

.cabin-list {
    list-style-type: disc;
    padding-left: 20px;
}

.cabin-list li {
    margin-bottom: 5px;
}
</style>
