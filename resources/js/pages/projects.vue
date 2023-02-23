<template>
    <main>
        <h2 class="text-5xl mb-12 font-bold text-center">All <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Projects</span></h2>
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
