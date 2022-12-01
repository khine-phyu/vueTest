<template>
    <div>
        <Master>
            <!-- loader -->
            <Loader v-show="isLoad"></Loader>
            <div v-show="!isLoad" class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card p-3 m-3">
                            <div class="card-header">Product Name</div>
                            <div class="card-body">
                                <img src="https://www.alibaba.com/product-detail/Best-Selling-Women-s-Swim-Suits_10000007506225.html?spm=a2700.8293689.youMayAlsoLike.1.441867af2sXaL7" alt="">
                            </div>
                            <div class="card-footer">
                                <span>Price: <small>$100</small></span>
                                <a href="" class="btn btn-sm btn-dark float-right">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-3 m-3">
                            <div class="card-header">Product Name</div>
                            <div class="card-body">
                                <img src="https://www.alibaba.com/product-detail/Best-Selling-Women-s-Swim-Suits_10000007506225.html?spm=a2700.8293689.youMayAlsoLike.1.441867af2sXaL7" alt="">
                            </div>
                            <div class="card-footer">
                                <span>Price: <small>$100</small></span>
                                <a href="" class="btn btn-sm btn-dark float-right">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-3 m-3">
                            <div class="card-header">Product Name</div>
                            <div class="card-body">
                                <img src="https://www.alibaba.com/product-detail/Best-Selling-Women-s-Swim-Suits_10000007506225.html?spm=a2700.8293689.youMayAlsoLike.1.441867af2sXaL7" alt="">
                            </div>
                            <div class="card-footer">
                                <span>Price: <small>$100</small></span>
                                <a href="" class="btn btn-sm btn-dark float-right">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-3 m-3">
                            <div class="card-header">Product Name</div>
                            <div class="card-body">
                                <img src="https://www.alibaba.com/product-detail/Best-Selling-Women-s-Swim-Suits_10000007506225.html?spm=a2700.8293689.youMayAlsoLike.1.441867af2sXaL7" alt="">
                            </div>
                            <div class="card-footer">
                                <span>Price: <small>$100</small></span>
                                <a href="" class="btn btn-sm btn-dark float-right">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-3 m-3">
                            <div class="card-header">Product Name</div>
                            <div class="card-body">
                                <img src="https://www.alibaba.com/product-detail/Best-Selling-Women-s-Swim-Suits_10000007506225.html?spm=a2700.8293689.youMayAlsoLike.1.441867af2sXaL7" alt="">
                            </div>
                            <div class="card-footer">
                                <span>Price: <small>$100</small></span>
                                <a href="" class="btn btn-sm btn-dark float-right">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </Master>
    </div>
</template>

<script>
import Master from "../layout/Master.vue"
import Loader from "../components/Loader.vue"
import axios from "axios"
export default {
    name: 'Product',
    components: { Master, Loader },
    data() {
        return {
            isLoad: true,
            products: [],
        }
    },
    created() {
        console.log("created");
        // axios.get("http://cors-anywhere.herokuapp.com/https://unploughed-acre.000webhostapp.com/product.json").then((res) => {
        //     console.log(res.data);
        // });
    }
}
</script>