<template>
    <div class="header__head">
        <div class="head__logo">
            <img :src="'../img/LogoFull.png'" alt="">
        </div>
        <div class="head__nav">
            <ul>
                <li>
                    <router-link :to="{name: 'index'}">Главная</router-link>
                </li>
                <li>
                    <router-link :to="{name: 'catalog'}">Каталог</router-link>
                </li>
                <li>
                    <router-link :to="{name: ''}">Форумы</router-link>
                </li>
            </ul>
        </div>
        <div class="head__search">
            <input type="text" name="search" id="search" placeholder="Поиск">
            <label for="search">
                <img :src="'../img/icons/Search.svg'" alt="">
            </label>
        </div>
        <div class="head__login">
            <router-link :to="{ name: 'registration' }" class="headerBtn">Вход</router-link>
        </div>
        <div class="header__menu">
            <img :src="'./img/icons/burgerMenu.svg'" v-on:click="burgerMenu = true" alt="">
        </div>
    </div>
    <Transition name="burgerMenu">
        <div class="burgerMenu" v-show="burgerMenu">
        <div class="burgerMenuExit" v-on:click="burgerMenu = false">
            <img :src="'./img/icons/Close.svg'" alt="">
        </div>
        <ul>
            <li>Главная</li>
            <li>Каталог</li>
            <li>Форумы</li>
            <li>Вход</li>
            <li>Поиск</li>
        </ul>
    </div>
    </Transition>
</template>

<script>
export default {
    name: "HeaderComponent",
    data(){
        return {
            burgerMenu: false,
        }
    }
}
</script>

<style scoped>
    .header__menu{
        display: none;
    }
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
        border-radius: 5px;

        display: flex;
        justify-content: center;
        align-items: center;

        font-family: "Oswald", sans-serif;
        font-size: 1rem;
        font-weight: lighter;
        letter-spacing: 0.15rem;
    }


    .burgerMenu-enter-active,
    .burgerMenu-leave-active{
        transition: all 0.4s ease;
    }
    .burgerMenu-enter-from,
    .burgerMenu-leave-to{
        transform: translateX(100%);
    }
    /* Планшеты и ноутбуки */
    @media screen and (max-width: 1439px) and (min-width: 1024px){
        .header__head{
            margin: 0 50px;
        }
        .head__nav ul{
            gap: 4rem;
        }
        .headerBtn{
            padding: 0 45px;
        }
    }
    @media screen and (max-width: 1023px) and (min-width: 825px){
        .header__head{
            margin: 0 75px;
        }
        .head__nav ul{
            gap: 2rem;
        }
        .headerBtn{
            padding: 0 45px;
        }
    }
    @media screen and (max-width: 824px) and (min-width: 430px){
        .header__head{
            justify-content: space-between;
            margin: 0 75px;
        }
        .head__logo {
            width: 35%;
            height: 100%;
        }
        .header__menu{
            display: block;
            width: 50px;
            height: 50px;
        }
        .header__menu img {
            width: 100%;
            height: 100%;
            object-fit: contain;

            cursor: pointer;
        }
        .head__search,
        .head__nav,
        .head__login{
            display: none;
        }
        .burgerMenu{
            position: fixed;
            top: 0;
            right: 0;
            width: 50%;
            height: 100vh;
            z-index: 8;
            background: #0B0A0F;
            color: white;
            display: flex;
            justify-content: center;
            align-items: flex-start;
        }
        .burgerMenu ul{
            list-style: none;
            text-align: center;

            font-family: 'Montserrat',sans-serif;
            font-style: normal;
            font-weight: 200;
            font-size: 24px;
            line-height: 29px;
            letter-spacing: 0.065em;

            margin-top: 10%;
        }
        .burgerMenu li{
            margin: 20% 0;
        }
        .burgerMenuExit{
            position: absolute;
            top: 0;
            right: 0;
            margin: 2.5%;
            cursor: pointer;
        }
    }
    /* Телефоны */
    @media screen and (max-width: 429px){
        .header__head{
            justify-content: space-between;
            margin: 0 20px;
        }
        .head__logo {
            width: 35%;
            height: 100%;
        }
        .header__menu{
            display: block;
            width: 50px;
            height: 50px;
        }
        .header__menu img {
            width: 100%;
            height: 100%;
            object-fit: contain;

            cursor: pointer;
        }
        .head__nav,
        .head__search,
        .head__login{
            display: none;
        }
        .burgerMenu{
            position: fixed;
            top: 0;
            right: 0;
            width: 100%;
            height: 100vh;
            z-index: 8;
            background: #0B0A0F;
            color: white;
            display: flex;
            justify-content: center;
            align-items: flex-start;
        }
        .burgerMenu ul{
            list-style: none;
            text-align: center;

            font-family: 'Montserrat',sans-serif;
            font-style: normal;
            font-weight: 200;
            font-size: 24px;
            line-height: 29px;
            letter-spacing: 0.065em;

            margin-top: 10%;
        }
        .burgerMenu li{
            margin: 20% 0;
        }
        .burgerMenuExit{
            position: absolute;
            top: 0;
            right: 0;
            margin: 2.5%;
            cursor: pointer;
        }
    }
</style>
