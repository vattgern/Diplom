<template>
    <section class="genres">
        <div class="genres-header">
            <h2>Жанры на любой вкус</h2>
        </div>
        <div class="genres-body">
            <ul class="genres-list">
                <li>ДРАМА</li>
                <li>ДЕТЕКТИВ</li>
                <li>БОЕВИК</li>
                <li>ВЕСТЕРН</li>
                <li>КОМЕДИЯ</li>
                <li>ФАНТАСТИКА</li>
                <li>ФЕНТЕЗИ</li>
                <li>БИОГРАФИЯ</li>
            </ul>
            <ul class="genres-list">
                <li>КОМЕДИЯ</li>
                <li>ФАНТАСТИКА</li>
                <li>ФЕНТЕЗИ</li>
                <li>БИОГРАФИЯ</li>
                <li>ДРАМА</li>
                <li>ДЕТЕКТИВ</li>
                <li>БОЕВИК</li>
                <li>ВЕСТЕРН</li>
            </ul>
            <ul class="genres-list">
                <li>БОЕВИК</li>
                <li>ДРАМА</li>
                <li>ДЕТЕКТИВ</li>
                <li>ФАНТАСТИКА</li>
                <li>ФЕНТЕЗИ</li>
                <li>ВЕСТЕРН</li>
                <li>КОМЕДИЯ</li>
                <li>БИОГРАФИЯ</li>
            </ul>
            <ul class="genres-list genres-list-moblie">
                <li>БОЕВИК</li>
                <li>ДРАМА</li>
                <li>ДЕТЕКТИВ</li>
                <li>ФАНТАСТИКА</li>
                <li>ФЕНТЕЗИ</li>
                <li>ВЕСТЕРН</li>
                <li>КОМЕДИЯ</li>
                <li>БИОГРАФИЯ</li>
                <li>КОМЕДИЯ</li>
                <li>ФАНТАСТИКА</li>
                <li>ФЕНТЕЗИ</li>
                <li>БИОГРАФИЯ</li>
                <li>ДРАМА</li>
                <li>ДЕТЕКТИВ</li>
                <li>БОЕВИК</li>
                <li>ВЕСТЕРН</li>
                <li>ДРАМА</li>
                <li>ДЕТЕКТИВ</li>
                <li>БОЕВИК</li>
                <li>ВЕСТЕРН</li>
                <li>КОМЕДИЯ</li>
                <li>ФАНТАСТИКА</li>
                <li>ФЕНТЕЗИ</li>
                <li>БИОГРАФИЯ</li>
            </ul>
        </div>
        <div class="genres-footer">
            <router-link :to="{ name: '' }" class="genres-btn">БОЛЬШЕ ЖАНРОВ</router-link>
        </div>
    </section>
</template>

<script>
export default {
    name: "GenreComponent"
}
</script>

