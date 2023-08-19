<template>
    <main ref="main">
        <Hero />
        <div class="flex flex-col justify-center mb-12">
            <MultiplayerPaintingCard additionalClasses="from-left"/>
            <HologramCard     additionalClasses="from-right"/>
            <GraffitiCard   additionalClasses="from-left"/>
            <AboutMe/>
        </div>
        <div class="duration-[2000ms] transition data-inviewport fade-in">
            <ContactForm/>
        </div>
    </main>

</template>

<script>
import { ref } from 'vue'
import AboutMe from '../components/aboutMe.vue'
import Card from '../components/card.vue'
import ContactForm from '../components/contactForm.vue'
import GraffitiCard from '../cards/GraffitiCard.vue'
import Hero from '../components/hero.vue'
import MultiplayerPaintingCard from '../cards/MultiplayerPaintingCard.vue'
import HologramCard from '../cards/HologramCard.vue'

import { onMounted, onBeforeUnmount } from '@vue/runtime-core'
import { getObserver, observeElements, unobserveElements } from '../helpers/observerHelpers.js'

export default {
    
    components: {
        AboutMe,
        Card,
        ContactForm,
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
