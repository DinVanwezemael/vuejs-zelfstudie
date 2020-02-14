<template>
    <div class="container">
        
         <div class="columns">
            <div class="column">
                <div class="message" v-for="status in statuses">
                    <div class="message-header">
                        <p>
                            {{ status.user.name }} zegt..
                        </p>

                    <p>
                            {{ status.created_at | ago | capitalize }}
                        </p>

                    </div>
<div class="message-body" v-text="status.body"></div>
                </div>


                <add-to-stream @completed="addStatus"></add-to-stream>


            </div>
        </div>
    </div>
</template>

<script>
    import AddToStream from '../components/AddToStream';
    import moment from 'moment';
    import Status from '../models/Status';


    export default {

        components: {
                AddToStream
            },

        mounted() {
            console.log('mounted')
        }

        data() {
            return {
                statuses: []
            };
        },

         filters: {

            ago(date) {
                return moment(date).fromNow();
            },

            capitalize(value) {
                return value.toUpperCase();
            }

        },

        created() {
            Status.all((statuses) => {
                this.statuses = statuses;
            });
        },
        methods: {
            // postedOn(status) {
            //     return moment(status.created_at).fromNow();
            // }

            addStatus(status) {
                this.statuses.unshift(status);
                window.scrollTo(0, 0);
            }
        }

    }

</script>