<script setup>
import UserLayouts from './Layouts/UserLayouts.vue'

defineProps({
    orders: Array
})
</script>
<template>
    <UserLayouts>

        <div class="relative  max-w-screen-xl py-24 mx-auto overflow-x-auto">
            <table v-show="order.order_items.length > 0" v-for="order in orders" :key="order.id"
                class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-1000 uppercase bg-gray-50 dark:bg-gray-1000 dark:text-gray-600">
                    <tr>
                        <th scope="col" class="px-6 py-3 font-black">
                            Order ID # {{ order.id }}
                        </th>
                    </tr>
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Product name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Brand
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Category
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Quantity
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="item in order.order_items" :key="item.id"
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                           {{item.product.title}}
                        </th>
                        <td class="px-6 py-4">
                           {{item.product.brand.name}}
                        </td>
                        <td class="px-6 py-4">
                            {{item.product.category.name}}
                        </td>
                        <td class="px-6 py-4">
                            {{item.quantity}}
                        </td>
                        <td class="px-6 py-4">
                            ${{item.product.price}}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </UserLayouts></template>