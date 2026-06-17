<template>
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">

            <h2 class="text-4xl font-bold text-center mb-12">Meet Our Experts</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10 max-w-4xl mx-auto">

                <div
                    v-for="(expert, i) in experts"
                    :key="i"
                    class="bg-gray-50 rounded-2xl shadow hover:shadow-xl transition overflow-hidden"
                >
                    <img :src="expert.image" class="w-full h-64 object-cover" />

                    <div class="p-6 text-center">
                        <h3 class="text-xl font-semibold mb-2">{{ expert.name }}</h3>
                        <p class="text-gray-600">{{ expert.text }}</p>
                    </div>
                </div>

            </div>

            <div class="text-center mt-10">
                <button
                    class="px-8 py-3 bg-pink-500 text-white rounded-lg hover:bg-pink-600 transition"
                >
                    Read More
                </button>
            </div>

        </div>
    </section>
</template>

<script setup>
const experts = [
    {
        name: 'Jacob',
        text: 'Lorem ipsum dolor sit amet, iscing elit, sed do magna',
        image: '/images/blog1.jpg'
    },
    {
        name: 'Lonut',
        text: 'Lorem ipsum dolor sit amet, iscing elit, sed do magna',
        image: '/images/blog2.jpg'
    },
    {
        name: 'Irina',
        text: 'Lorem ipsum dolor sit amet, iscing elit, sed do magna',
        image: '/images/blog3.jpg'
    }
]
</script>
