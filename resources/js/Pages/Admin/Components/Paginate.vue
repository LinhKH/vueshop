<template>
    <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
        Showing
        <span class="font-semibold text-gray-900 dark:text-white">{{ pagination.from }}-{{ pagination.to }}</span>
        of
        <span class="font-semibold text-gray-900 dark:text-white">{{ pagination.total }}</span>
    </span>
    <ul class="inline-flex items-stretch -space-x-px">
        <li v-for="(link, key) in pagination.links" :key="link.label">
            <Link v-html="link.label" preserve-scroll :href="link.url ?? ''"
                :class="{ 'active': link.active, '!text-gray-300': !link.url }"
                class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
            </Link>
        </li>
    </ul>
</template>


<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    pagination: Object
})
</script>

<style scoped>
.active {
    font-weight: bold;
    background: lightsteelblue;
}
</style>