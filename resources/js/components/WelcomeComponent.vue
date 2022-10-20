<template>
    <div class="welcome">
        <div class="welcome__header">
            <div class="logo__7">
                <Transition name="Logo">
                    <img v-if="show" style="animation-delay: 1.5s;" :src="'../img/logo/kino.png'" alt="">
                </Transition>
            </div>
        </div>
        <div class="welcome__body">
            <Transition name="Logo">
                <div v-if="show" class="logo__1">
                    <img :src="'../img/logo/К.png'" alt="">
                </div>
            </Transition>
            <Transition name="Logo">
                <div v-if="show" style="animation-delay: 0.25s;" class="logo__2">
                    <img style="transform: translateY(-4px)" :src="'../img/logo/in.png'" alt="">
                </div>
            </Transition>
            <Transition name="Logo">
                <div v-if="show" style="animation-delay: 0.5s;" class="logo__3">
                    <img :src="'../img/logo/О.png'" alt="">
                </div>
            </Transition>
            <Transition name="LogoWhite">
                <div v-if="show" style="animation-delay: 0.75s;" class="logo__4">
                    <img :src="'../img/logo/З.png'" alt="">
                </div>
            </Transition>
            <Transition name="LogoWhite">
                <div v-if="show" style="animation-delay: 1s;" class="logo__5">
                    <img :src="'../img/logo/О-2.png'" alt="">
                </div>
            </Transition>
            <Transition name="LogoWhite">
                <div v-if="show" style="animation-delay: 1.25s;" class="logo__6">
                    <img :src="'../img/logo/Р.png'" alt="">
                </div>
            </Transition>
        </div>
        <Transition name="Circles">
            <div v-if="show" class="welcome__footer">
                <div class="dots"></div>
                <div class="dots"></div>
                <div class="dots"></div>
                <div class="dots"></div>
                <div class="dots"></div>
            </div>
        </Transition>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                show: false
            }
        },
        mounted() {
            this.show = true;
            setTimeout(()=>{
                window.location.href += 'main';
            },3500);
        }
    }
</script>

<style scoped>
    .welcome{
        width: 100vw;
        height: 100vh;

        background: #0B0A0F;
        color: white;
        font-family: sans-serif;

        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    .welcome__body{
        width: 100%;

        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: row;
        gap: 0.5rem;
    }
    .welcome__body img{
        height: 100%;
        width: 100%;
    }
    .welcome__footer{
        width: 100%;
        height: 100px;

        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        gap: 1.5rem;
    }
    .dots{
        width: 15px;
        height: 15px;
        border-radius: 50%;
    }
    .dots:nth-child(odd){
        background: #FF7E00;
        animation: circleOrange 2s ease infinite;
    }
    .dots:nth-child(even){
        background: white;
        animation: circleWhite 2s ease infinite;
    }
    @keyframes circleWhite {
        0%{
            transform: translateY(20px);
        }
        50%{
            transform: translateY(-20px);
        }
        100%{
            transform: translateY(20px);
        }
    }
    @keyframes circleOrange {
        0%{
            transform: translateY(-20px);
        }
        50%{
            transform: translateY(20px);
        }
        100%{
            transform: translateY(-20px);
        }
    }
    .Logo-enter-active,
    .Logo-leave-active,
    .LogoWhite-enter-active,
    .LogoWhite-leave-active{
        transition: all 0.4s ease-in;
        opacity: 0;
    }
    .Logo-enter-active{
        animation: logoOrange 1s ease;
    }
    .LogoWhite-enter-active{
        animation: logoWhite 1s ease;
    }
    .Circles-enter-active,
    .Circles-leave-active {
        transition: opacity 0.4s ease-in;
        opacity: 0;
    }
    .Circles-enter-active{
        animation: opacityBalls 1s 1.5s ease;
    }
    @keyframes opacityBalls {
        0%{
            opacity: 0;
        }
        100%{
            opacity: 1;
        }
    }
    @keyframes logoWhite {
        0%{
            transform: translateX(-200px);
            opacity: 0;
        }
        75%{
            transform: translateX(50px);
            opacity: 1;
        }
        100%{
            transform: translateX(0);
            opacity: 1;
        }
    }
    @keyframes logoOrange {
        0%{
            transform: translateY(200px);
            opacity: 0;
        }
        75%{
            transform: translateY(-50px);
            opacity: 1;
        }
        100%{
            transform: translateY(0);
            opacity: 1;
        }
    }
</style>
