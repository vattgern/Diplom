<template>
    <li class="filter-item">
        <div class="filter-item-header" @click="openFilters(this)">
            <h4>{{ this.title }}</h4>
            <img :style="show ? 'transform: rotate(0)' : 'transform: rotate(90deg)'" 
                :src="'../img/icons/triangle-black.svg'" alt="">
        </div>
        <div v-show="show" class="filter-item-options">
            <ul>
                <li v-for="item in filterOptions">
                    <label>
                        <input type="checkbox" name="" id="" :value="item" v-model="this.$store.state.selectedFilters">
                        <p>{{ item }}</p>
                    </label>
                </li>
            </ul>
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
            show: false,
        }
    },
    methods: {
        openFilters(el){
            this.show = this.show == true ? false : true;
        },
    },
}
</script>

<style scoped>
    .filter-item{
        width: 100%;
        height: 100%;
    }
    .filter-item-header{
        height: 100%;
        height: 50px;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        margin: 0 5%;
        cursor: pointer;
    }
    .filter-item-header h4{
        font-family: "Oswald", sans-serif;
        font-weight: bold;
        color: black;
        font-size: 24px;
    }
    .filter-item-header img{
        transform: rotate(90deg);
        transition: all 0.4s ease;
    }
    .filter-item-options{
        height: 100%;
        border-bottom: 2px gray solid;
    }
    .filter-item-options ul{
        width: 100%;
        height: 100%;
        list-style: none;
        font-family: "Montserrat",sans-serif;
    }
    .filter-item-options ul li{
        display: flex;
        flex-direction: row;
        align-items: center;
        margin: 2.5% 0;
        position: relative;
    }
    .filter-item-options ul li input[type='checkbox']{
        appearance: none;
    }
    .filter-item-options ul li label{
        width: 100%;
        padding: 2.5% 0;
        display: flex;
        flex-direction: row;
    }
    .filter-item-options ul li label p {
        margin-left: 10%;
    }
    .filter-item-options ul li input[type='checkbox']::after{
        content: "";
        cursor: pointer;
        position: absolute;
        left: 1%;
        top: 50%;
        transform: translateY(-50%);
        width: 24px;
        height: 24px;
        border: 2px gray solid;
        border-radius: 5px;
        transition: all 0.4s ease-in-out;
    }
    .filter-item-options ul li input[type='checkbox']:hover::after{
        border: 2px #FF7E00 solid;
    }
    .filter-item-options ul li input[type='checkbox']:checked::after{
        content: '\2713';
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 20px;
        color: white;
        background-color: #FF7E00;
        
    }
    .arriveFilter-enter-active,
    .arriveFilter-leave-active{
        transition: all 0.4s ease-in;
    }
    .arriveFilter-enter-from,
    .arriveFilter-leave-to{
        transform: translateY(-5vh);
        opacity: 0;
    }
</style>
