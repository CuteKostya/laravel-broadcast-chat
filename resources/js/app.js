import './bootstrap';
import {createApp} from 'vue';

import ChatComponent from './components/ChatComponent.vue';
import SendChatComponent from "./components/SendChatComponent.vue";


createApp({
    components: {
        ChatComponent,
        SendChatComponent
    }
}).mount('#app');
