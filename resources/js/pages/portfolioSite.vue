<template>
    <main>
        <div class="flex flex-col gap-6">
            <h1 class="text-6xl font-bold text-center">Portfolio <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Website</span></h1>
            <div class="text-l text-gray-400 self-center text-center"><router-link to="/">www.kevinwheeler.net</router-link></div>
            <img src="/storage/portfolio-site-hero.jpg" alt="Portfolio Site Hero" class="md:px-32 sm:px-16 mb-16">
            <h2 class="text-5xl mb-6 font-bold text-center">Project <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Description</span></h2>
            <div class="text-2xl">
                <p class="mb-10 font-bold text-center">
                    The very website you are looking at currently. I'm So Meta Even This Acronym.
                </p>
                <p class="mb-8">
                    Source code: <a class="underline overflow-anywhere" href="https://github.com/kevinwheeler/portfolioSite">https://github.com/kevinwheeler/portfolioSite</a>
                </p>
            </div>

            <h2 class="whitespace-none text-5xl font-bold">Tech<span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">nologies</span></h2>

            <ul class="mb-8">
                <li class="text-2xl mb-4 list-style-blue-bullet">Ubuntu VPS</li>
                <li class="text-2xl mb-4 list-style-blue-bullet">Laravel</li>
                <li class="text-2xl mb-4 list-style-blue-bullet accent-color">Vue.js</li>
                <li class="text-2xl mb-4 list-style-blue-bullet">Tailwind</li>
                <li class="text-2xl mb-4 list-style-blue-bullet">Laravel + Laravel UI and Included/Related Tech: Vite, Sass, Composer, GuzzleHTTP </li>
                <li class="text-2xl mb-4 list-style-blue-bullet accent-color">MSMTP as sendmail provider for contact form</li>
                <li class="text-2xl mb-4 list-style-blue-bullet">Google ReCAPTCHA</li>
            </ul>

            <h2 class="whitespace-none text-5xl font-bold">Server <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Features</span></h2>

            <ul class="mb-8">
                <li class="text-2xl mb-4 list-style-blue-bullet">Please see the <router-link class="underline" to="/ubuntu-vps">Ubuntu VPS server portfolio page</router-link> for server features.</li>
            </ul>
        </div>
    </main> 
</template>

<script>
import { onMounted } from '@vue/runtime-core'

export default {
    
    components: {
    },
    setup() {
        onMounted(() => {
        })

        return {
        }
    },
    methods: {
    }
}
</script>
