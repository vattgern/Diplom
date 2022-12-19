<template>
    <footer>
        <div class="footer-up">
            <ul>
                <li>
                    <figure class="logo">
                        <img :src="'./img/LogoFull.png'" alt="">
                    </figure>
                </li>
                <li>Главная</li>
                <li>Каталог</li>
                <li>Форумы</li>
                <li>Вход</li>
                <li>Обратная связь</li>
            </ul>
        </div>
        <ul class="something">
            <li>Политика конфиденциальности</li>

            <li>©2023 Все права защищены.</li>
        </ul>
    </footer>
</template>

<script>
export default {
    name: "FooterComponent"
}
</script>

<style scoped>
    footer{
        margin-top: 5%;
        margin-left: 175px;
        margin-right: 175px;
        width: 80%;
        height: 30vh;
        color: white;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
    }
    footer ul {
        list-style: none;
        font-family: 'Montserrat', sans-serif;
        font-style: normal;
        font-weight: lighter;
        font-size: 20px;
        line-height: 29px;
        letter-spacing: 0.13em;
        text-align: center;
    }
    footer ul li{
        cursor: pointer;
    }
    .footer-up{
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        border-bottom: 2px #FF7E00 solid;
    }
    .footer-up ul{
        width: 100%;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
    }
    .something{
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-bottom: .5%;
    }
    .something li:first-child{
        margin-top: .5%;
        color: rgba(255, 255, 255, 0.75);
        text-decoration: #FF7E00;
    }
    .something li:last-child{
        margin-top: 2%;
        margin-bottom: .5%;
    }
    @media screen and (min-width: 1024px) and (max-width: 1365px){
        footer{
            margin-top: 5%;
            margin-left: 75px;
            margin-right: 75px;
            width: 85%;
            height: 30vh;
        }
    }
    @media screen and (min-width: 430px) and (max-width: 1023px) {
        footer{
            margin-top: 5%;
            margin-left: 75px;
            margin-right: 75px;
            width: 80%;
            height: 60vh;
        }
        .footer-up ul{
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
        }
        footer ul li{
            cursor: pointer;
            margin: 2.5% 0;
        }
    }
    @media screen and (max-width: 429px){
        footer{
            margin-top: 5%;
            margin-left: 20px;
            margin-right: 20px;
            width: 90%;
            height: 60vh;
        }
        .footer-up ul{
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
        }
        footer ul li{
            cursor: pointer;
            margin: 2.5% 0;
        }
    }
</style>
