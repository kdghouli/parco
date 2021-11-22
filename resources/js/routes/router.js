import Vue from 'vue';
import VueRouter from 'vue-router';
import IndexCamion from '../components/IndexCamion.vue';
import GlobalRouter from '../components/GlobalRouter.vue';
import AddVhl from '../components/AddVhl.vue';
import ShowVhl from '../components/ShowVhl.vue';
import UpdateVhl from '../components/UpdateVhl.vue';





Vue.use(VueRouter);
const routes =[
    {path:'/',component:GlobalRouter,name:'global-router'},
    {path:'/vhls',component:IndexCamion,name:'index-camion'},
    {path:'/vhls/ad',component:AddVhl,name:'add-vhl'},
    {path:'/vhls/show',component:ShowVhl,name:'show-vhl'},
    {path:'/vhls/update',component:UpdateVhl,name:'update-vhl'}
];


const router = new VueRouter({
routes,
hashbang:false,
mode:'history'
})

export default router;

