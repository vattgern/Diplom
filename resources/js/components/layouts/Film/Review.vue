<template>
    <div class="review-list">
        <div class="review-list-title">
            <h2>Отзывы</h2>
        </div>
        <div class="review-list-body">
            <div class="review-list-total">
                <div class="review-list-total-img">
                    <p>9.0</p>
                    <p>Общий рейтинг</p>
                </div>
                <div class="review-list-total-text">
                    <ul>
                        <li><div><p>10</p></div></li>
                        <li><div><p>9</p></div></li>
                        <li><div><p>8</p></div></li>
                        <li><div><p>7</p></div></li>
                        <li><div><p>6</p></div></li>
                        <li><div><p>5</p></div></li>
                        <li><div><p>4</p></div></li>
                        <li><div><p>3</p></div></li>
                        <li><div><p>2</p></div></li>
                        <li><div><p>1</p></div></li>
                    </ul>
                </div>
            </div>
            <div class="review-list-users">
                <div class="review-list-user">
                    <div class="review-user-title">
                        <div class="review-user">
                            <img src="" alt="">
                            <p>Гость</p>
                        </div>
                        <div class="review-user-count">
                            <p>5</p>
                        </div>
                        <div class="review-user-data">
                            <p>26.11.2003</p>
                        </div>
                    </div>
                    <div class="review-user-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut
                            aliquip ex ea commodo consequat. Duis aute irure
                            dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur
                            sint occaecat cupidatat non proident, sunt in culpa
                            qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                </div>
                <div class="review-list-user">
                    <div class="review-user-title">
                        <div class="review-user">
                            <img src="" alt="">
                            <p>Гость</p>
                        </div>
                        <div class="review-user-count">
                            <p>5</p>
                        </div>
                        <div class="review-user-data">
                            <p>26.11.2003</p>
                        </div>
                    </div>
                    <div class="review-user-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut
                            aliquip ex ea commodo consequat. Duis aute irure
                            dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur
                            sint occaecat cupidatat non proident, sunt in culpa
                            qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Review"
}
</script>

<style scoped>
    .review-list{
        margin-top: 5vw;
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        color: white;
    }
    .review-list-title{
        width: 80%;
        height: 15%;

        color: white;
        font-family: "Oswald", sans-serif;
        font-size: 2vw;
        letter-spacing: 2px;
        margin-bottom: 2vw;
    }
    .review-list-body{
        display: flex;
        flex-direction: row;
        height: 85%;
        width: 80%;
    }
    .review-list-total{
        width: 20%;
        height: 100%;

        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .review-list-total-img{
        width: 175px;
        height: 175px;
        border: 10px #FF7E00 solid;
        border-radius: 50%;
        background: transparent;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        font-family: "Oswald", sans-serif;
    }
    .review-list-total-img p:nth-child(1){
        font-size: 3vw;
    }
    .review-list-total-img p:nth-child(2){
        font-size: 1vw;
    }
    .review-list-total-text{
        width: 100%;
        color: white;
    }
    .review-list-total-text ul {
        list-style: none;
    }
    .review-list-total-text ul li{
        margin: 1vw 0;
        background: #737373;
        border-radius: 5px;
    }
    .review-list-total-text ul div{
        width: 50%;
        background: #FF7E00;
        border-radius: 5px;
        display: flex;
        justify-content: flex-end;

        font-family: "Montserrat", sans-serif;
    }
    .review-list-total-text ul div p{
        margin-right: 5%;
    }
    .review-list-users{
        width: 80%;
        height: 100%;

        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .review-list-user{
        border: 2px #FF7E00 solid;
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 80%;
        margin: 2vw 0;
    }
    .review-user-title{
        width: 100%;
        height: 15%;
        display: flex;
        flex-direction: row;
        align-items: center;
        padding: 1.5vw;
    }
    .review-user{
        display: flex;
        align-items: center;
        flex-direction: row;

        font-family: "Oswald", sans-serif;
        font-size: 1vw;
        letter-spacing: 1px;
    }
    .review-user img{
        height: 30px;
        width: 30px;
        border-radius: 50%;
        background: white;
        margin-right: 1vw;
    }
    .review-user-count{
        width: 30px;
        height: 30px;
        margin-left: 1vw;
        border-radius: 50%;
        background: #FF7E00;
        display: flex;
        justify-content: center;
        align-items: center;

        font-family: "Oswald", sans-serif;
    }
    .review-user-data{
        font-family: "Oswald", sans-serif;
        margin-left: 1vw;
    }
    .review-user-body{
        height: 85%;
        width: 100%;
        margin: 1vw 0;
    }
    .review-user-body p{
        width: 90%;
        margin-left: 2.5%;
        font-family: "Montserrat", sans-serif;
        font-size: 1vw;
        letter-spacing: 1px;
        line-height: 1.5vw;
    }

    @media screen and (max-width: 1024px) and (min-width: 769px){
        .review-list-title{
            width: 90%;
            font-size: 3vw;
        }
        .review-list-body{
            width: 90%;
        }
        .review-list-total-img p:nth-child(1){
            font-size: 6vw;
        }
        .review-list-total-img p:nth-child(2){
            font-size: 1.5vw;
        }
    }
    @media screen and (max-width: 768px) and (min-width: 430px){
        .review-list-title{
            width: 80%;
            font-size: 3vw;
        }
        .review-list-body{
            width: 80%;
        }
        .review-list-total-img p:nth-child(1){
            font-size: 6vw;
        }
        .review-list-total-img p:nth-child(2){
            font-size: 1.5vw;
        }
        .review-list-user{
            width: 85%;
        }
    }
    @media screen and (max-width: 750px){
        .review-list{
            height: 100%;
        }
        .review-list-title{
            width: 90%;
            font-size: 4vw;
        }
        .review-list-body{
            width: 80%;
            flex-direction: column;
            align-items: center;
        }
        .review-list-total-text{
            width: 75%;
            color: white;
        }
        .review-list-total-text ul li{
            margin: 3vw 0;
        }
        .review-list-total{
            width: 90%;
            height: 100%;

            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .review-list-total-img p:nth-child(1){
            font-size: 15vw;
        }
        .review-list-total-img p:nth-child(2){
            font-size: 3.75vw;
        }
        .review-list-users{
            width: 100%;
        }
        .review-list-user{
            border: 2px #FF7E00 solid;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            margin: 2vw 0;
        }
        .review-user{
            font-size: 4vw;
        }
        .review-user-body p{
            width: 90%;
            margin-left: 2.5%;
            font-family: "Montserrat", sans-serif;
            font-size: 3vw;
            line-height: 2.25vh;
        }
    }
</style>
