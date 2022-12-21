<template>
    <div class="film-card">
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
        <div class="film-card-shadow"></div>
    </div>
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
        width: 250px;
        height: 350px;

        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-end;

        color: white;
        position: relative;
        background-image: url('./img/popular/hod.png');
        background-repeat: no-repeat;
    }
    .film-card-shadow{
        position: absolute;
        top: 0%;
        left: 0;
        height: 100%;
        width: 100%;
        background-color: rgba(0, 0, 0, 0.4);
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
        font-size: 24px;
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
        font-size: 16px;
        font-weight: bold;
        letter-spacing: 0.2rem;
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
        font-size: 16px;
        font-weight: bold;
    }
</style>