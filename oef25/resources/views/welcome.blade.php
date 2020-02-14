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
            {{-- <input type="text" v-model="coupon"> --}}
            {{-- <input type="text" :value="coupon" @input="coupon = $event.target.value"> --}}


            <coupon v-model="coupon">
        </div>

        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

        <script src="/js/app.js"></script>

        <script>

            
            Vue.component('coupon', {

    props: ['code'],

    template: `

    <input type="text" :value="code" @input="updateCode($event.target.value)" ref="input">

`,

data() {
    return {

        invalids: ['GRATTISS', 'TEEESSTTTT']

    };
},

methods: {
    updateCode(code) {


        if (this.invalids.includes(code)) {

            alert('This coupon is no longer valid. Sorry!');

            this.$refs.input.value = code = '';
        }

        this.$emit('input', code);
    }
}
});


new Vue({

    el: '#app',

    data: {

        coupon: 'GRATIS'

    }
}); 
        </script>


    </body>
</html>
