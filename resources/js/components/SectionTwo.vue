<script setup>

</script>

<template>
    <div class="main-image-container">
        <img src="/images/secondSection/L9.png" alt="" class="main-image">
        <div class="overlay">
            <div class="image-row top-row">
                <img src="/images/secondSection/P15.png" alt="p15 image">
                <img src="/images/secondSection/CRUISE%20SHIP.png" alt="Image cruise">
                <img src="/images/secondSection/PINEAPPLE.png" alt="Image PINEAPPLE">
            </div>
            <div class="image-row middle-row">
                <img src="/images/secondSection/Group%2015066.png" alt="">
                <img src="/images/secondSection/Frame%2026085671.png" alt="">
                <img src="/images/secondSection/Group%2015065.png" alt="Image 6">
            </div>
        </div>
    </div>
</template>

<style scoped>
.main-image-container {
    position: absolute;
    top:90%;
    width: 100%;
}

.main-image {
    width: 100%;
    display: block;
}

.overlay {
    position: absolute;
    top: -5%;
    left: 0;
    width: 100%;
    height: 100%;
}

.image-row {
    display: flex;
    justify-content: space-around;
    position: absolute;
    width: 100%;
}
.middle-row {
    top: 50%;
    position: absolute;
    transform: translateY(-50%);
}

</style>
