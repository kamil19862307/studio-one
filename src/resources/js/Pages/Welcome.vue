<template>
    <Head :title="title" />

    <div class="min-h-screen bg-slate-900 text-white flex flex-col items-center justify-center p-6">
        <div class="text-center max-w-xl">
            <h1 class="text-5xl font-extrabold text-indigo-400 mb-4 animate-bounce">
                Ура, это Vue + Inertia!
            </h1>
            <p class="text-slate-400 text-lg mb-8">
                Привет, <span class="text-emerald-400 font-bold">{{ name }}</span>! Мы передали это имя прямо из контроллера Laravel без всяких API-запросов.
            </p>

            <!-- Список пользователей из MySQL -->
            <div class="bg-slate-800 p-6 rounded-2xl shadow-xl border border-slate-700 text-left mb-6">
                <h2 class="text-xl font-bold text-emerald-400 mb-4 flex items-center gap-2">
                    📁 Пользователи из базы
                </h2>

                <!-- Если пользователи есть -->
                <ul v-if="users.length > 0" class="divide-y divide-slate-700">
                    <li v-for="user in users" :key="user.id" class="py-3 flex justify-between items-center">
                        <div>
                            <p class="font-medium text-slate-200">{{ user.name }}</p>
                            <p class="text-sm text-slate-400">{{ user.email }}</p>
                        </div>
                        <span class="text-xs bg-slate-700 text-slate-300 px-2 py-1 rounded">ID: {{ user.id }}</span>
                    </li>
                </ul>

                <!-- Если база пустая -->
                <p v-else class="text-slate-400 text-sm text-center py-4">
                    В таблице users пока нет записей. Запустите сидер или добавьте пользователя!
                </p>
            </div>

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
import {Head} from "@inertiajs/vue3";

// Принимаем данные из Laravel контроллера
defineProps({
    title: String,
    name: String,
    users: Array,
})

// Локальное состояние (переменная счетчика)
const count = ref(0)
</script>
