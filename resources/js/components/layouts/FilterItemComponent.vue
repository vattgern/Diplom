<template>
    <li class="filter-item">
        <div class="filter-item-header">
            <h4>{{ this.title }}</h4>
            <img :src="'../img/icons/triangle-black.svg'" alt="">
        </div>
        <div class="filter-item-options">

        </div>
    </li>
</template>

<script>
export default {
    name: "FilterItemComponent",
    props:{
        title: String,
        filterOptions: Array
    },
    data(){
        return{
            filterOptions:[
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
    .filter-item{
        width: 100%;
        height: 50px;
        border: 2px #FF7E00 solid;
    }
    .filter-item-header{
        height: 100%;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        margin: 0 5%;
    }
    .filter-item-header h4{
        font-family: "Oswald", sans-serif;
        font-weight: bold;
        color: black;
        font-size: 24px;
    }
</style>
