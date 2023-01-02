<template>
    <section class="film-poster">
        <HeaderComponent></HeaderComponent>
    </section>
    <AboutFilm></AboutFilm>
    <FormReview></FormReview>
    <Review></Review>
    <Similar></Similar>
    <FooterComponent></FooterComponent>
</template>
<script>
import HeaderComponent from './layouts/HeaderComponent.vue';
import AboutFilm from "./layouts/Film/AboutFilm.vue";
import FormReview from './layouts/Film/FormReview.vue';
import Review from './layouts/Film/Review.vue';
import Similar from "./layouts/Film/Similar.vue";
import FooterComponent from './layouts/FooterComponent.vue';

export default {
    name: "FilmComponent",
    data(){
        return {

        }
    },
    components: {
        HeaderComponent,
        FooterComponent,
        AboutFilm,
        FormReview,
        Review,
        Similar
    }
}
</script>
<style scoped>
    .film-poster{
        width: 100vw;
        height: 75vh;
        background-image: url('/img/postersSlider/GOT.png');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        background-attachment: fixed;
    }
</style>
