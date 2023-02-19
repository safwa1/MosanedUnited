Moyasar.init({
    element: '.mysr-form',
    amount: 100,
    currency: 'SAR',
    description: 'Payment',
    publishable_api_key: 'pk_test_p2RxGKGLES8S8XNwoy4gjf9ngfEo66dqDt9fGcyD',
    callback_url: 'http://127.0.0.1:30/payment/1',
    methods: ['creditcard'],
});