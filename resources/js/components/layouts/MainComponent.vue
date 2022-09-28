<template>
    <main style="width: 100%;height: 100%;">
        <router-view></router-view>
    </main>
</template>

<script>
import ExampleComponent from "../WelcomeComponent.vue";
export default {
    name: "MainComponent",
    components: {
        ExampleComponent
    },
}
</script>

<style scoped>

</style>
