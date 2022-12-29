<template>
    <section class="filter-block">
        <ul class="filter-items">
            <FilterItemComponent
                v-for="filter in filters"
                :title="filter.title"
                :filterOptions="filter.options"
            ></FilterItemComponent>
        </ul>
        <div class="filter-btn">
            <button class="filter-apply" @click="applyFilters">Применить</button>
            <button class="filter-reset" @click="resetFilter" >Сбрость</button>
            <button id="filterExit" class="filter-reset" @click="this.$store.state.showFilter = false;" >Закрыть</button>
        </div>
    </section>
</template>

<script>
import FilterItemComponent from "./FilterItemComponent.vue";
export default {
    name: "FilterComponent",
    components: {FilterItemComponent},
    data(){
        return{
            filters:[
                {
                    title: 'Жанр',
                    options:[
                        'Комедия',
                        'Фэнтези',
                        'Драма',
                        'Фантастика'
                    ]
                },
                {
                    title: 'Год выпуска',
                    options: [
                        '2000', '2001','2002', '2003'
                    ]
                },
            ],
        }
    },
    methods:{
        applyFilters(){
            console.log(this.$store.state.selectedFilters);
        },
        resetFilter(){
            this.$store.state.selectedFilters = [];
        }
    }
}
</script>

<style scoped>
    .filter-block{
        height: 100vh;
        width: 20%;
        background: white;
        margin-left: 10%;
        border-radius: 15px;
    }
    .filter-btn{
        margin-top: 1vw;
        width: 100%;
        height: 20%;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 1vw;
    }
    .filter-reset,
    .filter-apply{
        width: 90%;
        height: 50px;

        font-family: "Oswald",sans-serif;
        font-size: 1.5vw;

        outline: none;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .filter-apply{
        color: white;
        background-color: #FF7E00;
    }
    .filter-reset{
        color: white;
        background: black;
    }
    #filterExit{
        display: none;
    }
    @media screen and (max-width: 1024px) and (min-width: 430px){
        .filter-block{
            margin-left: 5%;
        }
        .filter-reset,
        .filter-apply{
            height: 35px;
        }
    }
    @media screen and (max-width: 429px){
        .filter-block{
            margin: 0;
            position: absolute;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100%;
            z-index: 10;
        }
        .filter-reset,
        .filter-apply{
            font-size: 5vw;
        }
        #filterExit{
            display: block;
        }
    }
</style>
