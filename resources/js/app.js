import './bootstrap';
import {createApp} from 'vue';
import { createPinia } from 'pinia';
import root from './layout/app.vue';
import router  from './router';

const pinia = createPinia()
const app = createApp(root)

app.use(pinia);
app.use(router);
app.mount('#app');
