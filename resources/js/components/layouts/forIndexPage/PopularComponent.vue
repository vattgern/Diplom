<template>
    <section class="popular">
        <div class="popular-header">
            <h2>Популярное</h2>
        </div>
        <div class="popular-body">
            <router-link :to="{name: 'film', params: { id: 1}}" class="popular-card" v-for="card in popular">
                <figure class="popular-card-img">
                    <img :src="card.img" alt="">
                </figure>
                <div class="popular-card-title">
                    <p>{{ card.title }}</p>
                </div>
                <div class="popular-card-info">
                    <div class="year">
                        <p>{{ card.year }}</p>
                    </div>
                    <div class="rating">
                        <img :src="'./img/icons/star.svg'" alt="">
                        <div class="rating-count">
                            <p>{{ card.rating }}</p>
                        </div>
                    </div>
                </div>
            </router-link>
        </div>
        <div class="popular-back-hover"></div>
    </section>
</template>

<script>
export default {
    name: "PopularComponent",
    data(){
        return {
            popular: [
                {
                    title : 'Дом Дракона',
                    year: 2022,
                    rating: 9.0,
                    img: './img/popular/hod.png'
                },
                {
                    title : 'Игра Престолов',
                    year: 2011,
                    rating: 9.5,
                    img: './img/popular/got.png'
                },
                {
                    title : 'Последняя дуэль',
                    year: 2021,
                    rating: 7.4,
                    img: './img/popular/ld.png'
                },
                {
                    title : 'Ходячие Мертвецы',
                    year: 2010,
                    rating: 8.6,
                    img: './img/popular/twd.png'
                },
                {
                    title : 'Криминальное чтиво',
                    year: 1994,
                    rating: 9.1,
                    img: './img/popular/ch.png'
                },
            ]
        }
    },
}
</script>

<style scoped>
    .popular{
        width: 100%;
        height: 90vh;
        color: white;
        position: relative;
    }
    .popular-header,
    .popular-body{
        position: relative;
        z-index: 4;
    }
    .popular-header{
        width: 100%;
        height: 25%;
        display: flex;
        align-items: flex-end;
    }
    .popular-header h2{
        font-family: 'Oswald', sans-serif;
        font-weight: bold;
        font-size: 48px;
        letter-spacing: 10px;
        margin-left: 175px;
    }
    .popular-body{
        margin: 0 9%;
        width: 82%;
        height: 75%;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
    }
    .popular-card{
        width: 17.5%;
        height: 70%;
        display: flex;
        flex-direction: column;
        cursor: pointer;
        text-decoration: none;
        color: white;
    }
    .popular-card-img{
        width: 100%;
        height: 85%;
    }
    .popular-card-img img{
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        border-radius: 10px;
    }
    .popular-card-title{
        width: 100%;
        height: 10%;
        text-align: center;
    }
    .popular-card-title p{
        font-family: "Oswald", sans-serif;
        font-size: 20px;
        font-weight: 400;
        letter-spacing: 2px;
    }
    .popular-card-info{
        width: 100%;
        height: 5%;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
    }
    .year{
        font-family: "Oswald", sans-serif;
        font-size: 20px;
        font-weight: 400;
        letter-spacing: 2px;
        color: #FF7F00;
    }
    .rating{
        display: flex;
        flex-direction: row;
        gap: 5px;
        align-items: center;
    }
    .rating-count{
        font-family: "Oswald", sans-serif;
        font-size: 20px;
        font-weight: bold;
        letter-spacing: 2px;
    }
    .popular-back-hover{
        position: absolute;
        z-index: 2;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 126, 0, 0.45);
        transition: opacity 0.4s ease-in;
        opacity: 0;
    }
    @media screen and (min-width: 1024px) and (max-width: 1365px){
        .popular{
            height: 75vh;
        }
        .popular-header h2{
            margin-left: 75px;
            font-size: 36px;
            letter-spacing: 0.5rem;
        }
        .popular-body{
            margin: 0 7.5%;
            width: 85%;
            height: 85%;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
        }
        .popular-card{
            width: 20%;
            height: 70%;
            display: flex;
            flex-direction: column;
            cursor: pointer;
            margin: 0 1%;
        }
        .popular-card-title p{
            font-size: 14px;
        }
        .year,
        .rating-count{
            font-size: 16px;
        }
    }
    @media screen and (min-width: 430px) and (max-width:1023px){
        .popular{
            height: 75vh;
        }
        .popular-header{
            height: 15%;
        }
        .popular-header h2{
            margin-left: 75px;
            font-size: 36px;
            letter-spacing: 0.5rem;
        }
        .popular-body{
            margin: 0 10%;
            width: 80%;
            height: 85%;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
        }
        .popular-card{
            width: 20%;
            height: 70%;
            display: flex;
            flex-direction: column;
            cursor: pointer;
            margin: 0 .5%;
        }
        .popular-card-img{
            width: 100%;
            height: 65%;
        }
        .popular-card-title{
            height: 20%;
        }
        .popular-card-title p{
            font-size: 18px;
        }
        .popular-card-info{
            height: 15%;
        }
        .year,
        .rating-count{
            font-size: 16px;
        }
    }
    @media screen and (max-width:429px) {
        .popular{
            height: 100%;
        }
        .popular-header{
            height: 10%;
            display: flex;
            align-items: flex-end;
        }
        .popular-header h2{
            font-size: 32px;
            letter-spacing: 5px;
            margin-left: 20px;
        }
        .popular-body{
            width: 90%;
            height: 90%;
            margin: 0 5%;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .popular-card{
            width: 45%;
            height: 40%;
            display: flex;
            flex-direction: column;
            cursor: pointer;
            margin: 2.5% 0;
        }
        .popular-card-title p{
            font-size: 18px;
        }
        .year,
        .rating-count{
            font-size: 18px;
        }
    }
</style>
