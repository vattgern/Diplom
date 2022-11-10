<template>
    <main>
        <router-view></router-view>
    </main>
</template>

<script>
import ExampleComponent from "../WelcomeComponent.vue";

export default {
    name: "MainComponent",
    components: {
        ExampleComponent,
    },
}
</script>

<style scoped>
    main{
        height: 100%;
        width: 100%;
        background: #0B0A0F;
        overflow-x: hidden;
    }
</style>
