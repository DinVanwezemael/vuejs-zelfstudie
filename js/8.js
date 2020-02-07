Vue.component('task-list', {

    template: '<div><task v-for="task in tasks">{{task.task}}</task></div>',

    data(){
        return{
            tasks: [
                {task: 'go to the store', complete: false},
                {task: 'go to the bank', complete: true},
                {task: 'go to the pub', complete: false},
                {task: 'go to school', complete: true},
            ]
        };
    }

});


Vue.component('task', {
    template : '<li><slot></slot></li>'
});

new Vue({
    el: '#root'
});
