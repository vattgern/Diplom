<template>
    <HeaderComponent></HeaderComponent>
    <section class="view-films">
        <Transition name="filterShow">
            <filter-component v-show="this.$store.state.showFilter"></filter-component>
        </Transition>
        <div class="view-films-area">
            <div class="view-films-area-filters">
                <FastFiltersComponent></FastFiltersComponent>
            </div>
            <div :class="this.$store.state.showMode !== 'lists' ? 'filmsArea show-mode-cards' : 'filmsArea show-mode-lists'">
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
    },
    mounted() {
        if(window.outerWidth >= 430){
            this.$store.state.showFilter = true;
        }
        window.addEventListener('resize',()=>{
            if(window.outerWidth >= 430){
                this.$store.state.showFilter = true;
            } else {
                this.$store.state.showFilter = false;
            }
        })
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
        margin-bottom: 1vw;
        display: flex;
        flex-direction: row;
        justify-content: flex-end;
        align-items: center;
    }
    .filmsArea{
        margin-left: 2.5%;
        width: 77.5%;
        height: 100%;
    }
    .show-mode-cards{
        display: grid;
        grid-template-columns: repeat(4,1fr);
        gap: 20px;
    }
    .show-mode-lists{
        display: flex;
        flex-direction: column;
        gap: 20px;
    }
    @media screen and (max-width: 1024px) and (min-width: 769px){
        .view-films-area-filters{
            width: 87.5%;
            margin-bottom: 0;
        }
        .filmsArea{
            width: 85%;
        }
    }
    @media screen and (max-width: 768px) and (min-width: 430px){
        .view-films-area-filters{
            width: 87.5%;
            margin-bottom: 0;
        }
        .show-mode-cards{
            display: grid;
            grid-template-columns: repeat(3,1fr);
            gap: 10px;
        }
        .filmsArea{
            width: 85%;
        }
    }
    @media screen and (max-width: 429px){
        .view-films-area-filters{
            width: 100%;
            flex-wrap: wrap;
            justify-content: flex-start;
        }
        .filmsArea{
            width: 95%;
            margin: 0 2.5%;
        }
        .show-mode-cards{
            display: grid;
            grid-template-columns: repeat(2,1fr);
            gap: 10px;
        }
        .show-mode-lists{
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
    }
    .filterShow-enter-active,
    .filterShow-leave-active {
        transition: 0.5s ease-in;
    }
    .filterShow-enter-from,
    .filterShow-leave-to{
        transform: translateX(-100%);
    }
</style>
