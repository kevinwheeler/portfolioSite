<template>
    <main ref="main">
        <section aria-label="About me" class="flex flex-col md:flex-row items-center gap-6 md:mb-8">
            <div class="flex-1 md:w-0 data-inviewport duration-1000 transition from-left">
                <h1 class="text-5xl md:text-3xl font-bold mb-6">
                    Hi, I'm <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Kevin</span>
                </h1>
                <div aria-label="About me paragraph" class="text-xl leading-9">
                    I'm a full stack web developer and software engineer who graduated with highest honors from The University of Texas at Austin while obtaining a B.S. in Computer Science. I am interested in software development opportunities both inside and outside of web development. I have experience with a variety of technologies including Spring, Laravel, Node.js, React, Backbone.js, Vue.js., Java, JavaScript, Python, C++, Scala, and many others. Two of my values in life are benevolence and rationality.
                </div>
            </div>
            <img class="md:w-0 md:py-2 rounded-3xl md:mr-20 from-right duration-1000 transition data-inviewport" style="flex-grow:1" src="/storage/kevin-main.jpg" alt="Kevin Wheeler smiling.">
        </section>
        <section aria-label="Portfolio projects" class="mb-20">
          <header id="featured-projects" class="flex justify-center items-center pt-12 mb-6 md:mb-10 transition duration-1000 data-inviewport from-left md:from-cancel">
              <h2 class="text-5xl font-bold">Featured <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Projects</span></h2>
          </header>
          <div aria-label="First project set" class="flex flex-col md:flex-row gap-6 mb-24 duration-1000 transition data-inviewport md:from-left">
              <NothingButHeadlinesCard additionalClasses="from-right md:from-cancel" />
              <TranslateSearchCard     additionalClasses="from-left md:from-cancel" />
              <DensityIteratorCard     additionalClasses="from-right md:from-cancel" />
          </div>
          <div aria-label="Second project set" class="flex flex-col md:flex-row gap-6 mb-12 duration-1000 transition data-inviewport md:from-right">
              <RandomVideoCard   additionalClasses="from-left md:from-cancel" />
              <GeomesaGuiCard    additionalClasses="from-right md:from-cancel" />
              <PortfolioSiteCard additionalClasses="from-left md:from-cancel" />
          </div>
          <div aria-label="Third project set" class="flex flex-col md:flex-row gap-6 mb-12 duration-1000 transition data-inviewport md:from-left">
              <!-- <KeyboardSmashCard additionalClasses="from-right md:from-cancel md:translate-x-1/2 md:translate-x-1/2-in-viewport" /> -->
              <KeyboardSmashCard additionalClasses="from-right md:translate-x-1/2+12px md:from-cancel" />
              <UbuntuVpsCard     additionalClasses="from-left  md:translate-x-1/2+12px md:from-cancel" />
              <StubCard          additionalClasses="from-right hidden md:block md:invisible"/>
          </div>
        </section>
        <section aria-label="Contact info and form" class="duration-[2000ms] transition data-inviewport fade-in">
            <ContactForm/>
        </section>
    </main>

</template>

<script>
import { ref } from 'vue'
import Card from '../components/card.vue'
import ContactForm from '../components/contactForm.vue'
import DensityIteratorCard from '../cards/DensityIteratorCard.vue'
import NothingButHeadlinesCard from '../cards/NothingButHeadlinesCard.vue'
import TranslateSearchCard from '../cards/TranslateSearchCard.vue'
import RandomVideoCard from '../cards/RandomVideoCard.vue';
import KeyboardSmashCard from '../cards/KeyboardSmashCard.vue';
import StubCard from '../cards/StubCard.vue';
import UbuntuVpsCard from '../cards/UbuntuVpsCard.vue';
import PortfolioSiteCard from '../cards/PortfolioSiteCard.vue';
import GeomesaGuiCard from '../cards/GeomesaGuiCard.vue';

import { onMounted, onBeforeUnmount } from '@vue/runtime-core'
import { getObserver, observeElements, unobserveElements } from '../helpers/observerHelpers.js'

export default {
    
    components: {
        Card,
        ContactForm,
        DensityIteratorCard,
        GeomesaGuiCard,
        KeyboardSmashCard,
        NothingButHeadlinesCard,
        PortfolioSiteCard,
        RandomVideoCard,
        StubCard,
        TranslateSearchCard,
        UbuntuVpsCard,
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
