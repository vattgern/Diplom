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
        width: 100px;
        height: 40px;
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
        font-size: 18px;
    }
</style>