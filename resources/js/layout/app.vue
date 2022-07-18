<template>
  <!-- sfa -->
  <!-- <router-link to="/home">home</router-link> -->

    <router-view  />

</template>

<script setup>
import { reactive } from "@vue/reactivity";
import router from "../router";
 const layout = reactive('div')
if (!localStorage.getItem("token")) {
  router.push("/login");
} else {
  router.push("/");
}
</script>

