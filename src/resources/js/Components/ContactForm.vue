<template>
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">

            <h2 class="text-4xl font-bold text-center mb-12">Get In Touch</h2>

            <div class="max-w-xl mx-auto">

                <form class="space-y-6">

                    <input
                        type="text"
                        placeholder="Full Name"
                        class="w-full p-4 border rounded-lg focus:ring-2 focus:ring-pink-400"
                    />

                    <input
                        type="email"
                        placeholder="Email"
                        class="w-full p-4 border rounded-lg focus:ring-2 focus:ring-pink-400"
                    />

                    <input
                        type="text"
                        placeholder="Phone Number"
                        class="w-full p-4 border rounded-lg focus:ring-2 focus:ring-pink-400"
                    />

                    <textarea
                        placeholder="Message"
                        class="w-full p-4 border rounded-lg h-32 resize-none focus:ring-2 focus:ring-pink-400"
                    ></textarea>

                    <button
                        type="button"
                        class="w-full py-3 bg-pink-500 text-white rounded-lg hover:bg-pink-600 transition"
                    >
                        Send
                    </button>

                </form>

            </div>

            <!-- Map -->
            <div class="mt-16">
                <iframe
                    class="w-full h-96 rounded-xl shadow"
                    src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d4304.689814440771!2d49.231879826587196!3d55.76624401770719!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNTXCsDQ1JzU4LjciTiA0OcKwMTMnNTkuMiJF!5e1!3m2!1sru!2sde!4v1781429915423!5m2!1sru!2sde"
                    allowfullscreen
                    loading="lazy"
                ></iframe>
            </div>

        </div>
    </section>
</template>

<script setup>
</script>
