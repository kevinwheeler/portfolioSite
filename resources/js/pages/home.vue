<template>
    <main ref="main">
        <div class="flex flex-col sm:flex-row items-center gap-6 mb-12">
            <div class="flex-1 sm:w-0 data-inviewport duration-1000 transition from-left">
                <h1 class="text-3xl font-bold mb-6">
                    Hi, I'm <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Kevin</span>  👋
                </h1>
                <p class="text-xl leading-9">
                    I'm a full stack web developer and software engineer who graduated with highest honors from The University of Texas at Austin while obtaining a B.S. in Computer Science. I am interested in software development opportunities both inside and outside of web development. I have experience with a variety of technologies including Laravel, Node.js, Backbone.js, Vue.js., Java, Python, C++, and many others. Two of my values in life are benevolence and rationality.
                </p>
            </div>
            <img class="sm:w-0 sm:py-2 rounded-3xl sm:mr-20 from-right duration-1000 transition data-inviewport" style="flex-grow:1" src="/storage/kevin-main.jpg">
        </div>
        <div class="flex flex-col duration-700 transition data-inviewport sm:from-left">
            <div class="flex justify-between items-center mb-6 transition duration-1000 data-inviewport from-left sm:from-cancel">
                <h2 class="text-2xl font-bold">Featured <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Projects</span></h2>
                <router-link to="/projects" class="text-lg">View All Projects →</router-link>
            </div>
            <div class="flex flex-col sm:flex-row gap-6 mb-12">
                <NothingButHeadlinesCard additionalClasses="from-left sm:from-cancel"/>
                <TranslateSearchCard     additionalClasses="from-right sm:from-cancel"/>
                <DensityIteratorCard     additionalClasses="from-left sm:from-cancel"/>
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
import DensityIteratorCard from '../cards/DensityIteratorCard.vue'
import NothingButHeadlinesCard from '../cards/NothingButHeadlinesCard.vue'
import TranslateSearchCard from '../cards/TranslateSearchCard.vue'

import { onMounted, onBeforeUnmount } from '@vue/runtime-core'
import { getObserver, observeElements, unobserveElements } from '../helpers/observerHelpers.js'

export default {
    
    components: {
        Card, ContactForm,

        DensityIteratorCard,
        NothingButHeadlinesCard,
        TranslateSearchCard
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
