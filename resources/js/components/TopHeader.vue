<!-- resources/js/components/Navbar.vue -->
<template>
    <nav class="navbar">
        <div class="navbar-brand">
            <a href="/">
                <img src="/images/logo/img.png" alt="">

            </a>
        </div>
        <div class="navbar-menu">
            <a href="/login" class="navbar-item">Login</a>
            <a href="/cart" class="navbar-item">
                <img src="/images/icons/cart-icon.png" alt="">
            </a>
            <a href="/book" class="navbar-item book-now">Book A cabin</a>
        </div>
    </nav>
</template>

<script>
export default {
    name: 'Navbar'
}
</script>

<style scoped>
.navbar {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    background-color: rgba(0, 0, 0, 0);
    color: #fff;
    z-index: 1000;
}

.navbar-menu {
    display: flex;
    align-items: center;
    margin-right: 3%;
}

.navbar-item {
    margin-left: 20px;
    color: #fff;
    text-decoration: none;
}

.navbar-item:hover {
    color: #ddd;
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

</style>
