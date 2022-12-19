<template>
    <HeaderComponent></HeaderComponent>
    <section class="view-films">
        <filter-component></filter-component>

    </section>
    <FooterComponent></FooterComponent>
</template>

<script>
import FilterComponent from "./layouts/FilterComponent.vue";
import HeaderComponent from "./layouts/HeaderComponent.vue";
import FooterComponent from "./layouts/FooterComponent.vue";
export default {
    name: "CatalogComponent",
    components: {
        HeaderComponent, 
        FilterComponent,
        FooterComponent
    }

}
</script>

<style scoped>
    .view-films{
        height: 100vh;
        width: 100%;
    }
</style>
