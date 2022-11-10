<template>
    <section class="filter-block">
        <ul class="filter-items">
            <FilterItemComponent v-for="filter in filters"
                                 :title="filter.title"
                                  :filter-options="filter.options"></FilterItemComponent>

        </ul>
        <div class="filter-btn">
            <button class="filter-reset">Сбрость</button>
            <button class="filter-apply"></button>
        </div>
    </section>
</template>

<script>
import FilterItemComponent from "./FilterItemComponent.vue";
export default {
    name: "FilterComponent",
    components: {FilterItemComponent},
    data(){
        return{
            filters:[
                {
                    title: 'Жанр',
                    options:[
                        'Комедия',
                        'Фэнтези',
                        'Драма',
                        'Фантастика'
                    ]
                }
            ]
        }
    }
}
</script>

<style scoped>
    .filter-block{
        height: 100%;
        width: 20%;
        background: white;
        margin-left: 12.5%;
        border-radius: 15px;
    }
</style>
