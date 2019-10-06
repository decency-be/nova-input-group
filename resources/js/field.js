Nova.booting((Vue, router, store) => {
    Vue.component('index-input-group', require('./components/IndexField'))
    Vue.component('detail-input-group', require('./components/DetailField'))
    Vue.component('form-input-group', require('./components/FormField'))
})
