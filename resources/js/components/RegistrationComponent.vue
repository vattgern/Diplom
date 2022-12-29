<template>
    <section class="registration-block">
        <div class="registration">
            <h1>Регистрация</h1>
            <form @submit.prevent="formData" class="register-form">
                <input type="email"
                       name="email"
                       id="email"
                        v-model="formInput.email"
                        placeholder="****@***.***">
                <input type="password"
                       name="password"
                       id="password"
                       v-model="formInput.password"
                        placeholder="**************">
                <input type="password"
                       name="password_confirm"
                       id="password_confirm"
                       v-model="formInput.password_confirm"
                       placeholder="**************">
                <button type="submit">Зарегистрироваться</button>
            </form>
            <router-link :to="{ name: 'login' }">Уже есть аккаунт?</router-link>
        </div>
        <div class="registration-view">
            ПОЗЖЕ ДОБАВЛЮ
        </div>
    </section>
</template>

<script>
export default {
    name: "RegistrationComponent",
    data() {
        return{
            formInput:{
                email: '',
                password: '',
                password_confirm: ''
            }
        }
    },
    methods:{
        formData(){
            console.log(this.formInput);

        }
    }
}
</script>

<style scoped>
    .registration-block{
        width: 100vw;
        height: 100vh;
        background-color: #0B0A0F;
        display: flex;
        flex-direction: row;
        color: #FF7E00;
    }
    .registration{
        width: 40vw;
        height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    .registration h1{
        font-family: 'Oswald', sans-serif;
        font-size: 3rem;
        letter-spacing: 0.065em;
    }
    .register-form{
        margin-top: 3rem;
        margin-bottom: 1.5rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 3rem;
        width: 50%;
    }
    .register-form input{
        width: 100%;
        height: 3rem;
        outline: none;
        border: none;
        background: transparent;
        border-bottom: 2px #FF7E00 solid;
        text-align: center;
        color: white;
        font-family: 'Montserrat',sans-serif;
        font-size: 1.25rem;
        letter-spacing: 0.15rem;
    }
    .register-form button{
        cursor: pointer;
        width: 75%;
        height: 3rem;
        font-size: 1.26rem;
        font-family: "Oswald",sans-serif;
        background: white;
        border-radius: 15px;
        font-weight: bold;
        letter-spacing: 0.15rem;
    }
    .registration a{
        text-decoration: none;
        color: #FF7E00;
        font-family: 'Oswald',sans-serif;
        font-size: 16px;
    }
    .registration-view{
        width: 60vw;
        height: 100vh;

        display: flex;
        justify-content: center;
        align-items: center;
        font-family: 'Oswald',sans-serif;
        font-size: 3rem;
    }
    @media screen and (max-width: 1024px) and (min-width:769px){
        .register-form{
            width: 75%;
        }
        .register-form button{
            width: 250px;
        }
    }
    @media screen and (max-width:768px){
        .registration-view{
            display: none;
        }
        .registration{
            width: 100%;
        }
        .register-form button{
            width: 250px;
        }
    }
    @media screen and (max-width:429px){
        .register-form{
            width: 90%;
        }
        .register-form button{
            width: 250px;
        }
    }
</style>
