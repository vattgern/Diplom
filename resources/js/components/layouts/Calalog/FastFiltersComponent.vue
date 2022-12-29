<template>
    <div class="fast-filters">
        <FastFilter
            v-for="filter in fastFilters"
            :name="filter"></FastFilter>
    </div>
    <div class="filter-mobile">
        <button @click="this.$store.state.showFilter = true;">Фильтры</button>
    </div>
    <div class="view-mode">
        <img :src="this.$store.state.showMode !== 'cards' ? './img/icons/cards.svg' : './img/icons/cards-active.svg'" @click="this.$store.state.showMode = 'cards'" alt="">
        <img :src="this.$store.state.showMode !== 'cards' ? './img/icons/lists-active.svg' : './img/icons/lists.svg'" @click="this.$store.state.showMode = 'lists'" alt="">
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
        height: 7.5vh;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: flex-start;
        gap: 2vw;
    }
    .view-mode{
        width: 10%;
        display: flex;
        justify-content: space-evenly;
    }
    .view-mode img{
        width: 3vw;
        cursor: pointer;
        margin-right: 20px;
    }
    .filter-mobile{
        display: none;
    }
    @media screen and (max-width: 429px){
        .fast-filters{
            width: 100%;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            gap: 2vw;
        }
        .filter-mobile{
            display: flex;
            align-items: center;
            height: 7.5vh;
            width: 50%;
        }
        .filter-mobile button{
            width: 90%;
            height: 75%;
            margin-left: 5%;

            border-radius: 50px;
            border: none;
            outline: none;
            background: #FF7E00;
            color: white;

            font-family: "Montserrat",sans-serif;
            font-size: 4vw;
            font-weight: bold;
            letter-spacing: 2px;
            transition: all .4s ease;
        }
        .filter-mobile button:hover{
            background: white;
            color: black;
        }
        .view-mode{
            width: 50%;
            justify-content: flex-end;
        }
        .view-mode img{
            width: 5vw;
        }
    }
</style>
