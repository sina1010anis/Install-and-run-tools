require('./bootstrap');
import 'bootstrap/scss/bootstrap.scss'
import {createApp, h} from 'vue'
import '../css/app.css'
import textedit from './Pages/Textedit'
import editor from "./Pages/editor";
import ChatApp from "./Components/ChatApp";
import axios from 'axios'
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
        ChatApp,
    }
})

app.mount('#app')
