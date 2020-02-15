
new Vue({
    el: '#root',

    mounted() {
        document.querySelectorAll('[data-tooltip]').forEach(elem => {
            Popper.createPopper(elem, {
                placement: 'top',
                title: 'hardcode tooltip'
            });
        });
    },
});

