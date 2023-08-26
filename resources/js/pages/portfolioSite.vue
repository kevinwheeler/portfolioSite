<template>
    <main ref="main">
        <div class="flex flex-col gap-6">
            <div class="duration-1000 transition data-inviewport from-left motion-reduce:from-cancel">
                <h1 class="text-6xl font-bold text-center">Portfolio <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Website</span></h1>
                <div class="text-l text-gray-400 self-center text-center"><router-link to="/">www.kevinwheeler.net</router-link></div>
            </div>
            <img src="/storage/portfolio-site-hero.jpg" alt="Portfolio Site Hero" class="md:px-32 sm:px-16 mb-16 duration-1000 transition data-inviewport from-right motion-reduce:from-cancel">
            <h2 class="text-5xl mb-6 font-bold text-center duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Project <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Description</span></h2>
            <div class="text-2xl">
                <p class="mb-10 font-bold text-center duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">
                    The very website you are looking at currently. I'm So Meta Even This Acronym.
                </p>
                <p class="mb-8 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">
                    Source code: <a class="underline overflow-anywhere" href="https://github.com/kevinwheeler/portfolioSite">https://github.com/kevinwheeler/portfolioSite</a>
                </p>
            </div>

            <h2 class="whitespace-none text-5xl font-bold duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Tech<span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">nologies</span></h2>

            <ul class="mb-8">
                <li class="text-2xl mb-4 blue-bullet-500 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Ubuntu VPS</li>
                <li class="text-2xl mb-4 blue-bullet-500 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Laravel</li>
                <li class="text-2xl mb-4 blue-bullet-500 accent-color duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Vue.js</li>
                <li class="text-2xl mb-4 blue-bullet-500 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Tailwind</li>
                <li class="text-2xl mb-4 blue-bullet-500 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Laravel + Laravel UI and Included/Related Tech: Vite, Sass, Composer, GuzzleHTTP </li>
                <li class="text-2xl mb-4 blue-bullet-500 accent-color duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">MSMTP as sendmail provider for contact form</li>
                <li class="text-2xl mb-4 blue-bullet-500 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Google ReCAPTCHA to protect email/contact form</li>
            </ul>

            <h2 class="whitespace-none text-5xl font-bold duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Server <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Features</span></h2>

            <ul class="mb-48">
                <li class="text-2xl mb-4 blue-bullet-500 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Please see the <router-link class="underline" to="/projects/ubuntu-vps">Ubuntu VPS server portfolio page</router-link> for server features.</li>
            </ul>
        </div>
    </main> 
</template>

<script>
import { ref } from 'vue'
import { getObserver, observeElements, unobserveElements } from '../helpers/observerHelpers.js'
import { onBeforeUnmount, onMounted } from '@vue/runtime-core'

export default {
    
    components: {
    },
    setup() {
        const main = ref(null);
        const obs = getObserver();

        onMounted(() => {
            observeElements(obs, {}, main.value);
        })

        onBeforeUnmount(() => {
            unobserveElements(obs, main.value);
        })

        return {
            main,
        }
    },
    methods: {
    }
}
</script>
