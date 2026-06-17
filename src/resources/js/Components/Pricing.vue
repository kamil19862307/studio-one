<template>
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">

            <h2 class="text-4xl font-bold text-center mb-12">Our Pricing</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 max-w-5xl mx-auto">

                <div
                    v-for="(item, i) in pricing"
                    :key="i"
                    class="bg-white p-8 rounded-2xl shadow hover:shadow-xl transition flex flex-col items-center"
                >
                    <div class="text-4xl font-bold text-pink-500 mb-4">
                        ${{ item.price }}
                        <span class="text-base text-gray-500 font-normal">/one day</span>
                    </div>

                    <div class="text-center mb-6">
                        <h3 class="text-xl font-semibold mb-2">{{ item.title }}</h3>
                        <p class="text-gray-600">{{ item.text }}</p>
                    </div>

                    <button
                        class="mt-auto px-6 py-3 bg-pink-500 text-white rounded-lg hover:bg-pink-600 transition"
                    >
                        Book Now
                    </button>
                </div>

            </div>

        </div>
    </section>
</template>

<script setup>
const pricing = [
    {
        price: 20,
        title: 'Regular',
        text: 'Lorem ipsum dolor sit amet, iscing elit, sed do magna'
    },
    {
        price: 30,
        title: 'Standard',
        text: 'Lorem ipsum dolor sit amet, iscing elit, sed do magna'
    },
    {
        price: 40,
        title: 'Premium',
        text: 'Lorem ipsum dolor sit amet, iscing elit, sed do magna'
    }
]
</script>
