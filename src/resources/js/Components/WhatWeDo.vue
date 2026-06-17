<template>
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12">What We Do</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 max-w-5xl mx-auto">
                <div
                    v-for="(item, i) in items"
                    :key="i"
                    class="bg-gray-50 p-6 rounded-xl shadow hover:shadow-lg transition"
                >
                    <img :src="item.icon" class="h-16 mx-auto mb-4" />

                    <h3 class="text-xl font-semibold text-center mb-2">
                        {{ item.title }}
                    </h3>

                    <p class="text-gray-600 text-center">
                        {{ item.text }}
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
const items = [
    {
        icon: '/images/weicon1.png',
        title: 'Nail Art',
        text: 'Lorem ipsum dolor sit amet, consectetur'
    },
    {
        icon: '/images/weicon2.png',
        title: 'Manicure',
        text: 'Lorem ipsum dolor sit amet, consectetur'
    },
    {
        icon: '/images/weicon3.png',
        title: 'Pedicure',
        text: 'Lorem ipsum dolor sit amet, consectetur'
    },
    {
        icon: '/images/weicon4.png',
        title: 'Paraffin wax',
        text: 'Lorem ipsum dolor sit amet, consectetur'
    }
]
</script>
