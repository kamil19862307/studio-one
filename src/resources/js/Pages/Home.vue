<template>
    <Head :title="title" />

    <MainLayout>

        <HeroCarousel />
        <WhatWeDo />
        <AboutUs />
        <Pricing />
        <Experts />
        <ContactForm />
        <Footer />

    </MainLayout>
</template>

<script setup>
import MainLayout from '../Layouts/MainLayout.vue'
import HeroCarousel from '../Components/HeroCarousel.vue'
import WhatWeDo from '../Components/WhatWeDo.vue'
import AboutUs from '../Components/AboutUs.vue'
import Pricing from "../Components/Pricing.vue"
import Experts from "../Components/Experts.vue"
import ContactForm from "../Components/ContactForm.vue"
import Footer from "../Components/Footer.vue"

import {Head} from '@inertiajs/vue3'

// Принимаем данные из Laravel контроллера
defineProps({
    title: String,
})
</script>


