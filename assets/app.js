/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */



import Vue from 'vue';
import HomePage from "./js/components/HomePage"

import './styles/app.scss';

Vue.component('homepage-app-component', HomePage);

const app = new Vue({
    el: '#homepage-app'
});
