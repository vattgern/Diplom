<template>
    <div class="review">
        <div class="review-title">
            <h2>Оставьте ваш отзыв</h2>
        </div>
        <div class="review-body">
            <div class="review-estimation">
                <p>Ваша оценка</p>
                <div class="review-estimation-count">
                    <img :src="'/img/icons/Left.svg'"
                         @click="minus"
                         alt="">
                    <p>{{ reviewCount }}</p>
                    <img :src="'/img/icons/Right.svg'"
                         @click="plus"
                         alt="">
                </div>
                <button class="review-estimation-btn">Оставить отзыв</button>
            </div>
            <div class="review-form">
                <p>Ваша сообщение</p>
                <textarea placeholder="Напишите ваше мнение"></textarea>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Review",
    data(){
        return {
            reviewCount: 5,
        }
    },
    methods:{
        plus(){
            if(this.reviewCount >= 10){
                this.reviewCount = 10;
            } else {
                this.reviewCount++;
            }
        },
        minus(){
            if(this.reviewCount <= 1){
                this.reviewCount = 1;
            } else {
                this.reviewCount--;
            }
        }
    }
}
</script>

<style scoped>
    .review{
        width: 100%;
        height: 65vh;

        display: flex;
        flex-direction: column;
        align-items: center;

        color: white;
    }
    .review-title{
        height: 15%;
        width: 80%;
        font-family: "Oswald", sans-serif;
        font-size: 2vw;
    }
    .review-body{
        width: 80%;
        height: 85%;

        display: flex;
        flex-direction: row;
    }
    .review-estimation{
        height: 100%;
        width: 35%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
    }
    .review-estimation > p{
        font-family: "Oswald", sans-serif;
        font-size: 2vw;
    }
    .review-estimation-count{
        display: flex;
        flex-direction: row;
        width: 175px;
        height: 175px;
        align-items: center;
        justify-content: space-evenly;

        background: #FF7E00;
        color: white;
        border-radius: 50%;

        font-family: "Oswald", sans-serif;
        font-size: 7vw;
    }
    .review-estimation-count img {
        cursor: pointer;
    }
    .review-estimation-btn{
        outline: none;
        border: none;
        cursor: pointer;

        background: #FF7E00;
        color: white;
        font-family: "Montserrat", sans-serif;
        font-size: 1vw;

        border-radius: 5px;
        width: 10vw;
        height: 5vh;
    }
    .review-form{
        width: 65%;
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    .review-form p{
        font-family: "Oswald", sans-serif;
        font-size: 2vw;
        margin-bottom: 2vw;
    }
    .review-form textarea{
        width: 99%;
        height: 90%;

        border: 2px #FF7E00 solid;
        border-radius: 10px;
        outline: none;
        color: white;

        font-family: "Montserrat", sans-serif;
        font-size: 1vw;
        letter-spacing: 2px;

        padding: 1%;
        background: transparent;
        transition: all .4s ease-in;
        resize: none;
    }
    .review-form textarea::placeholder{
        color: rgba(255, 255, 255, 0.75);
    }
    .review-form textarea:focus{
        background: rgba(255, 126, 0, 0.25);
    }
</style>
