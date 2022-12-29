import {createStore} from 'vuex';
export default createStore({
    state(){
        return {
            para: false,
            selectedFilters: [],
            showMode: 'lists',
            showFilter: false,
        }
    },
    mutations:{

    }
})
