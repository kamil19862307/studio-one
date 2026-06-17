<template>
    <header class="bg-white shadow">
        <div class="container mx-auto px-4 py-4 flex items-center justify-between">
            <a href="/" class="flex items-center">
                <img src="/images/logo.png" class="h-12" />
            </a>

            <nav class="hidden md:flex gap-6 text-gray-700">
                <Link href="/" class="hover:text-pink-500">Home</Link>
                <Link href="/about" class="hover:text-pink-500">About</Link>
                <Link href="/services" class="hover:text-pink-500">What we do</Link>
                <Link href="/pricing" class="hover:text-pink-500">Pricing</Link>
                <Link href="/contact" class="hover:text-pink-500">Contact</Link>
            </nav>

            <div class="flex gap-4 text-xl text-gray-600">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-instagram"></i>
                <i class="fa fa-twitter"></i>
            </div>
        </div>
    </header>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
</script>
