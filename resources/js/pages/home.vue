<template>
    <main ref="main">
        <section aria-label="About me" class="flex flex-col md:flex-row items-center gap-6 md:mb-8">
            <div class="flex-1 md:w-0 data-inviewport duration-1000 transition from-left motion-reduce:from-cancel">
                <h1 class="text-5xl md:text-3xl font-bold mb-6">
                    Hi, I'm <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Kevin</span>
                </h1>
                <div class="text-xl leading-9">
                    I'm a full stack web developer and software engineer who graduated with highest honors from The University of Texas at Austin while obtaining a B.S. in Computer Science. I am interested in software development opportunities both inside and outside of web development. I have experience with a variety of technologies including Spring, Laravel, Node.js, React, Backbone.js, Vue.js, Java, JavaScript, Python, C++, Scala, and many others. Two of my values in life are benevolence and rationality.
                </div>
            </div>
            <img class="md:w-0 md:py-2 rounded-3xl md:mr-20 from-right duration-1000 transition motion-reduce:from-cancel data-inviewport" style="flex-grow:1" src="/storage/kevin-main.jpg" alt="Kevin Wheeler smiling.">
        </section>
        <section aria-label="Portfolio projects" class="mb-20">
            <h2 id="featured-projects" class="text-5xl text-center font-bold pt-12 mb-6 md:mb-10 transition motion-reduce:from-cancel duration-1000 data-inviewport from-left md:from-cancel">Featured <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Projects</span></h2>
          <div class="flex flex-col md:flex-row gap-6 mb-24 duration-1000 transition md:motion-reduce:from-cancel data-inviewport md:from-left">
              <DensityIteratorCard     additionalClasses="from-right md:from-cancel motion-reduce:from-cancel" alt="GeoMesa logo"/>
              <NothingButHeadlinesCard additionalClasses="from-left md:from-cancel motion-reduce:from-cancel" alt="Screenshot of Nothing But Headlines app" />
              <TranslateSearchCard     additionalClasses="from-right md:from-cancel motion-reduce:from-cancel" alt="Screenshot of Translate Search app"/>
          </div>
          <div class="flex flex-col md:flex-row gap-6 mb-12 duration-1000 transition data-inviewport md:from-right md:motion-reduce:from-cancel">
              <GeomesaGuiCard    additionalClasses="from-left md:from-cancel motion-reduce:from-cancel" alt="GeoMesa logo"/>
              <AndrewPortfolioCard additionalClasses="from-right md:from-cancel motion-reduce:from-cancel" alt="Screenshot of Andrew\'s portfolio website"/>
              <RandomVideoCard   additionalClasses="from-left md:from-cancel motion-reduce:from-cancel" alt="Screenshot of Random Video app" />
          </div>
          <div class="flex flex-col md:flex-row gap-6 mb-12 duration-1000 transition data-inviewport md:from-left md:motion-reduce:from-cancel">
              <!-- <KeyboardSmashCard additionalClasses="from-right md:from-cancel md:translate-x-1/2 md:translate-x-1/2-in-viewport" /> -->
              <PortfolioSiteCard additionalClasses="from-right md:from-cancel motion-reduce:from-cancel" alt="Screenshot of portfolio website"/>
              <KeyboardSmashCard additionalClasses="from-left md:from-cancel motion-reduce:from-cancel" alt="Screnshot of Baby Keyboard Smash game"/>
              <UbuntuVpsCard     additionalClasses="from-right md:from-cancel motion-reduce:from-cancel" alt="Ubuntu logo"/>
          </div>
        </section>
        <section aria-label="Contact info and form" class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">
            <ContactForm/>
        </section>
    </main>

</template>

<script>
import { ref } from 'vue'
import AndrewPortfolioCard from '../cards/AndrewPortfolioCard.vue'
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
    AndrewPortfolioCard,
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
