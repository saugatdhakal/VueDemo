<template>
  <div class="flex w-full min-h-screen font-sans bg-gray-800">
    <SideBar></SideBar>
    <!-- body -->
    <main class="flex flex-col flex-1 gap-6 p-4">
      <header>
        <p class="text-3xl font-semibold leading-loose text-white">Dashboard</p>
        <p class="text-xl text-gray-200">Monday 18 Jul,2022</p>
      </header>
      <hr class="border-gray-700">
        <Cards/>
        <Table></Table>
    </main>
  </div>

  <!-- <button @click="auths.logout" class="bg-purple-400 py-3 px-6 rounded hover:bg-purple-500 font-bold">Logout</button> -->
</template>

<script setup>
import Cards from "../../components/Dashboard/Cards.vue";
import Table from "../../components/Dashboard/Table.vue";
import SideBar from "../../components/Dashboard/SideBar.vue";
import { authState } from "../../../states/auth";
import { onMounted } from "@vue/runtime-core";
import getLogedUser from "../../../composables_api/getLogedUser.js";
const auths = authState();
//Login in User Details
const { user, logedUser } = getLogedUser();
onMounted(() => {
  logedUser(), auths.checkLogin;
});
</script>

<style>
</style>
