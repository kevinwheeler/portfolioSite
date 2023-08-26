<!-- TODO if we ever use this page again, implement motion-reduced:cancel-stuff -->
<template>
    <main ref="main" class="mb-48">
        <h2 class="text-5xl mb-12 font-bold text-center">All <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Projects</span></h2>
        <div class="flex flex-col md:flex-row gap-6 mb-12 duration-1000 transition data-inviewport md:from-left">
            <NothingButHeadlinesCard additionalClasses="from-right md:from-cancel" />
            <TranslateSearchCard     additionalClasses="from-left md:from-cancel" />
            <DensityIteratorCard     additionalClasses="from-right md:from-cancel" />
        </div>
        <div class="flex flex-col md:flex-row gap-6 mb-12 duration-1000 transition data-inviewport md:from-right">
            <RandomVideoCard   additionalClasses="from-left md:from-cancel" />
            <GeomesaGuiCard    additionalClasses="from-right md:from-cancel" />
            <PortfolioSiteCard additionalClasses="from-left md:from-cancel" />
        </div>
        <div class="flex flex-col md:flex-row gap-6 mb-12 duration-1000 transition data-inviewport md:from-left">
            <!-- <KeyboardSmashCard additionalClasses="from-right md:from-cancel md:translate-x-1/2 md:translate-x-1/2-in-viewport" /> -->
            <KeyboardSmashCard additionalClasses="from-right md:translate-x-1/2+12px md:from-cancel" />
            <UbuntuVpsCard     additionalClasses="from-left  md:translate-x-1/2+12px md:from-cancel" />
            <StubCard          additionalClasses="from-right hidden md:block md:invisible"/>
        </div>
    </main>

</template>

<script>
import { ref } from 'vue'
import { getObserver, observeElements, unobserveElements } from '../helpers/observerHelpers.js'
import { onBeforeUnmount, onMounted } from '@vue/runtime-core'

import Card from '../components/card.vue'
import DensityIteratorCard from '../cards/DensityIteratorCard.vue'
import GeomesaGuiCard from '../cards/GeomesaGuiCard.vue'
import KeyboardSmashCard from '../cards/KeyboardSmashCard.vue'
import NothingButHeadlinesCard from '../cards/NothingButHeadlinesCard.vue'
import PortfolioSiteCard from '../cards/PortfolioSiteCard.vue'
import RandomVideoCard from '../cards/RandomVideoCard.vue'
import StubCard from '../cards/StubCard.vue'
import TranslateSearchCard from '../cards/TranslateSearchCard.vue'
import UbuntuVpsCard from '../cards/UbuntuVpsCard.vue'

export default {
    
    components: {
    Card,
    DensityIteratorCard,
    GeomesaGuiCard,
    KeyboardSmashCard,
    NothingButHeadlinesCard,
    PortfolioSiteCard,
    RandomVideoCard,
    StubCard,
    TranslateSearchCard,
    UbuntuVpsCard
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
