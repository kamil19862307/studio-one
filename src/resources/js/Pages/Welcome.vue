<template>
    <div class="min-h-screen bg-slate-900 text-white flex flex-col items-center justify-center p-6">
        <div class="text-center max-w-xl">
            <h1 class="text-5xl font-extrabold text-indigo-400 mb-4 animate-bounce">
                Ура, это Vue + Inertia!
            </h1>
            <p class="text-slate-400 text-lg mb-8">
                Привет, <span class="text-emerald-400 font-bold">{{ name }}</span>! Мы передали это имя прямо из контроллера Laravel без всяких API-запросов.
            </p>

            <!-- Пример реактивности Vue (интерактив без перезагрузки) -->
            <div class="bg-slate-800 p-6 rounded-2xl shadow-xl border border-slate-700">
                <p class="text-sm text-slate-500 uppercase tracking-wider mb-2">Живой счетчик (работает на Vue)</p>
                <div class="text-4xl font-black text-amber-400 mb-4">{{ count }}</div>
                <button
                    @click="count++"
                    class="bg-indigo-600 hover:bg-indigo-500 active:scale-95 transition text-white font-bold py-2 px-6 rounded-lg shadow-lg"
                >
                    Кликни меня!
                </button>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue'

// Принимаем данные из Laravel контроллера
defineProps({
    name: String
})

// Локальное состояние (переменная счетчика)
const count = ref(0)
</script>
