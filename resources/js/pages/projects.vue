<template>
    <main ref="main" class="mb-48">
        <h2 class="text-5xl mb-12 font-bold text-center">All <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Projects</span></h2>
        <div class="flex flex-col gap-6 mb-12 duration-1000 transition data-inviewport">
            <MultiplayerPaintingCard additionalClasses="from-right sm:from-cancel" />
            <HologramCard     additionalClasses="from-left" />
            <DreamStreamCard     additionalClasses="from-right" />
        </div>
    </main>

</template>

<script>
import { ref } from 'vue'
import { getObserver, observeElements, unobserveElements } from '../helpers/observerHelpers.js'
import { onBeforeUnmount, onMounted } from '@vue/runtime-core'

import Card from '../components/card.vue'
import DreamStreamCard from '../cards/DreamStreamCard.vue'
import GraffitiCard from '../cards/GraffitiCard.vue'
import HologramCard from '../cards/HologramCard.vue'
import MultiplayerPaintingCard from '../cards/MultiplayerPaintingCard.vue'
import { MultiplayerPainting } from '.'

export default {
    
    components: {
    Card,
    DreamStreamCard,
    GraffitiCard,
    HologramCard,
    MultiplayerPaintingCard,
    MultiplayerPainting
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
