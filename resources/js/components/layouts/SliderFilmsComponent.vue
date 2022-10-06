<template>
    <div class="head__main">

        <div class="head__content">
            <div class="head__content__left">
                <div class="head__content__title">
                    <h1> {{ this.films[0].name }} </h1>
                    <span class="head__content__text">
                        <p class="years"> {{ this.films[0].yearBegin }} - {{ this.films[0].yearEnd }} </p>
                        |
                        <p class="rating"> {{ this.films[0].rating }} </p>
                    </span>
                    <p class="head__content__desc">
                        {{ this.films[0].description }}
                    </p>
                </div>
            </div>
            <div class="head__content__right"></div>
        </div>
        <!--     Здесь будут менять постеры       -->
        <div class="head__shadow"></div>
        <div class="head__back">
            <img :src="'../img/postersSlider/GOT.png'" alt="">
        </div>
    </div>
</template>

<script>
export default {
    name: "SliderFilmsComponent",
    data(){
        return {
            films: [
                {
                    name: 'Игра престолов',
                    yearBegin: 2011,
                    yearEnd: 2019,
                    rating: '18+',
                    description: 'К концу подходит время благоденствия, и лето, длившееся почти десятилетие, угасает. ' +
                        'Вокруг средоточия власти Семи королевств, Железного трона, зреет заговор, и в это непростое время король ' +
                        'решает искать поддержки у друга юности Эддарда Старка',
                    imgSrc: '../img/postersSlider/GOT.png'
                },
                {
                    name: 'Дом дракона',
                    yearBegin: 2022,
                    yearEnd: null,
                    rating: '18+',
                    description: 'Долгожданный приквел легендарного сериала «Игра престолов». \n' +
                        'В основу «Дома Дракона» лег первый том книги Джорджа Р.Р. Мартина «Пламя и кровь», \n' +
                        'где раскрывается история династии Таргариенов. В частности, семейство ввязывается в \n' +
                        'жестокую гражданскую войну, которая получила название «Танец драконов». Автор оригинальной книги Джордж Мартин описывает сериал\n' +
                        ' «Дом Дракона» как «шекспировскую трагедию», где нет однозначно положительных героев. \n' +
                        'То есть все в лучших традициях невероятной вселенной «Игры престолов»!',
                    imgSrc: '../img/postersSlider/HOD.png'
                },
                {
                    name: 'Ходячие мертвецы',
                    yearBegin: 2010,
                    yearEnd: 2022,
                    rating: '18+',
                    description: 'Зомби-эпидемия захлестнула планету. \n' +
                        'Шериф Рик Граймс путешествует с семьей и небольшой группой выживших в поисках безопасного места. \n' +
                        'Но постоянный страх смерти каждый день приносит тяжелые потери, заставляя товарищей \n' +
                        'по несчастью чувствовать глубины человеческой жестокости. \n' +
                        'Рик пытается спасти близких и понимает, что всепоглощающий страх людей может быть \n' +
                        'опаснее ходячих мертвецов.',
                    imgSrc: '../img/postersSlider/GOT.jpg'
                },
                {
                    name: 'Последняя дуэль',
                    yearBegin: 2021,
                    yearEnd: null,
                    rating: '18+',
                    description: 'Франция, конец XIV века. Отношения между рыцарем Жаном де Карружем и его соратником и соседом ' +
                        'Жаком Ле Гри постепенно портятся, и дело доходит до неразрешимого конфликта. Оскорблённый Карруж обращается за ' +
                        'помощью к королю Франции Карлу VI, и тот постановляет — противники должны решить спор в смертельной дуэли.',
                    imgSrc: '../img/postersSlider/TLD.jpg'
                },
                {
                    name: 'Криминальное чтиво',
                    yearBegin: 1994,
                    yearEnd: null,
                    rating: '18+',
                    description: 'Двое бандитов Винсент Вега и Джулс Винфилд ведут философские беседы в перерывах между разборками и ' +
                        'решением проблем с должниками криминального босса Марселласа Уоллеса.\n' +
                        '\n' +
                        'В первой истории Винсент проводит незабываемый вечер с женой Марселласа Мией. ' +
                        'Во второй рассказывается о боксёре Бутче Кулидже, купленном Уоллесом, чтобы сдать бой. ' +
                        'В третьей истории Винсент и Джулс по нелепой случайности попадают в неприятности.',
                    imgSrc: '../img/postersSlider/CX.jpg'
                }
            ],
        }
    },
    mounted() {
        console.log(this.films)
    },
    methods:{
    }
}
</script>

<style scoped>
    .head__main{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    .head__back{
        width: 100%;
        height: 100%;
        position: relative;
        z-index: 2;
    }
    .head__back img{
        width: 100%;
        height: 100%;
        object-fit: fill;
        object-position: center;
    }
    .head__shadow{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(9, 26, 70, 0.25);
        z-index: 3;
    }
    .head__content{
        position: absolute;
        bottom: 7.5%;
        left: 0;
        z-index: 4;
        width: 100%;
        height: 50vh;
        border: 2px red solid;
        background: transparent;
    }
    .head__content__left{
        width: 50%;
        height: 100%;
        border: 2px white solid;
        color: white;
        font-family: sans-serif;
    }
</style>
