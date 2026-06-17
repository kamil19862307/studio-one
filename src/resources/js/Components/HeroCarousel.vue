<template>
    <section class="relative w-full overflow-hidden bg-gray-100">
        <div class="flex transition-transform duration-700"
             :style="{ transform: `translateX(-${activeIndex * 100}%)` }">

            <div v-for="(slide, i) in slides" :key="i" class="min-w-full flex items-center p-10">
                <div class="w-1/2">
                    <img :src="slide.image" class="rounded-xl shadow-lg" />
                </div>

                <div class="w-1/2 pl-10">
                    <span class="text-gray-400 text-sm">{{ slide.number }}</span>
                    <h1 class="text-4xl font-bold mb-4">{{ slide.title }}</h1>
                    <p class="text-gray-600 mb-6">{{ slide.text }}</p>

                    <button class="px-6 py-3 bg-pink-500 text-white rounded-lg hover:bg-pink-600">
                        Get Appointment
                    </button>
                </div>
            </div>

        </div>

        <!-- Навигация -->
        <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-3">
            <button
                v-for="(slide, i) in slides"
                :key="i"
                @click="activeIndex = i"
                class="w-3 h-3 rounded-full"
                :class="i === activeIndex ? 'bg-pink-500' : 'bg-gray-300'"
            ></button>
        </div>
    </section>
</template>

<script setup>
import { ref, onMounted } from 'vue'

const activeIndex = ref(0)

const slides = [
    {
        number: '01/03',
        title: 'Milina nail Salon Creating Beauty',
        text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        image: '/images/banner_ing.jpg'
    },
    {
        number: '02/03',
        title: 'Milina nail Salon Creating Beauty',
        text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        image: '/images/banner_ing.jpg'
    },
    {
        number: '03/03',
        title: 'Milina nail Salon Creating Beauty',
        text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        image: '/images/banner_ing.jpg'
    }
]

onMounted(() => {
    setInterval(() => {
        activeIndex.value = (activeIndex.value + 1) % slides.length
    }, 5000)
})
</script>
