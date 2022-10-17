<template>
    <section class="login-block">
        <div class="login">
            <h1>Авторизация</h1>
            <form @submit.prevent="formData" class="login-form">
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
                <button type="submit">Войти</button>
            </form>
            <router-link :to="{ name: 'registration' }">Нету аккаунта?</router-link>
        </div>
        <div class="login-view">
            ПОЗЖЕ ДОБАВЛЮ
        </div>
    </section>
</template>

<script>
export default {
    name: "LoginComponent",
    data() {
        return{
            formInput:{
                email: '',
                password: '',
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
.login-block{
    width: 100vw;
    height: 100vh;
    background-color: #0B0A0F;
    display: flex;
    flex-direction: row;
    color: #FF7E00;
}
.login{
    width: 40vw;
    height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
.login h1{
    font-family: 'Oswald', sans-serif;
    font-size: 3rem;
    letter-spacing: 0.065em;
}
.login-form{
    margin-top: 3rem;
    margin-bottom: 1.5rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 3rem;
    width: 50%;
}
.login-form input{
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
.login-form button{
    cursor: pointer;
    width: 50%;
    height: 3rem;
    font-size: 1.26rem;
    font-family: "Oswald",sans-serif;
    background: white;
    border-radius: 15px;
    font-weight: bold;
    letter-spacing: 0.15rem;
}
.login a{
    text-decoration: none;
    color: #FF7E00;
    font-family: 'Oswald',sans-serif;
    font-size: 16px;
}
.login-view {
    width: 60vw;
    height: 100vh;

    display: flex;
    justify-content: center;
    align-items: center;
    font-family: 'Oswald',sans-serif;
    font-size: 3rem;
}
</style>
