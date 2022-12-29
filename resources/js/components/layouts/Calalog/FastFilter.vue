<template>
    <div class="fast-filter">
        <p>{{ this.name }}</p>
    </div>
</template>

<script>
    export default {
        props:{
            name: String
        }
    }
</script>

<style scoped>
    .fast-filter{
        width: 7.5vw;
        height: 3vw;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #FF7E00;
        border-radius: 50px;
        cursor: pointer;
    }
    .fast-filter p{
        color: white;
        font-family: "Oswald", sans-serif;
        font-size: 1.25vw;
    }
    @media screen and (max-width: 429px){
        .fast-filter{
            width: 22.5vw;
            height: 7.5vw;
        }
        .fast-filter p{
            font-size: 4vw;
        }
    }
</style>
