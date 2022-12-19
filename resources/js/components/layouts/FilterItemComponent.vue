<template>
    <li class="filter-item">
        <div class="filter-item-header">
            <h4>{{ this.title }}</h4>
            <img @click="openFilters(this)" :style="show ? 'transform: rotate(0)' : 'transform: rotate(90deg)'" :src="'../img/icons/triangle-black.svg'" alt="">
        </div>
        <Transition name="arriveFilter">
            <div v-show="show" class="filter-item-options">
                <ul>
                    <li v-for="item in filterOptions">
                        <label>
                            <input type="checkbox" name="" id="">
                            {{ item }}
                        </label>
                    </li>
                </ul>
            </div>
        </Transition>
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
            show: false
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
        height: 150px;
        border: 2px red solid;
        overflow: auto;
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
    }
    .filter-item-options ul li input[type='checkbox']{
        appearance: none;
        height: 24px;
        width: 24px;
        background: #fff;
        border: 2px solid #b0b0b0;
        border-radius: 5px;
        margin: 0 8px 0 0;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        outline-offset: 5px;
        outline-color: #b0b0b0;
    }
    .filter-item-options ul li input[type='checkbox']::after{
        content: '';
        display: block;
        transform: scale(0);
        transition: 120ms transform ease-in-out;
    }
    .filter-item-options ul li input[type='checkbox']:checked::after{
        transform: scale(1);
        background: #FF7F00;
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
