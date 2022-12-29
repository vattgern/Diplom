<template>
    <section class="film-poster">
        <HeaderComponent></HeaderComponent>
    </section>
    <FooterComponent></FooterComponent>
</template>
<script>
import HeaderComponent from './layouts/HeaderComponent.vue';

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