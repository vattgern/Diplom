<template>
    <section class="about-film">
        <div class="about-film-title">
            <h2>Игра Престолов</h2>
        </div>
        <div class="about-film-body">
            <div class="about-film-poster">
                <img :src="'/img/popular/got.png'" alt="">
                <button>Добавить в избранное</button>
                <button>Форумы</button>
            </div>
            <div class="about-film-info">
                <hr>
                <div class="about-film-information">
                    <div class="rating">
                        <div class="rating-img"></div>
                        <div class="rating-count">
                            <p>4.7</p>
                        </div>
                    </div>
                    <p>PG-13</p>
                    <p>8 Сезонов</p>
                    <p>2010</p>
                </div>
                <div class="about-film-members">
                    <div class="details">
                        <div class="details-title">
                            <h3>Детали</h3>
                        </div>
                        <div class="details-body">
                            <ul>
                                <li><strong>Жанр:</strong>Экшн, Фентези, Драма</li>
                                <li><strong>Страна:</strong>США</li>
                                <li><strong>Режиссер:</strong>Алан Тейлор</li>
                                <li><strong>Сценарист:</strong>Джордж Мартин</li>
                            </ul>
                        </div>
                    </div>
                    <div class="actors">
                        <div class="actors-title">
                            <h3>Актеры</h3>
                        </div>
                        <div class="actors-body">
                            <ul>
                                <li>
                                    <img src="" alt="">
                                    <p>Эмилия Кларк</p>
                                </li>
                                <li>
                                    <img src="" alt="">
                                    <p>Кит Харингтон</p>
                                </li>
                                <li>
                                    <img src="" alt="">
                                    <p>Кит Харингтон</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="gallery">
                        <div class="trailer"></div>
                        <div class="photo"></div>
                        <div class="photo"></div>
                    </div>
                </div>
                <hr>
                <div class="description">
                    <div class="description-title">
                        <h3>Описание</h3>
                    </div>
                    <div class="description-body">
                        <p>
                            К концу подходит время благоденствия, и лето, длившееся почти десятилетие, угасает.
                            Вокруг средоточия власти Семи королевств, Железного трона, зреет заговор, и в это
                            непростое время король решает искать поддержки у друга юности Эддарда Старка.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {

    }
</script>

<style scoped>
    .about-film{
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        position: relative;
        bottom: 20vh;
        color: white;
    }
    .about-film-title{
        width: 80%;
        border-bottom: 2px #FF7E00 solid;
    }
    .about-film-title h2{
        font-family: "Oswald", sans-serif;
        font-size: 4vw;
        color: white;
    }
    .about-film-body{
        width: 80%;
        display: flex;
        flex-direction: row;
    }
    /* Зона Постера */
    .about-film-poster{
        width: 30%;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .about-film-poster > img{
        border-radius: 20px;
        margin: 2vw 0;
        width: 90%;
    }
    .about-film-poster button{
        width: 100%;
        height: 45px;
        margin: 2.5% 0;

        font-size: 1.25vw;
        font-family: "Montserrat", sans-serif;

        outline: none;
        border: 1px white solid;
        border-radius: 10px;
        background: transparent;
        color: white;
        cursor: pointer;
    }
    /*  Зона информации  */
    .about-film-info{
        width: 67.5%;
        height: 100%;
        margin-left: 2.5%;
        display: flex;
        flex-direction: column;
    }
    .about-film-info hr{
        width: 100%;
        height: 3px;

        background: #FF7E00;
        color: #FF7E00;

        border: none;
        outline: none;
    }
    .about-film-info hr:first-child{
        margin: 2vw 0;
    }
    .about-film-information{
        width: 100%;
        height: 15%;

        display: flex;
        flex-direction: row;

        font-family: 'Montserrat',sans-serif;
        font-size: 1.25vw;
    }
    .rating{
        width: 30%;
        background: #f8fafc;
    }
    .about-film-information > p{
        padding: 0 1vw;
    }
    .about-film-information > p:nth-child(3){
        border-left: 2px #FF7E00 solid;
        border-right: 2px #FF7E00 solid;
    }
    .about-film-members{
        width: 100%;
        display: flex;
        flex-direction: row;
        margin: 1vw 0;
    }
    .details{
        width: 35%;
        height: 100%;
    }
    .details-title,
    .actors-title,
    .description-title{
        font-family: "Oswald", sans-serif;
        font-size: 1.25vw;
        letter-spacing: 2px;
    }
    .details-body > ul,
    .actors-body > ul{
        list-style: none;
        font-family: "Montserrat", sans-serif;
        font-size: 1vw;
    }
    .details-body ul li strong{
        margin-right: 1vw;
    }
    .details-body ul li{
        margin: 0.75vw 0;
    }
    .actors{
        width: 35%;
        height: 100%;
    }
    .actors-body ul li{
        display: flex;
        flex-direction: row;
        align-items: center;
        margin: 1vw 0;
    }
    .actors-body ul li img{
        width: 30px;
        height: 30px;
        background: white;
        border-radius: 100px;
        margin-right: 15px;
    }
    .gallery{
        width: 30%;
        height: 100%;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        background: white;
    }
    .gallery > div{
        background: white;
    }
    .trailer{
        width: 100%;
        height: 45%;
        margin-bottom: 5%;
    }
    .photo{
        width: 45%;
        height: 50%;
    }
    .description{
        margin-top: 1vw;
        width: 100%;
    }
    .description-body p{
        font-family: "Montserrat", sans-serif;
        font-size: 1vw;
        margin-top: 1vw;
        letter-spacing: 1px;
    }
</style>
