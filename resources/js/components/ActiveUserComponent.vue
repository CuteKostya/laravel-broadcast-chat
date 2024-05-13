<template>
  <div class="flex flex-row items-center justify-between text-xs">
    <span class="font-bold">Active Conversations</span>
    <span
        class="flex items-center justify-center bg-gray-300 h-4 w-4 rounded-full"
    >
      {{ users.length }}
    </span
    >
  </div>
  <div class="flex flex-col space-y-1 mt-4 -mx-2 h-48 overflow-y-auto">
    <div v-for="user in users">
      <button
          class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2"
      >
        <div
            class="flex items-center justify-center h-8 w-8 bg-indigo-200 rounded-full"
        >
          H
        </div>
        <div class="ml-2 text-sm font-semibold">{{ user.name }}</div>
      </button>
    </div>
  </div>
</template>

<script>

import useChat from "../composables/chat.js";
import {onMounted, reactive, ref, toRef} from "vue";
import axios from "axios";

export default {
  setup() {
    const users = ref([])

    Echo.join('chat')
        .here((allUsers) => {
          users.value = allUsers;
        })
        .joining((user) => {
          users.value.push(user);
        })
        .leaving((user) => {
          users.value.splice(users.value.indexOf(user), 1);
        })
        .error((error) => {
          console.error(error);
        });

    return {
      users,
    }
  },
}

</script>