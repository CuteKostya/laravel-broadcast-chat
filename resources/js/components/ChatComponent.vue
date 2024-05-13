<template>
  <div class="container">
    <div class="col-start-1 col-end-8 p-3 rounded-lg" v-for="message in messages">
      <div class="flex flex-row items-center"
           :class="{'flex-row items-center' : message.user.id !== user.id,
            'items-center justify-start flex-row-reverse':  message.user.id === user.id}">
        <div
            class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0"
        >
          A
        </div>
        <div>
          <a class="text-sky-600 text-xs">
            {{ message.user.name }}
          </a>
          <div
              class="relative ml-3 text-sm "
              :class="{'bg-white py-2 px-4 shadow rounded-xl' : message.user.id !== user.id,
            'bg-indigo-100 py-2 px-4 shadow rounded-xl':  message.user.id === user.id}">
            {{ message.message }}
          </div>

        </div>
      </div>
    </div>
  </div>
</template>

<script>
import useChat from '../composables/chat';
import {onMounted} from 'vue';

export default {
  props: {
    user: {
      required: true,
      type: Object
    }
  },
  setup() {
    const {messages, getMessages} = useChat()

    onMounted(getMessages)

    Echo.private('chat')
        .listen('MessageSent', (e) => {
          messages.value.push({
            message: e.message.message,
            user: e.user
          });
        });

    return {
      messages
    }
  }
};
</script>
