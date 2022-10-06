<template>
    <header>
        <HeaderComponent></HeaderComponent>
        <SliderFilmsComponent></SliderFilmsComponent>
    </header>
</template>

<script>
import HeaderComponent from "../components/layouts/HeaderComponent.vue";
import SliderFilmsComponent from "./layouts/SliderFilmsComponent.vue";
export default {
    name: "IndexComponent",
    components:{
        HeaderComponent,
        SliderFilmsComponent
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
