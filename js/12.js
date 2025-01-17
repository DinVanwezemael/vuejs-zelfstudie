Vue.component('coupon', {

    template : `
    
    <input placeholder="enter your coupon code" @blur="onCouponApplied">
    `,

    methods: {
        onCouponApplied(){
            this.$emit('applied');
        }
    },

});

new Vue({
    el: '#root',

    data:{
        couponApplied: false
    },

    methods: {
        onCouponApplied(){
            // alert('it was applied');
            this.couponApplied = true;
        }
    },
});

