<template>
    <header>
        <HeaderComponent></HeaderComponent>
        <SliderFilmsComponent></SliderFilmsComponent>
    </header>
    <PopularComponent></PopularComponent>
    <GenreComponent></GenreComponent>
    <AboutForumComponent></AboutForumComponent>
    <ContactFormComponent></ContactFormComponent>
    <FooterComponent></FooterComponent>
</template>

<script>
import HeaderComponent from "../components/layouts/HeaderComponent.vue";
import SliderFilmsComponent from "./layouts/forIndexPage/SliderFilmsComponent.vue";
import PopularComponent from "./layouts/forIndexPage/PopularComponent.vue";
import GenreComponent from "./layouts/forIndexPage/GenreComponent.vue";
import AboutForumComponent from "./layouts/forIndexPage/AboutForumComponent.vue";
import ContactFormComponent from "./layouts/forIndexPage/ContactFormComponent.vue";
import FooterComponent from "./layouts/FooterComponent.vue";
export default {
    name: "IndexComponent",
    data(){
        return{

        }
    },
    components:{
        FooterComponent,
        ContactFormComponent,
        GenreComponent,
        PopularComponent,
        HeaderComponent,
        SliderFilmsComponent,
        AboutForumComponent
    }
}
</script>

<style scoped>
    header{
        width: 100%;
        height: 100vh;
        background: #1a202c;
        position: relative;
    }
</style>
