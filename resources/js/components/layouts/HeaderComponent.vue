<template>
    <div class="header__head">
        <div class="head__logo">
            <img :src="'../img/LogoFull.png'" alt="">
        </div>
        <div class="head__nav">
            <ul>
                <li><a href="#">Главная</a></li>
                <li><a href="#">Каталог</a></li>
            </ul>
        </div>
        <div class="head__search">
            <input type="text" name="search" id="search" placeholder="Поиск">
            <label for="search">
                <img :src="'../img/Search.svg'" alt="">
            </label>
        </div>
        <div class="head__login">
            <a href="">Вход</a>
        </div>
    </div>
</template>

<script>
export default {
    name: "HeaderComponent"
}
</script>

<style scoped>

    .header__head{
        height: 125px;
        margin: 0 175px;

        display: flex;
        flex-direction: row;
        align-items: center;

        position: relative;
        z-index: 4;
    }

    .head__logo {
        width: 15%;
        height: 100%;
    }
    .head__logo img{
        width: 100%;
        height: 100%;
        object-fit: contain;
        object-position: center;
    }

    .head__nav{
        height: 100%;
        width: 50%;

        display: flex;
        justify-content: end;
        align-items: center;
    }
    .head__nav ul{
        display: flex;
        flex-direction: row;
        align-items: center;
        list-style: none;
        gap: 8rem;
    }
    .head__nav a{
        text-decoration: none;
        color: white;
        font-family: sans-serif;
        font-size: 1.25rem;
        font-weight: bolder;
    }

    .head__search{
        width: 20%;
        height: 100%;

        display: flex;
        justify-content: center;
        align-items: center;
    }
    .head__search input[type='text']{
        width: 0;

        background: transparent;
        outline: none;
        border:none;
        border-bottom: 2px #FF7F00 solid;

        color: white;
        font-size: 1rem;
        font-family: sans-serif;
        letter-spacing: 0.15rem;
        font-weight: normal;

        transition: width 0.4s ease-in;
    }
    .head__search input[type='text']:focus{
        width: 75%;
    }
    .head__search label{
        cursor: pointer;
        margin: 0 2.5%;
    }

    .head__login{
        width: 10%;
        height: 100%;

        display: flex;
        justify-content: center;
        align-items: center;
    }
    .head__login a{
        text-decoration: none;
        color: white;
        width: 60%;
        height: 30%;
        background: #FF7E00;
        border-radius: 10px;

        display: flex;
        justify-content: center;
        align-items: center;

        font-family: sans-serif;
        font-size: 1rem;
        font-weight: bold;
        letter-spacing: 0.15rem;
    }
</style>
