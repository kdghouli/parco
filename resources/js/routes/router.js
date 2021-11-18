import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);


import khalid from '../components/khalid.vue';
import IndexVhl from '../components/IndexVhl.vue';
import Global from '../components/Global.vue';

const routes =[
    {path:'/',component:Global,name:'global'},
    {path:'/1',component:IndexVhl,name:'index-vhl'},
    {path:'/2',component:khalid,name:'khalid'}
];


const router = new VueRouter({
routes,
hashbang:false,
mode:'history'
})

export default router;

