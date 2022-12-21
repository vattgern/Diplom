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
            <button class="filter-reset" @click="resetFilter" >Сбрость</button>
            <button class="filter-apply" @click="applyFilters">Применить</button>
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
                }
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
        width: 100%;
        height: 10%;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-around;
    }
    .filter-reset,
    .filter-apply{
        font-family: "Oswald",sans-serif;
        font-size: 20px;
        padding: 2% 10%;
        color: white;
        background-color: #FF7E00;
        outline: none;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
</style>
