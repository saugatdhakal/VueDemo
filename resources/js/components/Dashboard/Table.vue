<template>
  <div class="rounded  bg-gray-900 p-4">
    <!-- About Table -->
    <div class="text-white flex  justify-between items-center ">
        <p class="text-xl">Order Report</p>
        <div class=" gap-y-1 border p-1 rounded border-gray-600">
            <button class="flex"><Icon :name="'filter'" /><span> Filter User</span></button>
        </div>
    </div>
    <!-- Table Headings -->
    <table class="w-full my-4">
    <thead>
        <tr class="text-sm text-white  font-semibold">
          <td class="py-4 border-b border-gray-700">SN No.</td>
            <td class="py-4 border-b border-gray-700">User Name</td>
            <td class="py-4 border-b border-gray-700">Email</td>
            <td class="py-4 border-b border-gray-700">Create At</td>
            <td class="py-4 border-b border-gray-700">Status</td>
        </tr>
    </thead>
    <tbody>
        <tr class="text-gray-500">
            <td>1</td>
            <td>Saugat Dhakal</td>
            <td>Saugatdhakal5@gmail.com</td>
            <td>2022/10/1</td>
            <td>Completed</td>
        </tr>
    </tbody>
    </table>
  </div>
</template>

<script setup>
import Icon from "../../../assets/icons/icon.vue";

</script>

<style>

</style>
