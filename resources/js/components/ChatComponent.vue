<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">

          <div class="col-start-1 col-end-8 p-3 rounded-lg" v-for="message in messages">
            <div class="flex flex-row items-center">
              <div
                  class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0"
              >
                A
              </div>
              <div
                  class="relative ml-3 text-sm bg-white py-2 px-4 shadow rounded-xl"
              >
                {{ message.message }}
              </div>
            </div>
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
