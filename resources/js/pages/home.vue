<template>
    <main>
        <div class="flex flex-col sm:flex-row items-center gap-6">
            <div class="flex-1">
                <h1 class="text-3xl font-bold">
                    Hi there, I'm <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Kevin</span>  👋
                </h1>
                <p class="mt-6 text-xl leading-9">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus malesuada nisi tellus, non imperdiet nisi tempor at. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                </p>
            </div>
            <img class=" sm:w-0 rounded-3xl sm:mr-20" style="flex-grow:0.3" src="/storage/kevin-laptop-cropped.jpeg">
        </div>
        <h2 class="mb-6 mt-12 text-2xl font-bold">Featured <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Projects</span></h2>
        <div class="flex flex-col sm:flex-row gap-6 mb-12">
            <Card imgSrc="/storage/nothing-but-headlines.jpg" href="/projects/nothing-but-headlines">
                <template v-slot:headline> Nothing But Headlines </template>
                <template v-slot:secondary-headline> www.nothingbutheadlines.lol (EOL) </template>
                <template v-slot:paragraph>
                    A web application for creating fake/funny headlines to be displayed as articles on Facebook.
                </template>
            </Card>
            <Card imgSrc="/storage/translate-search.jpg" href="/projects/translate-search">
                <template v-slot:headline> Translate Search </template>
                <template v-slot:secondary-headline>www.translatesearch.com</template>
                <template v-slot:paragraph>
                    A web application that translates a user provided search query plus selection of languages and displays the Google image search results for each language.
                </template>
            </Card>
            <Card imgSrc="/storage/geomesa-card.jpeg" href="/projects/density-iterator">
                <template v-slot:headline> Temporal Density Iterator </template>
                <template v-slot:secondary-headline> GeoMesa Temporal Density Iterator </template>
                <template v-slot:paragraph>
                    Open source contribution adding functionality to distributed database to return a histogram of where data points fall temporally.
                </template>
            </Card>
        </div>
        <ContactForm />
    </main>

</template>

<script>
import { ref } from 'vue'
import Card from '../components/card.vue'
import ContactForm from '../components/contactForm.vue'
import { onMounted } from '@vue/runtime-core'

export default {
    
    components: {
        Card, ContactForm
    },
    setup() {
        onMounted(() => {
        })

        return {
        }
    },
    methods: {
    }
}
</script>
