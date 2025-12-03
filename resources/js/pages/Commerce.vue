<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import Navbar from '@/components/ui/Navbar.vue';
import ProductCard from '@/components/ui/ProductCard.vue';
import HeroSection from '@/components/ui/HeroSection.vue';
</script>

<template>
    <Head title="Tetsu Works" />

    <HeroSection/>
    <ProductCard/>
</template>
