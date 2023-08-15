<template>
    <main ref="main">
        <Hero />
        <div class="flex flex-col mb-12">
            <DreamStreamCard />
            <div class="border-b-2 border-gray-600"/>
            <MultiplayerPaintingCard additionalClasses="from-left"/>
            <div class="border-b-2 border-gray-600"/>
            <HologramCard     additionalClasses="from-right"/>
            <div class="border-b-2 border-gray-600"/>
            <GraffitiCard   additionalClasses="from-left"/>
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
import Hero from '../components/hero.vue'
import MultiplayerPaintingCard from '../cards/MultiplayerPaintingCard.vue'
import HologramCard from '../cards/HologramCard.vue'

import { onMounted, onBeforeUnmount } from '@vue/runtime-core'
import { getObserver, observeElements, unobserveElements } from '../helpers/observerHelpers.js'

export default {
    
    components: {
        Card,
        ContactForm,
        DreamStreamCard,
        GraffitiCard,
        Hero,
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
