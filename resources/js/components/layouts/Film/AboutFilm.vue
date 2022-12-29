<template>
    <section class="about-film">
        <div class="about-film-title">
            <h2>Игра Престолов</h2>
        </div>
        <div class="about-film-body">
            <div class="about-film-poster">
                <img src="" alt="">
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
                </div>
                <hr>
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
        margin-top: 46vh;
        width: 100%;
        border: 2px red solid;
        display: flex;
        flex-direction: column;
        align-items: center;
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
</style>
