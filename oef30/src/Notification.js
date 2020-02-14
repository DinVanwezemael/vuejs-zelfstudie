export default {

    template: '<div><h1>{{ notification }}</h1></div>',



    data() {
        return {
            message: 'hello world'
        };
    },

    props: ['message'],

    computed: {
        notification() {
            return this.message.toUpperCase();
        }
    }


};