import test from 'ava';

import Vue from 'vue';

import Notification from '../src/Notification';


let vm;

test.beforeEach(t => {
    let N = Vue.extend(Notification);

    vm = new N ({
        propsData: {
            message: 'Bar'
        }
    }).$mount();
});

test('dit renderd de notification', t => {
    t.is(Notification.data().message, 'hello world');
});

test('dit renderd de notification', t => {
    t.is(vm.$el.textContent, 'Bar');
});

test('dit renderd de notification', t => {
    t.is(vm.notification, 'Bar');
});