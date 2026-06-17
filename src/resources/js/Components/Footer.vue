<template>
    <footer class="bg-gray-900 text-gray-300 pt-16 pb-10">
        <div class="container mx-auto px-4">

            <!-- Top info -->
            <div class="text-center mb-10">
                <ul class="space-y-3">
                    <li class="flex justify-center items-center gap-3">
                        <i class="fa fa-map-marker text-pink-500"></i>
                        Passages of Lorem Ipsum available
                    </li>

                    <li class="flex justify-center items-center gap-3">
                        <i class="fa fa-phone text-pink-500"></i>
                        Call: +012334567890
                    </li>

                    <li class="flex justify-center items-center gap-3">
                        <i class="fa fa-envelope text-pink-500"></i>
                        <a href="#" class="hover:text-white">demo@gmail.com</a>
                    </li>
                </ul>
            </div>

            <!-- Footer columns -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-10">

                <div>
                    <h3 class="text-xl font-semibold mb-4 text-white">About</h3>
                    <p class="text-gray-400">
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered le
                    </p>
                </div>

                <div>
                    <h3 class="text-xl font-semibold mb-4 text-white">Nail Salon</h3>
                    <p class="text-gray-400">
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered le
                    </p>
                </div>

                <div>
                    <h3 class="text-xl font-semibold mb-4 text-white">Useful Links</h3>
                    <ul class="space-y-2">
                        <li><Link href="/" class="hover:text-white">Home</Link></li>
                        <li><Link href="/about" class="hover:text-white">About</Link></li>
                        <li><Link href="/services" class="hover:text-white">What we do</Link></li>
                        <li><Link href="/pricing" class="hover:text-white">Pricing</Link></li>
                        <li><Link href="/contact" class="hover:text-white">Contact Us</Link></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xl font-semibold mb-4 text-white">Subscribe</h3>

                    <div class="flex items-center bg-gray-800 rounded-lg overflow-hidden">
                        <input
                            type="text"
                            placeholder="Enter your email"
                            class="flex-1 p-3 bg-transparent text-gray-300 focus:outline-none"
                        />
                        <button class="px-4 py-3 bg-pink-500 hover:bg-pink-600 transition">
                            <i class="fa fa-long-arrow-right text-white"></i>
                        </button>
                    </div>

                    <p class="text-gray-400 mt-3">
                        There are many variations of passages
                    </p>
                </div>

            </div>

            <!-- Copyright -->
            <div class="text-center text-gray-500 mt-12 text-sm">
                © 2019 All Rights Reserved. Design by
                <a href="https://html.design/" class="text-pink-400 hover:text-white">Free Html Templates</a>
                Distributed By
                <a href="https://themewagon.com" class="text-pink-400 hover:text-white">ThemeWagon</a>
            </div>

        </div>
    </footer>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
</script>
