<template>
    <section class="genres">
        <div class="genres-header">
            <h2>Жанры на любой вкус</h2>
        </div>
        <div class="genres-body">
            <ul class="genres-list">
                <li>ДРАМА</li>
                <li>ДЕТЕКТИВ</li>
                <li>БОЕВИК</li>
                <li>ВЕСТЕРН</li>
                <li>КОМЕДИЯ</li>
                <li>ФАНТАСТИКА</li>
                <li>ФЕНТЕЗИ</li>
                <li>БИОГРАФИЯ</li>
            </ul>
            <ul class="genres-list">
                <li>КОМЕДИЯ</li>
                <li>ФАНТАСТИКА</li>
                <li>ФЕНТЕЗИ</li>
                <li>БИОГРАФИЯ</li>
                <li>ДРАМА</li>
                <li>ДЕТЕКТИВ</li>
                <li>БОЕВИК</li>
                <li>ВЕСТЕРН</li>
            </ul>
            <ul class="genres-list">
                <li>БОЕВИК</li>
                <li>ДРАМА</li>
                <li>ДЕТЕКТИВ</li>
                <li>ФАНТАСТИКА</li>
                <li>ФЕНТЕЗИ</li>
                <li>ВЕСТЕРН</li>
                <li>КОМЕДИЯ</li>
                <li>БИОГРАФИЯ</li>
            </ul>
        </div>
        <div class="genres-footer">
            <router-link :to="{ name: '' }" class="genres-btn">БОЛЬШЕ ЖАНРОВ</router-link>
        </div>
    </section>
</template>

<script>
export default {
    name: "GenreComponent"
}
</script>

<style scoped>
    .genres{
        width: 100%;
        height: 60vh;
        display: flex;
        flex-direction: column;
    }
    .genres-header{
        width: 100%;
        height: 15%;
        display: flex;
        align-items: flex-end;
    }
    .genres-header h2{
        font-family: 'Oswald', sans-serif;
        font-weight: bold;
        font-size: 48px;
        letter-spacing: 10px;
        margin-left: 175px;
        color: white;
    }
    .genres-body{
        width: 100%;
        height: 70%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-evenly;
    }
    .genres-list{
        width: 82.5%;
        list-style: none;
        color: white;
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
    }
    .genres-list li{
        padding: .5% 2%;
        border-radius: 25px;

        font-family: "Oswald", sans-serif;
        font-size: 24px;
        font-weight: bold;
        letter-spacing: 2px;
    }
    .genres-list li:nth-child(odd){
        background: #FF7E00;
        color: white;
    }
    .genres-list li:nth-child(even){
        background: white;
        color: #FF7E00;
    }
    .genres-footer{
        width: 100%;
        height: 15%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .genres-btn{
        text-decoration: none;
        color: white;

        font-family: "Oswald", sans-serif;
        font-size: 24px;
        letter-spacing: 2px;
        font-weight: bold;
        padding: 1% 2%;
        background: #FF7E00;
        border-radius: 20px;

        transition: all 0.4s ease-in-out;
    }
    .genres-btn:hover{
        background: white;
        color: #FF7E00;
    }
</style>
