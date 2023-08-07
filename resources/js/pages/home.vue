<template>
    <main ref="main">
        <div class="flex flex-col sm:flex-row items-center gap-6 mx-8">
            <div class="flex-1 sm:w-0 data-inviewport duration-1000 transition from-left">
                <h1 class="text-3xl font-bold mb-6">
                    Hi, I'm <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Andrew</span>  👋
                </h1>
                <p class="text-xl leading-9">
                    I am an AR/VR developer with 6 years of experience in Unity. I specialize in creating immersive and interactive experiences for various platforms and headsets, including but not limited to iOS (ARKit), Android (ARCore), both mobile platforms at once (ARFoundation), Oculus Rift, Oculus Quest 1 and 2, HTC Vive, Pico 3 and 4, Microsoft HoloLens 2, and Magic Leap just to name a few.

                </p>
            </div>
            <img class="sm:w-0 sm:py-2 rounded-3xl from-right duration-1000 transition data-inviewport" style="flex-grow:1" src="/storage/kevin-main.jpg">
        </div>
        <div class="flex flex-col duration-700 transition data-inviewport">
            <!-- <div class="flex justify-between items-center mb-6 transition duration-1000 data-inviewport from-left">
                <h2 class="text-2xl font-bold">Featured <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Projects</span></h2>
                <router-link to="/projects" class="text-lg">View All Projects →</router-link>
            </div> -->
            <div class="flex flex-col mb-12">
                <DreamStreamCard     additionalClasses="from-left"/>
                <MultiplayerPaintingCard additionalClasses="from-left"/>
                <HologramCard     additionalClasses="from-right"/>
                <GraffitiCard   additionalClasses="from-right"/>
            </div>
        </div>
        <div class="duration-[2000ms] transition data-inviewport fade-in">
            <ContactForm/>
        </div>
    </main>

</template>

<script>
import { ref } from 'vue'
import Card from '../components/card.vue'
import ContactForm from '../components/contactForm.vue'
import DreamStreamCard from '../cards/DreamStreamCard.vue'
import GraffitiCard from '../cards/GraffitiCard.vue'
import MultiplayerPaintingCard from '../cards/MultiplayerPaintingCard.vue'
import HologramCard from '../cards/HologramCard.vue'

import { onMounted, onBeforeUnmount } from '@vue/runtime-core'
import { getObserver, observeElements, unobserveElements } from '../helpers/observerHelpers.js'

export default {
    
    components: {
        Card, ContactForm,

        DreamStreamCard,
        GraffitiCard,
        HologramCard,
        MultiplayerPaintingCard,
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
