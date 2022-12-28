<template>
    <aside>
        <div class="logo-img">
            <img :src="'./img/LogoFull.png'" alt="">
        </div>
        <div class="side-bar-links">
            <ul>
                <li @click="this.$store.state.adminRouter = 'films'">
                    <img :src="'/img/admin/film.svg'" alt="">
                    <a href="#">Фильмы</a>
                </li>
                <li @click="this.$store.state.adminRouter = 'forums'">
                    <img :src="'/img/admin/forum.svg'" alt="">
                    <a href="#">Форумы</a>
                </li>
                <li @click="this.$store.state.adminRouter = 'members'">
                    <img :src="'/img/admin/film.svg'" alt="">
                    <a href="#">Участники</a>
                </li>
                <li @click="this.$store.state.adminRouter = 'users'">
                    <img :src="'/img/admin/users.svg'" alt="">
                    <a href="#">Пользователи</a>
                </li>
                <li @click="this.$store.state.adminRouter = 'messages'">
                    <img :src="'/img/admin/messages.svg'" alt="">
                    <a href="#">Заявки</a>
                </li>
                <li @click="this.$store.state.adminRouter = 'setting'">
                    <img :src="'/img/admin/setting.svg'" alt="">
                    <a href="#">Настройки</a>
                </li>
                <li>
                    <img :src="'/img/admin/exit.svg'" alt="">
                    <a href="#">Выйти</a>
                </li>
            </ul>
        </div>
    </aside>
</template>

<script>
    export default {
        
    }
</script>

<style scoped>
    aside{
        width: 15vw;
        height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .logo-img{
        width: 100%;
        height: 10%;
    }
    .logo-img img{
        width: 100%;
        height: 100%;
        object-fit: contain;
        object-position: center;
    }
    .side-bar-links{
        width: 100%;
        height: 90%;
        display: flex;
        justify-content: center;
        align-items: flex-start;
    }
    .side-bar-links ul{
        width: 100%;
        height: 75%;
        display: flex;
        flex-direction: column;
        list-style: none;
        justify-content: space-around;
        margin: 10%;
    }
    .side-bar-links ul a{
        font-family: "Montserrat", sans-serif;
        font-size: 20px;
        color: white;
        text-decoration: none;
    }
    .side-bar-links ul li{
        display: flex;
        flex-direction: row;
        gap: 20px;
        align-items: center;
    }
    .side-bar-links ul li img{
        height: 20px;
        object-fit: cover;
    }
</style>