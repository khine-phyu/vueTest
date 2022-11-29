<template>
    <div>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <router-link to="/">Home</router-link>
                        </li>
                        <li class="breadcrumb-item">
                            <router-link to="/about">About</router-link>
                        </li>
                        <li class="breadcrumb-item">
                            <router-link to="/product">Product</router-link>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <router-link to="/cart">
                                <i class="fas fa-cart-arrow-down"></i>
                                <small class="badge badge-danger" style="font-size: 8px">9</small>
                            </router-link>
                        </li>
                    </ol>
                </nav>
            </div>
        </nav>
    </div>
</template>

<script>
export default {
    name: 'Nav'
}
</script>