<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
    <div id="app">

            <notification>

            </notification>


        <div id="one">
            <h1>
                @{{ shared.user.name }}

            </h1>
        </div>

        <div id="two">
            <h1>

                @{{ shared.user.name }}

            </h1>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script>

                    let source = {
                        user: {
                            name: 'Din Vanw'
                        }
                    };

                    new Vue({
                        el: '#one',

                        data: {
                            foo: 'bar',
                            shared: source
                        }
                    });

                    new Vue({
                        el: '#two',

                        data: {
                            foo: 'other',
                            shared: source
                        }
                    }); 
        </script>
        <script src="/js/app.js"></script>
    </body>
</html>
