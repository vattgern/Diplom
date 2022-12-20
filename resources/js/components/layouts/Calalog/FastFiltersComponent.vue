<template>
    <div class="fast-filters">
        <FastFilter 
            v-for="filter in fastFilters"
            :name="filter"></FastFilter>
        <img :src="'./img/icons/cards.svg'" alt="">
        <img :src="'./img/icons/lists.svg'" alt="">
    </div>

</template>

<script>
    import FastFilter from './FastFilter.vue';
    export default {
        components:{
            FastFilter
        },
        data(){
            return{
                fastFilters: [
                    'Комедия',
                    'Фэнтези',
                    'Драма',
                    'Фантастика'
                ]
            }
        }
    }
</script>

<style scoped>
    .fast-filters{
        width: 80%;
        border: 2px red solid;
        height: 7.5vh;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: flex-start;
        gap: 2rem;
    }
</style>