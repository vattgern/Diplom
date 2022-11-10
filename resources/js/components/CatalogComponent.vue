<template>
    <HeaderComponent></HeaderComponent>
    <section class="view-films">
        <filter-component></filter-component>

    </section>
</template>

<script>
import FilterComponent from "./layouts/FilterComponent.vue";
import HeaderComponent from "./layouts/HeaderComponent.vue";
export default {
    name: "CatalogComponent",
    components: {HeaderComponent, FilterComponent}

}
</script>

<style scoped>
    .view-films{
        height: 100vh;
        width: 100vw;
        overflow: hidden;
    }
</style>
