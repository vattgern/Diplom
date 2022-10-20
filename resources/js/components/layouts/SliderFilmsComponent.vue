<template>
    <div class="head__main">

        <div class="head__content">
            <div class="head__content__left">
                <div class="head__content__title">
                    <h1> {{ this.films[this.sliderIndex].name }} </h1>
                </div>
                <div class="head__content__text">
                    <span class="years">
                        {{ this.films[this.sliderIndex].yearBegin }} - {{ this.films[this.sliderIndex].yearEnd }}
                    </span>
                    |
                    <span class="rating"> {{ this.films[this.sliderIndex].rating }} </span>
                    <Transition name="More">
                        <span v-show="!descShow"
                              v-on:click="this.descShow = true"
                              class="showDesc"> Подробнее >
                        </span>
                    </Transition>
                </div>
                <div class="head__content__desc">
                    <Transition name="descAnim">
                        <p v-show="descShow">{{ this.films[this.sliderIndex].description }}</p>
                    </Transition>
                    <Transition name="More">
                        <div v-show="descShow"
                             v-on:click="this.descShow = false"
                             class="desc__btn">
                            <p>Скрыть</p>
                        </div>
                    </Transition>
                </div>
            </div>
            <div class="head__content__right">
                <div class="panel">
                    <div class="dots">
                        <div v-on:click="sliderPoint(0)" :class="this.sliderIndex === 0 ? 'dot__active' : 'dot'"></div>
                        <div v-on:click="sliderPoint(1)" :class="this.sliderIndex === 1 ? 'dot__active' : 'dot'"></div>
                        <div v-on:click="sliderPoint(2)" :class="this.sliderIndex === 2 ? 'dot__active' : 'dot'"></div>
                        <div v-on:click="sliderPoint(3)" :class="this.sliderIndex === 3 ? 'dot__active' : 'dot'"></div>
                        <div v-on:click="sliderPoint(4)" :class="this.sliderIndex === 4 ? 'dot__active' : 'dot'"></div>
                    </div>
                    <div class="controls">
                        <div class="left" v-on:click="sliderLeft">
                            <img :src="'../img/Left.svg'" alt="">
                        </div>
                        <div class="right" v-on:click="sliderRight">
                            <img :src="'../img/Right.svg'" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--     Здесь будут менять постеры       -->
        <div class="head__shadow"></div>
        <div class="head__back">
            <img :src="this.films[this.sliderIndex].imgSrc" alt="">
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
                    name: 'Игра Престолов',
                    yearBegin: 2011,
                    yearEnd: 2019,
                    rating: '18+',
                    description: 'К концу подходит время благоденствия, и лето, длившееся почти десятилетие, угасает. ' +
                        'Вокруг средоточия власти Семи королевств, Железного трона, зреет заговор, и в это непростое время король ' +
                        'решает искать поддержки у друга юности Эддарда Старка',
                    imgSrc: '../img/postersSlider/GOT.png'
                },
                {
                    name: 'Дом Дракона',
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
                    name: 'Ходячие Мертвецы',
                    yearBegin: 2010,
                    yearEnd: 2022,
                    rating: '18+',
                    description: 'Зомби-эпидемия захлестнула планету. \n' +
                        'Шериф Рик Граймс путешествует с семьей и небольшой группой выживших в поисках безопасного места. \n' +
                        'Но постоянный страх смерти каждый день приносит тяжелые потери, заставляя товарищей \n' +
                        'по несчастью чувствовать глубины человеческой жестокости. \n' +
                        'Рик пытается спасти близких и понимает, что всепоглощающий страх людей может быть \n' +
                        'опаснее ходячих мертвецов.',
                    imgSrc: '../img/postersSlider/TWD.jpg'
                },
                {
                    name: 'Последняя Дуэль',
                    yearBegin: 2021,
                    yearEnd: null,
                    rating: '18+',
                    description: 'Франция, конец XIV века. Отношения между рыцарем Жаном де Карружем и его соратником и соседом ' +
                        'Жаком Ле Гри постепенно портятся, и дело доходит до неразрешимого конфликта. Оскорблённый Карруж обращается за ' +
                        'помощью к королю Франции Карлу VI, и тот постановляет — противники должны решить спор в смертельной дуэли.',
                    imgSrc: '../img/postersSlider/TLD.jpg'
                },
                {
                    name: 'Криминальное Чтиво',
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
            sliderIndex: 0,
            descShow: false,
        }
    },
    mounted() {
        console.log(this.films)
    },
    methods:{
        sliderLeft(){
            if(this.sliderIndex === 0){
                this.sliderIndex = 4;
            } else {
                this.sliderIndex -= 1;
            }
        },
        sliderRight(){
            if(this.sliderIndex === 4){
                this.sliderIndex = 0;
            } else {
                this.sliderIndex += 1;
            }
        },
        sliderPoint(id){
            this.sliderIndex = id;
        },
        backChange(){
            console.log('changed');
        }
    },
    watch: {
        sliderIndex(){
            // Пока странно работает
            // setTimeout(()=>{
            //     this.sliderIndex++;
            // },2000);
        }
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
        object-fit: cover;
        object-position: center;
    }
    .head__shadow{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        /*background: rgba(9, 26, 70, 0.4);*/
        background: rgba(0, 0, 0, 0.4);
        z-index: 3;
    }
    .head__content{
        position: absolute;
        bottom: 7.5%;
        left: 0;
        z-index: 4;

        width: 100%;
        height: 50vh;
        background: transparent;

        display: flex;
        flex-direction: row;
    }
    .head__content__left{
        width: 50%;
        height: 100%;
        color: white;
    }
    .head__content__left > *{
        margin-left: 175px;
    }
    .head__content__title h1{
        font-family: 'Oswald', sans-serif;
        font-size: 64px;
        font-weight: 700;
        letter-spacing: 0.5rem;
    }
    .head__content__text{
        font-family: 'Montserrat', sans-serif;
        font-size: 24px;
        letter-spacing: 0.5rem;
        font-weight: bold;
    }
    .rating{
        color: #FF7E00;
    }
    .showDesc{
        color: white;
        letter-spacing: 0.25rem;
        font-size: 18px;
        cursor: pointer;
    }
    .More-enter-active,
    .More-leave-active{
        opacity: 0;
        transition: all 0.2s ease-in;
    }
    .More-enter-to{
        opacity: 1;
        transition: all 0.2s ease-in;
    }
    .descAnim-enter-active,
    .descAnim-leave-active{
        transition: all 0.3s ease-in;
        opacity: 0;
    }
    .descAnim-enter-active{
        animation: showText 1s ease;
    }
    .descAnim-leave-active{
        animation: showText 1s ease reverse;
    }
    @keyframes showText {
        0%{
            transform: translateY(200px);
            opacity: 0;
        }
        75%{
            transform: translateY(-10px);
            opacity: 1;
        }
        100%{
            transform: translateY(0);
            opacity: 1;
        }
    }
    .head__content__desc{
        margin: 2.5% 175px;

        font-family: 'Montserrat', sans-serif;
        font-size: 20px;
        letter-spacing: 0.15rem;
        font-weight: lighter;
        line-height: 1.75rem;
    }
    .desc__btn{
        margin: 2.5% 0;
        width: 25%;
        color: #FF7E00;
        cursor: pointer;
    }
    .head__content__right{
        width: 50%;
        height: 100%;

        display: flex;
        justify-content: end;
        flex-direction: column;
    }
    .panel{
        width: 100%;
        height: 40%;

        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    .dots{
        width: 200px;
        height: 50%;

        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: row;
        gap: 1rem;
    }
    .dots > *{
        cursor: pointer;
        transition: all 0.2s ease-in;
    }
    .dot{
        width: 15px;
        height: 15px;
        background-color: white;
        border-radius: 50%;
    }
    .dot:hover{
        transform: scale(1.25);
    }
    .dot__active{
        width: 35px;
        height: 35px;
        background-color: #FF7E00;
        border-radius: 50%;
    }
    .controls{
        width: 200px;
        height: 50%;

        display: flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
    }
    .controls > *{
        cursor: pointer;
        transition: all 0.2s ease-in;
    }
    .controls > *:hover{
        transform: scale(1.25);
    }
</style>
