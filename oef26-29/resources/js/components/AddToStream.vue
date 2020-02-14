<template>
    <div class="message">

        <div class="message-header">
            push stream
        </div>


        <div class="message-body">

            <form @submit.prevent="onSubmit" @keydown="form.errors.clear()">

                <p class="control">

                    <textarea class="textarea" placeholder="iets zeggen.." v-model="form.body"></textarea>

                    <span class="help is-danger"v-if="form.errors.has('body')"v-text="form.errors.get('body')"></span>
                    
                </p>

                <p class="control">
                    <button class="button is-primary" :disabled="form.errors.any()">save</button>
                </p>
            </form>
        </div>
    </div>
</template>

<script>

    export default {

        data() {
            return {

                form: new Form({
                    body: ''
                })

            };
        },


        methods: {

            onSubmit() {
                this.form.post('/statuses').then((status) => {
                    this.$emit('completed', status); 
                });
            }
        }
    }

</script> 