
import {creatApp} from 'vue';
import App from './components/App';
import router from './router';


require('./bootstrap');

creatApp(App).use(router).mount('#app')

