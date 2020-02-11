<template>

    <div>
    
        <h2>counter: {{ count }}</h2>

        <p>
        
            <button @click="count +=1">increment</button>
        
        </p>
    
    </div>

</template>

<script>

    export default{
        data() {
            return {
                count: 0
            }
        },
    }

</script>