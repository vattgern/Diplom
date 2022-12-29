import {createStore} from 'vuex';
export default createStore({
    state(){
        return {
            para: false,
            selectedFilters: [],
            showMode: 'cards',
            showFilter: false,
            adminRouter: '',
        }
    },
    mutations:{

    }
})
