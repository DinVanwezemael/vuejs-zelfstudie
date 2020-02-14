require('./bootstrap');


import Vue from 'vue';

import axios from 'axios';
import Form from './core/Form';


window.axios = axios;
window.Form = Form;

import Notification from './components/Notification.vue';

new Vue({
    el: '#app',

    components: {
        Notification
    },

    data: {
        form: new Form({
            name: '',
            description: ''
        }),
    },

    methods: {
        onSubmit() {

            this.form.submit('POST', '/projects')
                .then((data) => {
                    console.log(data);
                });
        },
    },

    components: { Notification }
});