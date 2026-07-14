<template>
    <!-- Добавили события @mouseenter и @mouseleave на всю секцию слайдера -->
    <section
        v-if="banners.length > 0"
        class="group relative w-full overflow-hidden bg-gray-100"
        @mouseenter="pauseAutoplay"
        @mouseleave="startAutoplay"
    >

        <!-- Слайды -->
        <div class="flex transition-transform duration-700"
             :style="{ transform: `translateX(-${activeIndex * 100}%)` }">

            <div v-for="(slide, i) in banners" :key="slide.id || i" class="min-w-full flex items-center p-10">
                <div class="w-1/2">
                    <img :src="slide.image_url" class="rounded-xl shadow-lg" :alt="slide.title" />
                </div>

                <div class="w-1/2 pl-10">
                    <span class="text-gray-400 text-sm">
                        {{ String(i + 1).padStart(2, '0') }}/{{ String(banners.length).padStart(2, '0') }}
                    </span>

                    <h1 class="text-4xl font-bold mb-4">{{ slide.title }}</h1>
                    <p class="text-gray-600 mb-6">{{ slide.description }}</p>

                    <a v-if="slide.link_url"
                       :href="slide.link_url"
                       class="inline-block px-6 py-3 bg-pink-500 text-white rounded-lg hover:bg-pink-600 transition-colors">
                        Подробнее
                    </a>
                </div>
            </div>

        </div>

        <!-- Стрелки навигации -->
        <div v-if="banners.length > 1">
            <!-- Стрелка Влево -->
            <button
                @click="prevSlide"
                class="absolute left-4 top-1/2 -translate-y-1/2 z-10 flex h-12 w-12 items-center justify-center rounded-full bg-white/80 text-gray-700 shadow-md backdrop-blur-sm transition-all hover:bg-pink-500 hover:text-white md:opacity-0 md:group-hover:opacity-100"
                aria-label="Предыдущий слайд"
            >
                <svg xmlns="http://w3.org" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
            </button>

            <!-- Стрелка Вправо -->
            <button
                @click="nextSlide"
                class="absolute right-4 top-1/2 -translate-y-1/2 z-10 flex h-12 w-12 items-center justify-center rounded-full bg-white/80 text-gray-700 shadow-md backdrop-blur-sm transition-all hover:bg-pink-500 hover:text-white md:opacity-0 md:group-hover:opacity-100"
                aria-label="Следующий слайд"
            >
                <svg xmlns="http://w3.org" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </button>
        </div>

        <!-- Навигация (точки) -->
        <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-3">
            <button
                v-for="(slide, i) in banners"
                :key="i"
                @click="activeIndex = i"
                class="w-3 h-3 rounded-full transition-colors"
                :class="i === activeIndex ? 'bg-pink-500' : 'bg-gray-300'"
            ></button>
        </div>
    </section>
</template>

<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue'

const props = defineProps({
    banners: {
        type: Array,
        default: () => []
    }
})

const activeIndex = ref(0)
let autoplayInterval = null // Сюда сохраняем ID таймера

// Переключение вперед
const nextSlide = () => {
    activeIndex.value = (activeIndex.value + 1) % props.banners.length
}

// Переключение назад
const prevSlide = () => {
    activeIndex.value = (activeIndex.value - 1 + props.banners.length) % props.banners.length
}

// Функция запуска автопрокрутки
const startAutoplay = () => {
    if (props.banners.length > 1 && !autoplayInterval) {
        autoplayInterval = setInterval(nextSlide, 5000)
    }
}

// Функция остановки автопрокрутки (при ховере)
const pauseAutoplay = () => {
    if (autoplayInterval) {
        clearInterval(autoplayInterval)
        autoplayInterval = null // Сбрасываем переменную
    }
}

onMounted(() => {
    startAutoplay()
})

// Очищаем таймер при уничтожении компонента, чтобы не было утечек памяти
onBeforeUnmount(() => {
    pauseAutoplay()
})
</script>


