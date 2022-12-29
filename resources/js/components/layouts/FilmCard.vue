<template>
    <router-link :to="{name: 'film', params: { id: 1}}" v-if="this.$store.state.showMode === 'cards'"  class="film-card">
        <div class="film-card-img">
            <img :src="'./img/popular/hod.png'" alt="">
        </div>
        <div class="film-card-title">
            <p>Дом Дракона </p>
        </div>
        <div class="film-card-info">
            <div class="year">
                <p>2022</p>
            </div>
            <div class="rating">
                <img :src="'./img/icons/star.svg'" alt="">
                <div class="rating-count">
                    <p>9.0</p>
                </div>
            </div>
        </div>
    </router-link>
    <router-link :to="{ name: 'film', params: { id: 1} }" class="film-list" v-if="this.$store.state.showMode === 'lists'">
        <div class="film-list-img">
            <img :src="'./img/popular/hod.png'" alt="">
        </div>
        <div class="film-list-info">
            <div class="film-list-title">
                <h2>Дом Дракона</h2>
                <div class="rating">
                    <img :src="'./img/icons/star.svg'" alt="">
                    <div class="rating-count">
                        <p>9.0</p>
                    </div>
                </div>
            </div>
            <p class="film-list-year">Год: <span>2010-2022</span></p>
            <p class="film-list-age">Возраст: <span>18+</span></p>
            <p class="film-list-genre">Жанр: <span>Ужасы, Триллер, Драма</span></p>
            <p class="film-list-description">
                Зомби-эпидемия захлестнула планету. Шериф Рик Граймс путешествует с семьей
                и небольшой группой выживших в поисках безопасного места. Но постоянный страх
                смерти каждый день приносит тяжелые потери, заставляя товарищей по несчастью
                чувствовать глубины человеческой жестокости. Рик пытается спасти близких и понимает,
                что всепоглощающий страх людей может быть опаснее ходячих мертвецов.
            </p>
            <div class="film-list-more">
                <a href="#">Подробнее</a>
                <img :src="'/img/icons/more-star.svg'" alt="">
            </div>
        </div>
    </router-link>
</template>

<script>
export default {
    setup () {


        return {}
    }
}
</script>

<style scoped>
    .film-card{
        /* width: 250px;
        height: 400px; */
        width: 100%;
        height: 100%;

        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-end;

        text-decoration: none;
        color: white;
    }
    .film-card-img{
        width: 100%;
        height: 80%;
    }
    .film-card-img img{
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        border-radius: 15px;
    }
    .film-card-title{
        width: 100%;
        height: 10%;
        text-align: center;
        position: relative;
        z-index: 4;
    }
    .film-card-title p{
        font-family: "Oswald",sans-serif;
        font-size: 1.5vw;
        letter-spacing: 0.1rem;
    }
    .film-card-info{
        width: 90%;
        height: 10%;
        display: flex;
        align-items: center;
        flex-direction: row;
        justify-content: space-between;

        position: relative;
        z-index: 4;
    }
    .year{
        font-family: "Oswald", sans-serif;
        font-size: 1.25vw;
        font-weight: bold;
        letter-spacing: 0.2rem;
        color: #FF7F00;
    }
    .rating{
        height: 100%;
        display: flex;
        align-items: center;
        flex-direction: row;
    }
    .rating img{
        width: 20px;
        height: 20px;
        object-fit: cover;
        object-position: center;
        margin-right: 5px;
    }
    .rating-count{
        font-family: "Oswald", sans-serif;
        font-size: 1.25vw;
        font-weight: bold;
    }
    /* --------------------- */
    /* list mode */
    .film-list{
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: row;

        text-decoration: none;
        color: white;
    }
    .film-list-img{
        width: 30%;
        height: 100%;
    }
    .film-list-img img{
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }
    .film-list-info{
        width: 67.5%;
        margin-left: 2.5%;
    }
    .film-list-title{
        display: flex;
        flex-direction: row;
        align-items:flex-end;

        font-family: "Oswald",sans-serif;
        font-size: 1.5vw;
        letter-spacing: 0.25rem;
    }
    .film-list-title .rating{
        margin-left: 2.5%;
        margin-bottom: 1.5%;
    }
    .film-list-year,
    .film-list-age,
    .film-list-genre{
        font-family: "Oswald", sans-serif;
        font-size: 1.25vw;
        margin: 1.5% 0;
    }
    .film-list-year span,
    .film-list-age span,
    .film-list-genre span{
        color: #FF7F00;
    }
    .film-list-description{
        font-family: "Montserrat", sans-serif;
        font-size: 1vw;
        font-weight: lighter;
        letter-spacing: 2px;
    }
    .film-list-more{
        display: none;
    }
    @media screen and (max-width: 429px){
        .film-card-title p{
            font-size: 4vw;
        }
        .rating-count{
            font-size: 3vw;
        }
        .year{
            font-size: 3vw;
        }
        .film-list-title{
            font-size: 2.5vw;
            letter-spacing: 2px;
            font-weight: 300;
        }
        .film-list-year,
        .film-list-age,
        .film-list-genre{
            font-size: 3vw;
        }
        .film-list-description{
            display: none;
        }
        .film-list-more{
            width: 100%;
            height: 30%;
            display: flex;
            flex-direction: row;
            gap: 10px;
            align-items: center;
        }
        .film-list-more a{
            text-decoration: none;
            color: #FF7E00;
            font-family: "Oswald", sans-serif;
        }
    }
</style>
