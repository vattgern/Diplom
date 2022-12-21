<template>
    <HeaderComponent></HeaderComponent>
    <section class="view-films">
        <filter-component></filter-component>
        <div class="view-films-area">
            <div class="view-films-area-filters">
                <FastFiltersComponent></FastFiltersComponent>
            </div>
            <div id="filmsArea">
                <FilmCard></FilmCard>
                <FilmCard></FilmCard>
                <FilmCard></FilmCard>
                <FilmCard></FilmCard>
                <FilmCard></FilmCard>
                <FilmCard></FilmCard>
                <FilmCard></FilmCard>
                <FilmCard></FilmCard>
                <FilmCard></FilmCard>
                <FilmCard></FilmCard>
                <FilmCard></FilmCard>
                <FilmCard></FilmCard>
            </div>
        </div>
    </section>
    <FooterComponent></FooterComponent>
</template>

<script>
import FilterComponent from "./FilterComponent.vue";
import HeaderComponent from "../HeaderComponent.vue";
import FooterComponent from "../FooterComponent.vue";
import FastFiltersComponent from "./FastFiltersComponent.vue";
import FilmCard from "../FilmCard.vue";
export default {
    name: "CatalogComponent",
    components: {
        HeaderComponent, 
        FilterComponent,
        FooterComponent,
        FastFiltersComponent,
        FilmCard
    }

}
</script>

<style scoped>
    .view-films{
        height: 100%;
        width: 100%;
        display: flex;
        flex-direction: row;
    }
    .view-films-area{
        width: 100%;
        height: 100%;
    }
    .view-films-area-filters{
        width: 80%;
        display: flex;
        flex-direction: row;
        justify-content: flex-end;
        align-items: center;
    }
    #filmsArea{
        margin-left: 2.5%;
        width: 77.5%;
        height: 100%;
        display: grid;
        grid-template-columns: repeat(4,1fr);
        gap: 20px;
    }
</style>
