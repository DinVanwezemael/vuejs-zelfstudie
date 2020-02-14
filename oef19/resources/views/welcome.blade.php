<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>


            <div id="root">


                <form action="/projects" method="POST" @submit.prevent="onSubmit" required @keydown="form.errors.clear($event.target.name)">
            
                <div>
                    <input type="text" id="name" name="name" v-model="form.name" required>
                </div>

                <span v-if="form.errors.has('name')" v-text="form.errors.get('name')">


                </span>
            
                <div>
                    <input type="text" id="description" name="description"  v-model="form.description">
                </div>

                <span  v-if="form.errors.has('description')" v-text="form.errors.get('description')">


                </span>

                <div>
                    <button :disabled="form.errors.any()" type="button">
                        save
                    </button>
                </div>

            </form>


            </div>








    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js" integrity="sha256-T/f7Sju1ZfNNfBh7skWn0idlCBcI3RwdLSS4/I7NQKQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>

        

        import Form from '../js/core/Form';
        import Vue from 'vue';
        import axios from 'axios';

        windows.axios = axios;
        windows.Form = from;
    
    
    new Vue({
    el: '#root',

    data: {
            form : new Form({
                name: '',
                description: ''
            })
        
    },

    methods: {
        onSubmit(){

            // this.form.submit('post', '/projects').then().catch(error => console.log(error));
            this.form.submit('post', '/projects').then().catch(error => console.log(error));
        },

        onSucess(response){
            alert(response.data.message);

            form.reset();
        }
    },
});

</script>
    </body>
</html>
