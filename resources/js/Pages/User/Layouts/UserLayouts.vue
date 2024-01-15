<template>
    <Navbar />

    <slot></slot>

    <Footer />
</template>

<script setup>
import { onMounted } from 'vue';
import { initFlowbite } from 'flowbite';
import Navbar from './Navbar.vue';
import Footer from './Footer.vue';

// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
})


</script>