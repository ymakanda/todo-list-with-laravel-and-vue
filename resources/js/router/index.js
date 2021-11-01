import Vue from "vue";
import VueRouter from "vue-router";

import VueAxios from 'vue-axios';
import axios from 'axios';

import AllItems from '../views/Items/AllItems';
import CreateItem from '../views/Items/CreateItem';
import EditItem from '../views/Items/EditItem';

Vue.use(VueRouter);
Vue.use(VueAxios, axios);
export default new VueRouter({
    routes: [
        {
            name: 'items',
            path: '/items',
            component: AllItems
        },
        {
            name: 'create',
            path: '/create',
            component: CreateItem
        },
        {
            name: 'edit',
            path: '/edit/:id',
            component: EditItem
        }
            
        ],
    mode: 'history'
});