<style scoped>
    .genres{
        width: 100%;
        height: 60vh;
        display: flex;
        flex-direction: column;
    }
    .genres-header{
        width: 100%;
        height: 15%;
        display: flex;
        align-items: flex-end;
    }
    .genres-header h2{
        font-family: 'Oswald', sans-serif;
        font-weight: bold;
        font-size: 48px;
        letter-spacing: 10px;
        margin-left: 175px;
        color: white;
    }
    .genres-body{
        width: 100%;
        height: 70%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-evenly;
    }
    .genres-list{
        width: 82.5%;
        list-style: none;
        color: white;
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
    }
    .genres-list-moblie{
        display: none;
    }
    .genres-list li{
        padding: .5% 2%;
        border-radius: 25px;
        margin: 0.5%;
        font-family: "Oswald", sans-serif;
        font-size: 24px;
        font-weight: bold;
        letter-spacing: 2px;
    }
    .genres-list li:nth-child(odd){
        background: #FF7E00;
        color: white;
    }
    .genres-list li:nth-child(even){
        background: white;
        color: #FF7E00;
    }
    .genres-footer{
        width: 100%;
        height: 15%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .genres-btn{
        text-decoration: none;
        color: white;

        font-family: "Oswald", sans-serif;
        font-size: 24px;
        letter-spacing: 2px;
        font-weight: bold;
        padding: 1% 2%;
        background: #FF7E00;
        border-radius: 20px;

        transition: all 0.4s ease-in-out;
    }
    .genres-btn:hover{
        background: white;
        color: #FF7E00;
    }
    @media screen and (min-width: 1024px) and (max-width: 1365px){
        .genres{
            margin-top: 5%;
        }
        .genres-header h2{
            font-size: 36px;
            letter-spacing: 0.25rem;
            margin-left: 75px;
        }
        .genres-body{
            width: 90%;
            height: 70%;
            margin: 7.5% 75px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-evenly;
        }
        .genres-list{
            width: 100%;
            list-style: none;
            color: white;
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
            flex-wrap: wrap;
            display: none;
        }
        .genres-list li{
            padding: 1% 2%;
            margin: 1% 0.5%;
            border-radius: 15px;

            font-family: "Oswald", sans-serif;
            font-size: 14px;
            font-weight: bold;
            letter-spacing: 2px;
        }
        .genres-list-moblie{
            display: flex;
        }
        .genres-btn{
            text-decoration: none;
            color: white;

            font-family: "Oswald", sans-serif;
            font-size: 20px;
            letter-spacing: 2px;
            font-weight: bold;
            padding: 1% 2%;
            background: #FF7E00;
            border-radius: 10px;

            transition: all 0.4s ease-in-out;
        }
    }
    @media screen and (min-width: 430px) and (max-width:1023px){
        .genres-header h2{
            font-size: 36px;
            letter-spacing: 0.25rem;
            margin-left: 75px;
        }
        .genres-body{
            width: 90%;
            height: 70%;
            margin: 7.5% 75px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-evenly;
        }
        .genres-list{
            width: 100%;
            list-style: none;
            color: white;
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
            flex-wrap: wrap;
            display: none;
        }
        .genres-list li{
            padding: 1% 2%;
            margin: 1% 0.5%;
            border-radius: 15px;

            font-family: "Oswald", sans-serif;
            font-size: 14px;
            font-weight: bold;
            letter-spacing: 2px;
        }
        .genres-list-moblie{
            display: flex;
            justify-content:space-evenly;
        }
        .genres-btn{
            text-decoration: none;
            color: white;

            font-family: "Oswald", sans-serif;
            font-size: 20px;
            letter-spacing: 2px;
            font-weight: bold;
            padding: 1% 2%;
            background: #FF7E00;
            border-radius: 10px;

            transition: all 0.4s ease-in-out;
        }
        .genres-list:nth-child(2){
            display: none;
        }
        .genres-list:nth-child(3){
            display: none;
        }
    }
    @media screen and (max-width: 429px){
        .genres{
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        .genres-header h2{
            font-size: 32px;
            letter-spacing: 0.25rem;
            margin-left: 20px;
        }
        .genres-body{
            width: 90%;
            height: 70%;
            margin: 7.5% 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .genres-list{
            width: 100%;
            list-style: none;
            color: white;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        .genres-list:nth-child(2){
            display: none;
        }
        .genres-list:nth-child(3){
            display: none;
        }
        .genres-list-moblie{
            display: none;
        }
        .genres-list li{
            padding: 1% 2%;
            margin: 1% 0.5%;
            border-radius: 10px;

            font-family: "Oswald", sans-serif;
            font-size: 14px;
            font-weight: bold;
            letter-spacing: 2px;
        }
        .genres-btn{
            text-decoration: none;
            color: white;

            font-family: "Oswald", sans-serif;
            font-size: 20px;
            letter-spacing: 2px;
            font-weight: bold;
            padding: 1% 2%;
            background: #FF7E00;
            border-radius: 10px;

            transition: all 0.4s ease-in-out;
        }
    }
</style>
