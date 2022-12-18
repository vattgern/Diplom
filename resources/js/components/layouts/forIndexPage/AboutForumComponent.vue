<template>
    <section class="forum">
        <div class="forum-header">
            <h2>Обсуждайте фильмы</h2>
        </div>
        <div class="forum-body">
            <!--      Сделать анимацию при наведении, чтобы один стоял выше другого      -->
            <div class="forum-img" id="first">
                <img src="" alt="">
            </div>
            <div class="forum-img" id="second">
                <img src="" alt="">
            </div>
        </div>
        <div class="forum-footer">
            <router-link :to="{ name: '' }" class="forum-btn">ФОРМУМЫ</router-link>
        </div>
    </section>
</template>

<script>
export default {
    name: "AboutForumComponent"
}
</script>

<style scoped>
    .forum{
        width: 100%;
        height: 70vh;
        display: flex;
        flex-direction: column;
        margin: 5% 0;
    }
    .forum-header{
        width: 100%;
        height: 15%;
        display: flex;
        align-items: flex-end;
    }
    .forum-header h2{
        font-family: 'Oswald', sans-serif;
        font-weight: bold;
        font-size: 48px;
        letter-spacing: 10px;
        margin-left: 175px;
        color: white;
    }
    .forum-body{
        width: 100%;
        height: 70%;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }
    .forum-img{
        width: 30%;
        height: 70%;
        border: 2px #FF7E00 solid;

        position: absolute;
        cursor: pointer;
    }
    #first{
        top: 15%;
        left: 30%;
        background: red;
        z-index: 4;
    }
    #second{
        top: 20%;
        left: 40%;
        background: green;
        z-index: 3;
    }
    .forum-footer{
        width: 100%;
        height: 15%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .forum-btn{
        text-decoration: none;
        color: white;

        font-family: "Oswald", sans-serif;
        font-size: 24px;
        letter-spacing: 2px;
        font-weight: bold;
        padding: 0.75% 2%;
        background: #FF7E00;
        border-radius: 20px;

        transition: all 0.4s ease-in-out;
    }
    .forum-btn:hover{
        background: white;
        color: #FF7E00;
    }
    @media screen and (min-width:1024px) and (max-width: 1365px){
        .forum-header h2{
            font-size: 36px;
            letter-spacing: 0.5rem;
            margin-left: 75px;
        }
        .forum-btn{
            text-decoration: none;
            color: white;

            font-family: "Oswald", sans-serif;
            font-size: 24px;
            letter-spacing: 2px;
            font-weight: bold;
            padding: 1% 2.5%;
            background: #FF7E00;
            border-radius: 10px;

            transition: all 0.4s ease-in-out;
        }
    }
    @media screen and (min-width: 430px) and (max-width: 1023px){
        .forum{
            margin: 15% 0;
        }
        .forum-header h2{
            font-size: 36px;
            letter-spacing: 0.5rem;
            margin-left: 75px;
        }
        .forum-btn{
            text-decoration: none;
            color: white;

            font-family: "Oswald", sans-serif;
            font-size: 24px;
            letter-spacing: 2px;
            font-weight: bold;
            padding: 1% 2.5%;
            background: #FF7E00;
            border-radius: 10px;

            transition: all 0.4s ease-in-out;
        }
    }
    @media screen and (max-width:429px){
        .forum{
            margin: 75px 0;
            height: 55vh;
            border: 2px red solid;
        }
        .forum-header{
            width: 100%;
        }
        .forum-header h2{
            font-size: 32px;
            letter-spacing: 0.5rem;
            margin-left: 20px;
        }
        .forum-img{
            width: 50%;
            height: 50%;
        }
        #first{
            top: 15%;
            left: 20%;
            background: red;
            z-index: 4;
        }
        #second{
            top: 20%;
            left: 30%;
            background: green;
            z-index: 3;
        }
        .forum-btn{
            text-decoration: none;
            color: white;

            font-family: "Oswald", sans-serif;
            font-size: 20px;
            letter-spacing: 2px;
            font-weight: bold;
            padding: 2% 5%;
            background: #FF7E00;
            border-radius: 10px;

            transition: all 0.4s ease-in-out;
        }
    }
</style>
