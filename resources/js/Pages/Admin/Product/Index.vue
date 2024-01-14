<template>
    <AdminLayout>
        <ProductList :products="products"></ProductList>
    </AdminLayout>
</template>

<script setup>
import AdminLayout from '../components/AdminLayout.vue';
import ProductList from './ProductList.vue';

defineProps({
    products: Array
})
</script>