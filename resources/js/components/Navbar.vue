<template>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="#">
                <h3>wIne app</h3>
            </a>
            <a
                role="button"
                class="navbar-burger burger"
                aria-label="menu"
                aria-expanded="false"
                data-target="navbarBasicExample"
            >
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item"> Home </a>

                <a class="navbar-item"> Rotwein </a>
                <a class="navbar-item"> Weisswein </a>
                <a class="navbar-item"> Rose </a>

                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link"> Land </a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item"> Argentinien </a>
                        <a class="navbar-item"> Frankreich </a>
                        <a class="navbar-item"> Spanien </a>
                        <a class="navbar-item"> Italien </a>
                    </div>
                </div>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-primary">
                            <strong>Sign up</strong>
                        </a>
                        <a class="button is-light"> Log in </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</template>

<script>
//import { VueAgile } from "vue-agile";

export default {
    name: "Navbar",
    data() {
        return {};
    }
};
</script>

<style scoped>
nav {
    width: 100%;
    height: 3em;
    background-color: #333;
}

nav a {
    color: #cecece;
}

.button.is-primary {
    background-color: rgb(138 53 72 / 0.5);
    border-color: transparent;
    color: #fff;
}

.navbar-item h3 {
    color: #bb4b28;
    font-size: 22px;
}
</style>
