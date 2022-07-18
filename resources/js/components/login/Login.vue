<template>
    <div class="body-bg min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0" v-if="!isAuth">
    <div class=" mx-auto max-w-lg">
      <h1 class="text-4xl font-bold text-white text-center">Saral Billing {{auths.loggedIn}}</h1>
    </div>
    <main class="bg-white max-w-xl mx-auto m-10 p-8 md:p-12 rounded-lg shadow-2xl">
      <section>
        <h3 class="font-bold text-3xl">Welcome to billing software</h3>
        <p class="text-gray-600 pt-2">Sign in to your account </p>
      </section>
      <section class="mt-10">
        <form class="flex flex-col " @submit.prevent="LoginEvent">
          <div class="mb-6 pt-3 rounded bg-gray-200">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Email</label>
            <input v-model="form.email" type="text" id="email" class="bg-gray-200 w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3" />
          </div>
          <div class="mb-6 pt-3 rounded bg-gray-200">
            <label for="password" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Password</label>
            <input v-model="form.password" type="text" id="password" class="bg-gray-200 w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3" />
          </div>
          <div class=" mb-4 mt-2 flex justify-end">
            <a class="  text-purple-600 hover:text-purple-700 hover:underline">Forget your password?</a>

            </div>


          <button
            class="
`              text-center
              bg-purple-500
              hover:bg-purple-600
              text-white
              font-bold
              py-3
              px-6
              rounded
            "
          >
            Login
          </button>
        </form>
      </section>
    </main>
  </div>
</template>

<script>
import { reactive } from '@vue/reactivity';
import {onMounted } from '@vue/runtime-core';
import { authState } from '../../../states/auth';
export default {
    setup(){
        const auths = authState();
        const form = reactive({
            email:'',
            password:''
        });
        const LoginEvent=()=>{
            const res =auths.LoginEvent(form);
        }
        onMounted(()=>{
            auths.checkLogin()
        })

        return {form,LoginEvent,auths};
    }
};
</script>
<style>
.body-bg {
  background-color: #9921e8;
  background-image: linear-gradient (315deg, #9934dc 0%, #5f72be 74%);
}
</style>

