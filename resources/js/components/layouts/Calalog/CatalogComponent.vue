<template>
    <HeaderComponent></HeaderComponent>
    <section class="view-films">
        <filter-component></filter-component>
        <div class="view-films-area">
            <FastFiltersComponent></FastFiltersComponent>
        </div>
    </section>
    <FooterComponent></FooterComponent>
</template>

<script>
import FilterComponent from "./FilterComponent.vue";
import HeaderComponent from "../HeaderComponent.vue";
import FooterComponent from "../FooterComponent.vue";
import FastFiltersComponent from "./FastFiltersComponent.vue";
export default {
    name: "CatalogComponent",
    components: {
        HeaderComponent, 
        FilterComponent,
        FooterComponent,
        FastFiltersComponent
    }

}
</script>

<style scoped>
    .view-films{
        height: 100vh;
        width: 100%;
        display: flex;
        flex-direction: row;
    }
    .view-films-area{
        width: 100%;
        height: 100%;
        border: 2px red solid;
    }
</style>
