<template>
  <div class="flex flex-col gap-y-4  items-center py-8 w-24 bg-gray-900">
    <button class="p-2 bg-opacity-20 rounded-xl bg-primary">
      <StoreIcons name="store" />
    </button>
    <div class="flex flex-col gap-y-4 items-center ">
      <div

        v-for="menu in menus"
        :key="menu"
        :class="activeMenu === menu.name ? 'bg-gray-800 p-6 rounded-full hover:bg-primary hover:bg-opacity-70' : ''"
      >
        <router-link
          class="p-2 my-5 ml-3 rounded-xl list-none transation delay-100"
          :class="activeMenu === menu.name ? 'text-white ' : 'text-primary '"
          @click="activeMenu = menu.name"
          to="/"
        >
          <StoreIcons :name="menu.icon" />
        </router-link>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from "@vue/reactivity";
import StoreIcons from "../../../assets/icons/icon.vue";

const activeMenu = ref("Home");
const menus = [
  { name: "Home", icon: "home" },
  { name: "Discounts", icon: "discount" },
  { name: "Graph", icon: "graph" },
  { name: "Messages", icon: "message" },
  { name: "Notifications", icon: "notification" },
  { name: "Settings", icon: "setting" },
  { name: "Logout", icon: "logout" },
];
</script>

<style>
</style>
