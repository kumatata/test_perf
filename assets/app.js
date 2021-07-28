/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */



import Vue from 'vue';
import HomePage from "./js/components/HomePage"; 
import GetPage from "./js/components/GetPage";
import GetLoadsData from "./js/components/GetLoadsData";




import './styles/app.scss';

Vue.component('homepage-app-component', HomePage);
Vue.component('get-page-component', GetPage);
Vue.component('get-loads-data-component', GetLoadsData)


const app = new Vue({
    el: '#homepage-app'
});
