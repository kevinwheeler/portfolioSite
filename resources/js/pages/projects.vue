<template>
    <main ref="main" class="mb-48">
        <h2 class="text-5xl mb-12 font-bold text-center">All <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Projects</span></h2>
        <div class="flex flex-col sm:flex-row gap-6 mb-12 duration-1000 transition data-inviewport sm:from-left">
            <MultiplayerPaintingCard additionalClasses="from-right sm:from-cancel" />
            <HologramCard     additionalClasses="from-left sm:from-cancel" />
            <DreamStreamCard     additionalClasses="from-right sm:from-cancel" />
        </div>
        <div class="flex flex-col sm:flex-row gap-6 mb-12 duration-1000 transition data-inviewport sm:from-right">
            <StubCard          additionalClasses="from-right hidden sm:block sm:invisible"/>
            <GraffitiCard   additionalClasses="from-left sm:from-cancel" />
            <PortfolioSiteCard additionalClasses="from-left sm:from-cancel" />
        </div>
        <div class="flex flex-col sm:flex-row gap-6 mb-12 duration-1000 transition data-inviewport sm:from-left">
            <!-- <KeyboardSmashCard additionalClasses="from-right sm:from-cancel sm:translate-x-1/2 sm:translate-x-1/2-in-viewport" /> -->
            <KeyboardSmashCard additionalClasses="from-right sm:translate-x-1/2+12px" />
            <UbuntuVpsCard     additionalClasses="from-left  sm:translate-x-1/2+12px" />
            <StubCard          additionalClasses="from-right hidden sm:block sm:invisible"/>
        </div>
    </main>

</template>

<script>
import { ref } from 'vue'
import { getObserver, observeElements, unobserveElements } from '../helpers/observerHelpers.js'
import { onBeforeUnmount, onMounted } from '@vue/runtime-core'

import Card from '../components/card.vue'
import DreamStreamCard from '../cards/DreamStreamCard.vue'
import GeomesaGuiCard from '../cards/GeomesaGuiCard.vue'
import GraffitiCard from '../cards/GraffitiCard.vue'
import HologramCard from '../cards/HologramCard.vue'
import KeyboardSmashCard from '../cards/KeyboardSmashCard.vue'
import MultiplayerPaintingCard from '../cards/MultiplayerPaintingCard.vue'
import PortfolioSiteCard from '../cards/PortfolioSiteCard.vue'
import StubCard from '../cards/StubCard.vue'
import UbuntuVpsCard from '../cards/UbuntuVpsCard.vue'
import { MultiplayerPainting } from '.'

export default {
    
    components: {
    Card,
    DreamStreamCard,
    GeomesaGuiCard,
    GraffitiCard,
    HologramCard,
    KeyboardSmashCard,
    MultiplayerPaintingCard,
    PortfolioSiteCard,
    StubCard,
    UbuntuVpsCard,
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
