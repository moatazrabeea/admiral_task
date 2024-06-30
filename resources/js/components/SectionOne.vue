<script setup>
import TopHeader from "./TopHeader.vue";

</script>

<template>
    <div>

            <img class="background-image" src="/images/img.png" alt="pool">
            <TopHeader></TopHeader>
            <div class="middle-text row col-12">
            <div class="golden-logo col-3">
                <img src="/images/logo/golden-logo.png" alt="">
            </div>
            <div class="colored-text col-6 d-flex align-items-center justify-content-center p-5">
                <div>
                <p class="busan-text">
                    Busan - Nagasaki - Busan | 23 - 26 May 2024
                </p>
                <p class="ship-text">
                    ANNYEONGHA-SEA-YA
                    SHIPMATES IT'S
                    THE SHIP KOREA
                </p>
                <a href="/book" class="navbar-item book-now">Book A cabin</a>
                </div>
            </div>
            </div>
        </div>
</template>

<style scoped>
.background-image {
    position: relative;
    top: 0;
    width: 100%;
    height: 100vh;
}
.colored-text{
}
.busan-text{
color: #80005C;
    font-weight: 600;
    font-size: 24px;
    line-height: 32px;
;
}
.ship-text{
color:#FF00B7;
    font-weight: 900;
    font-size: 63px;
    line-height: 80px;
}
.book-now {
    background-color: #00AAFF;
    padding: 18px 32px;
    border-radius: 48px;
    color: #fff;
    text-decoration: none;
    font-weight: 400;
    font-size: 16px;
    line-height: 20px;
}

.middle-text{
    position: absolute;
    top: 18%;
}
.golden-logo img {
    width: 496px;
    height: 372px;
    max-width: 100%;
    height: auto;
}
</style>
