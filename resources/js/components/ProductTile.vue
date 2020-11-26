<template>
    <div class="container">
        <div class="p-grid">
            <h3>Products</h3>
            <div class="product-grid-container">
                <div
                    v-for="(product, index) in products"
                    :key="index"
                    class="card"
                >
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img
                                :src="'/images/products/' + product.image"
                                alt="Placeholder image"
                            />
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media content">
                            <div class="media-content">
                                <p class="title is-4">
                                    {{ product.name }}
                                </p>
                                <p class="subtitle is-6">
                                    {{ product.vintage }}
                                </p>
                                <div>
                                    <button
                                        class="button is-danger is-outlined"
                                    >
                                        In den Warenkorb
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="content">
                            <h1>{{ product.price }} €</h1>
                            <time datetime="2016-1-1">Rioja, Spain</time>
                            <span class="icon has-text-info">
                                <i class="fas fa-info-circle"></i>
                            </span>
                        </div>
                        <span class="icon">
                            <i class="fas fa-home"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            products: [],
            imgsrc: "/images/products/wine1.webp"
        };
    },
    mounted() {
        this.loadProducts();
    },
    methods: {
        loadProducts() {
            axios
                .get("/api/wines")
                .then(response => {
                    console.log(response.data);
                    this.products = response.data;
                })
                .catch(error => {
                    console.log(error);
                });
        }
    }
};
</script>

<style lang="scss">
h3 {
    display: grid;
    font-size: 32px;
    margin-bottom: 2.7rem;
    //font-family: system-ui;
}
.p-grid {
    display: flex;
    flex-direction: column;
}
.product-grid-container {
    display: grid;
    grid-template-rows: 1fr;
    grid-template-columns: none;
    grid-row-gap: 0.25%;
    padding: 0 1rem;
}
@media (min-width: 576px) {
    .product-grid-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-column-gap: 0.2%;
        grid-template-rows: none;
    }
}
@media (min-width: 768px) {
    .product-grid-container {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-column-gap: 0.2%;
        grid-template-rows: none;
    }
}
@media (min-width: 1024px) {
    .product-grid-container {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        grid-column-gap: 0.2%;
        grid-template-rows: none;
    }
}

.card {
    transition: 0.4s ease;
}

.card:hover {
    box-shadow: 3px 7px 25px #c1c1c1;
    transform: scale(1.01);
    z-index: 1;
}

.card-image {
    padding: 1rem;
}

.image img {
    object-fit: contain;
}

time {
    color: #b9b9b9;
}

media {
    margin-bottom: 0.7rem;
}

.button.is-danger.is-outlined {
    border-color: #924352;
    color: #924352;
}

.button.is-danger.is-outlined:hover,
.button.is-danger.is-outlined.is-hovered,
.button.is-danger.is-outlined:focus,
.button.is-danger.is-outlined.is-focused {
    background-color: #924352;
    border-color: #924352;
}
</style>
