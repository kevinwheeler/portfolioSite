<template>
    <main ref="main" class="mb-48">
        <h2 class="text-5xl mb-12 font-bold text-center">All <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Projects</span></h2>
        <div class="flex flex-col sm:flex-row gap-6 mb-12 duration-1000 transition data-inviewport sm:from-left">
            <NothingButHeadlinesCard additionalClasses="from-right sm:from-cancel hover:translate-y-1" />
            <TranslateSearchCard     additionalClasses="from-left sm:from-cancel hover:translate-y-1" />
            <DensityIteratorCard     additionalClasses="from-right sm:from-cancel hover:translate-y-1" />
        </div>
        <div class="flex flex-col sm:flex-row gap-6 mb-12 duration-1000 transition data-inviewport sm:from-right">
            <RandomVideoCard   additionalClasses="from-left sm:from-cancel hover:translate-y-1" />
            <GeomesaGuiCard    additionalClasses="from-right sm:from-cancel hover:translate-y-1" />
            <PortfolioSiteCard additionalClasses="from-left sm:from-cancel hover:translate-y-1" />
        </div>
        <div class="flex flex-col sm:flex-row gap-6 mb-12 duration-1000 transition data-inviewport sm:from-left">
            <!-- <KeyboardSmashCard additionalClasses="from-right sm:from-cancel sm:translate-x-1/2 sm:translate-x-1/2-in-viewport" /> -->
            <KeyboardSmashCard additionalClasses="from-right sm:translate-x-1/2+12px translate-y-1-and-translate-x-1/2+12px" />
            <UbuntuVpsCard     additionalClasses="from-left  sm:translate-x-1/2+12px translate-y-1-and-translate-x-1/2+12px" />
            <StubCard          additionalClasses="from-right hidden sm:block sm:invisible"/>
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
