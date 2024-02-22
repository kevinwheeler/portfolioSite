<template>
    <main ref="main">
        <section aria-label="About me" class="flex flex-col md:flex-row items-center gap-6 mb-8 md:mb-16">
            <div class="flex-1 md:w-0 data-inviewport duration-1000 transition from-left motion-reduce:from-cancel">
                <h1 class="text-5xl md:text-3xl font-bold mb-6 text-center md:text-left">
                    Hi, I'm <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Kevin</span>
                </h1>
                <div class="text-xl leading-9">
                    I'm a full stack web developer and software engineer who graduated with highest honors from The University of Texas at Austin while obtaining a B.S. in Computer Science. I am interested in software development opportunities both inside and outside of web development. I have experience with a variety of technologies including Spring, Laravel, Node.js, React, Backbone.js, Vue.js, Java, JavaScript, Python, C++, Scala, and many others. Two of my values in life are benevolence and rationality.
                </div>
            </div>
            <img class="md:w-0 md:py-2 rounded-3xl md:mr-20 from-right duration-1000 transition motion-reduce:from-cancel data-inviewport hidden md:inline" style="flex-grow:1" src="/storage/kevin-main.jpg" alt="Kevin Wheeler smiling.">
        </section>
        <section aria-label="About Me Video" class="mb-4 md:mb-12 hidden">
          <h2 id="featured-projects" class="text-5xl text-center font-bold pt-12 mb-6 md:mb-10 transition motion-reduce:from-cancel duration-1000 data-inviewport from-right hidden md:block">Intro <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Video</span></h2>
            <div class="md:px-16 lg:px-32">
                <iframe class="aspect-video w-full duration-1000 transition data-inviewport from-right motion-reduce:from-cancel" 
                    src="https://www.youtube.com/embed/uIhnc5dkIjU?modestbranding=1&rel=0&autoplay=1&mute=1&loop=1&controls=1&showinfo=0&fs=0" 
                    title="YouTube video player" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    allowfullscreen
                    autoplay="1"
                    muted="1">
                </iframe>
            </div>
        </section>
        <section aria-label="Portfolio projects" class="mb-20">
          <h2 id="featured-projects" class="text-5xl text-center font-bold pt-12 mb-6 md:mb-10 transition motion-reduce:from-cancel duration-1000 data-inviewport from-left">Featured <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Projects</span></h2>
          <div class="flex flex-col md:flex-row gap-6 mb-24 duration-1000 transition md:motion-reduce:from-cancel data-inviewport md:from-left">
              <DensityIteratorCard     additionalClasses="from-right md:from-cancel motion-reduce:from-cancel" alt="GeoMesa logo"/>
              <NothingButHeadlinesCard additionalClasses="from-left md:from-cancel motion-reduce:from-cancel" alt="Screenshot of Nothing But Headlines app" />
              <TranslateSearchCard     additionalClasses="from-right md:from-cancel motion-reduce:from-cancel" alt="Screenshot of Translate Search app"/>
          </div>
          <div class="flex flex-col md:flex-row gap-6 mb-12 duration-1000 transition data-inviewport md:from-right md:motion-reduce:from-cancel">
              <GeomesaGuiCard    additionalClasses="from-left md:from-cancel motion-reduce:from-cancel" alt="GeoMesa logo"/>
              <RandomVideoCard additionalClasses="from-right md:from-cancel motion-reduce:from-cancel" alt="Screenshot of Andrew\'s portfolio website"/>
              <NotesAppCard   additionalClasses="from-left md:from-cancel motion-reduce:from-cancel" alt="Screenshot of Random Video app" />
          </div>
          <div class="flex flex-col md:flex-row gap-6 mb-12 duration-1000 transition data-inviewport md:from-left md:motion-reduce:from-cancel">
              <AndrewPortfolioCard additionalClasses="from-right md:from-cancel motion-reduce:from-cancel" alt="Screenshot of portfolio website"/>
              <PortfolioSiteCard additionalClasses="from-left md:from-cancel motion-reduce:from-cancel" alt="Screnshot of Baby Keyboard Smash game"/>
              <KeyboardSmashCard additionalClasses="from-right md:from-cancel motion-reduce:from-cancel" alt="Ubuntu logo"/>
          </div>
          <div class="flex flex-col md:flex-row gap-6 mb-12 duration-1000 transition data-inviewport md:from-right md:motion-reduce:from-cancel">
              <StubCard additionalClasses="hidden md:block md:invisible" />
              <UbuntuVpsCard additionalClasses="from-right md:from-cancel motion-reduce:from-cancel" alt="Screenshot of Andrew\'s portfolio website"/>
              <StubCard additionalClasses="hidden md:block md:invisible" />
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
import GeomesaGuiCard from '../cards/GeomesaGuiCard.vue';
import KeyboardSmashCard from '../cards/KeyboardSmashCard.vue';
import NotesAppCard from '../cards/NotesAppCard.vue'
import NothingButHeadlinesCard from '../cards/NothingButHeadlinesCard.vue'
import PortfolioSiteCard from '../cards/PortfolioSiteCard.vue';
import RandomVideoCard from '../cards/RandomVideoCard.vue';
import StubCard from '../cards/StubCard.vue';
import TranslateSearchCard from '../cards/TranslateSearchCard.vue'
import UbuntuVpsCard from '../cards/UbuntuVpsCard.vue';

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
    NotesAppCard,
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
