<template>
    <div class="welcome">
        <div class="welcome__header">
            <h1>Welcome page</h1>
        </div>
        <div class="welcome__body">
            <div class="logo__1">
                <img src="" alt="">
            </div>
            <div class="logo__2">
                <img src="" alt="">
            </div>
            <div class="logo__3">
                <img src="" alt="">
            </div>
            <div class="logo__4">
                <img src="" alt="">
            </div>
            <div class="logo__5">
                <img src="" alt="">
            </div>
            <div class="logo__6">
                <img src="" alt="">
            </div>
        </div>
        <router-link :to="{ name: 'index' }">Перехол на главную</router-link>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
