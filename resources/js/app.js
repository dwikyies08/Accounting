<<<<<<< HEAD
import Swal from 'sweetalert2';
window.Swal = Swal;
=======

>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
<<<<<<< HEAD
// import 'select2/dist/css/select2.min.css';
// import 'select2';

import { formatRupiah, parseRupiahToFloat, registerRupiahFormatter } from './utils/rupiah.js';

window.formatRupiah = formatRupiah;
window.parseRupiahToFloat = parseRupiahToFloat;

document.addEventListener("DOMContentLoaded", function () {
    registerRupiahFormatter();

    // Contoh lain jika kamu pakai input dinamis:
});

import Alpine from 'alpinejs'

import './svelte/main';

// import Hello from './components/Hello.svelte';

// import { mount } from 'svelte';

// // Mount komponen ke elemen HTML
// mount(Hello, {
// 	target: document.getElementById('svelte-app'),
// 	props: {
// 		// kirim props jika perlu, contoh:
// 		name: "Dunia"
// 	}
// });
window.Alpine = Alpine
 
Alpine.start()

// Contoh inisialisasi otomatis



=======
import 'select2/dist/css/select2.min.css';
import 'select2';

$(document).ready(function() {
    $('#select-kota').select2({
        placeholder: "--Pilih Kota--",
        allowClear: true,
        width: '100%'
    });
});


require('./bootstrap');

window.Vue = require('vue').default;
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

<<<<<<< HEAD
=======
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
<<<<<<< HEAD
window.dispatchEvent(new Event('appJsReady'));
=======

const app = new Vue({
    el: '#app',
});
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
