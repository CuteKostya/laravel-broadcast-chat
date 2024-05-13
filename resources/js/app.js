import './bootstrap';
import {createApp} from 'vue';

import ChatComponent from './components/ChatComponent.vue';
import SendChatComponent from "./components/SendChatComponent.vue";
import ActiveUserComponent from "./components/ActiveUserComponent.vue";

createApp({
    components: {
        ChatComponent,
        SendChatComponent,
        ActiveUserComponent
    }
}).mount('#app');
