<template>
  <div class="flex gap-6">
    <div
      v-for="status in cardStatus"
      :key="status"
      class="flex flex-col p-4 rounded-lg w-1/3 bg-gray-900 gap-y-3"
    >
      <div class="flex items-center gap-x-2">
        <div class="bg-gray-800 p-2 rounded-lg">
          <Icon :name="status.icon" />
        </div>
        <span
          class="text-xm font-medium"
          :class="
            status.status === 'up' ? 'text-accent-green' : 'text-accent-red'
          "
          >{{ status.percentage }}</span
        >
        <div>
          <span
            class="text-sm"
            :class="
              status.status === 'up' ? 'text-accent-green' : 'text-accent-red'
            "
            ><Icon :name="status.status"></Icon
          ></span>
        </div>
      </div>
      <p class="text-white text-4xl">{{status.value}}</p>
      <p class="text-gray-500">{{status.title}}</p>
    </div>
  </div>
</template>

<script setup>
import Icon from "../../../assets/icons/icon.vue";

const cardStatus = [
  {
    title: "Total Revenue",
    percentage: "+32.40%",
    value: "$10,243.00",
    status: "up",
    icon: "coin",
  },
  {
    title: "Total Dish Ordered",
    percentage: "-12.40%",
    value: "23,456",
    status: "down",
    icon: "order",
  },
  {
    title: "Total Customer",
    percentage: "+2.40%",
    value: "1,234",
    status: "up",
    icon: "customer",
  },
];
</script>

<style>
</style>
