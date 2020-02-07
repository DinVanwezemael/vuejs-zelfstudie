Vue.component('din-message', {

    props: [
        'title',
        'body'
    ],

    data() {
        return {
            isVisable: true
        }
    },

    template : `
    
    <article class="message" v-show="isVisable">
            <div class="message-header">
              <p>{{title}}</p>
              <button @click="isVisable = false" class="delete" aria-label="delete"></button>
            </div>
            <div class="message-body">
              {{body}}
            </div>
          </article>
    
    `,

    methods: {
        hideModal(){
            this.isVisable = false;
        }
    },

});


new Vue({
    el: '#root'
});
