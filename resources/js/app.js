require('./bootstrap');
var el = document.getElementById('app')
import {createApp, h} from 'vue'
import textedit from './Pages/Textedit'
import editor from "./Pages/editor";
import {createInertiaApp} from '@inertiajs/inertia-vue3'
createInertiaApp({
    resolve: name => require(`./Pages/${name}`),
    setup({el, App, props, plugin}) {
        createApp({
            render: () => h(App, props),
        })
            .use(plugin)
            .mount('#app')
    },
})
const app = createApp({
    data: () => ({
        test:'test'
    }),
    components:{
        textedit,
        editor,
    }
})

app.mount('#app')
