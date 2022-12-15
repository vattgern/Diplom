<template>
    <section class="contactForm">
        <div class="contacts">
            <div class="contacts-header">
                <h2>Контактная форма</h2>
            </div>
            <div class="contacts-info">
                <p>Свяжитесь с нами и мы вам поможем</p>
                <ul>
                    <li>+8-988-685-84-15</li>
                    <li>г.Астрахань, ул. Космонавка Комарова, 55/1</li>
                </ul>
            </div>
            <div class="contacts-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d578.8760099554956!2d48.106896849517646!3d46.35720720654099!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x41a904df13ef1e09%3A0x249efab640fead3b!2z0YPQuy4g0JrRgNCw0YHQvdGL0Lkg0KDRi9Cx0LDQuiwgNDMsINCQ0YHRgtGA0LDRhdCw0L3RjCwg0JDRgdGC0YDQsNGF0LDQvdGB0LrQsNGPINC-0LHQuy4sIDQxNDAxMQ!5e0!3m2!1sru!2sru!4v1671099318016!5m2!1sru!2sru"
                        width="600" height="450" style="border:0;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="form">
            <h2>Если что-то случилось, напишите в нашу поддержку</h2>
            <form>
                <label for="email">
                    <p>Ваша почта</p>
                    <input type="email" name="email" id="email" placeholder="Введите вашу почту">
                </label>
                <label for="text">
                    <p>Ваше сообщение</p>
                    <textarea name="text" id="text" placeholder="Опишите вашу проблему"></textarea>
                </label>
                <button type="submit">Отправить</button>
            </form>
        </div>
    </section>
</template>

<script>
export default {
    name: "ContactFormComponent"
}
</script>

<style scoped>
    .contactForm{
        width: 100%;
        height: 100vh;
        color: white;
        display: flex;
        flex-direction: row;
        background: linear-gradient(67.31deg, #FF7F00 -34.95%, #0B0A0F 43.41%);
    }
    /* Слева */
    /* ----------------- */
    .contacts{
        height: 100%;
        width: 35%;
        margin-left: 175px;
    }
    .contacts-header{
        width: 100%;
        margin: 2.5% 0;
        font-family: 'Oswald', sans-serif;
        font-weight: bold;
        font-size: 36px;
        letter-spacing: 10px;
        color: white;
    }
    .contacts-info{
        width: 100%;
        height: 30%;
    }
    .contacts-info p{
        font-family: 'Montserrat', sans-serif;
        font-size: 24px;
        letter-spacing: 2px;
        font-weight: lighter;
        margin:  2.5% 0;
    }
    .contacts-info ul {
        margin: 10% 0;
        font-family: 'Montserrat', sans-serif;
        font-size: 16px;
        letter-spacing: 2px;
        font-weight: normal;
    }
    .contacts-info ul li{
        margin: 3.5% 7.5%;
    }
    .contacts-info ul li:first-child{
        list-style-image: url("./img/icons/telephone.svg");
    }
    .contacts-info ul li:last-child{
        list-style-image: url("./img/icons/location.svg");
    }
    .contacts-map{
        width: 100%;
        height: 57%;
    }
    .contacts-map iframe{
        width: 100%;
        height: 100%;
    }
    /* ----------------- */
    /*  Справа  */
    .form{
        margin-left: .5%;
        margin-right: 175px;
        width: 60%;
        height: 100%;
        border-left: 2px #FF7E00 solid;
        padding-left: 2.5%;
    }
    .form h2{
        font-family: 'Oswald',sans-serif;
        font-style: normal;
        font-weight: 700;
        font-size: 48px;
    }
    .form form{
        width: 100%;
        height: 82.5%;
    }
    .form form label p{
        font-family: 'Oswald',sans-serif;
        font-style: normal;
        font-weight: 400;
        font-size: 24px;
        margin: 2.5% 0;
    }
    .form form label input {
        width: 50%;
        height: 50px;
        border: 1px white solid;
        border-radius: 10px;
        padding-left: 2.5%;
        background: transparent;
        outline: none;

        color: white;
        font-family: 'Montserrat',sans-serif;
        font-style: normal;
        font-weight: 400;
        letter-spacing: 2px;
        font-size: 16px;

        transition: all 0.4s ease;
    }
    .form form label input::placeholder{
        color: white;
    }
    .form form label input:focus{
        background: rgba(255, 126, 0, 0.5);
        border-color: #FF7E00;
    }
    .form form label textarea{
        width: 100%;
        height: 60%;
        padding: 1.5% 2.5%;

        background: transparent;
        outline: none;
        border: 1px white solid;
        border-radius: 10px;
        color: white;

        font-family: 'Montserrat',sans-serif;
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 20px;
        letter-spacing: 2px;

        transition: all 0.4s ease-in;
    }
    .form form label textarea::placeholder{
        color: white;
    }
    .form form label textarea:focus{
        background: rgba(255, 126, 0, 0.5);
        border-color: #FF7E00;
    }
    .form form button{
        margin-top: 2.5%;
        padding: 1.5% 5%;

        cursor: pointer;
        outline: none;
        background: #FF7E00;
        color: white;
        border-radius: 5px;
        font-family: 'Montserrat',sans-serif;
        font-style: normal;
        font-weight: 700;
        font-size: 16px;
    }
</style>
