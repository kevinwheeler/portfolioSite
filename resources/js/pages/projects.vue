<template>
    <main class="mb-48">
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
                    A web application that translates a user provided search query and selection of languages and displays the Google image search results for each language.
                </template>
            </Card>
            <Card imgSrc="/storage/geomesa-card.jpeg" href="/projects/density-iterator">
                <template v-slot:headline> Temporal Density Iterator </template>
                <template v-slot:secondary-headline>www.geomesa.org</template>
                <template v-slot:paragraph>
                    Open source contribution adding functionality to a distributed database to return a histogram of where data points fall temporally.
                </template>
            </Card>
        </div>
        <div class="flex flex-col sm:flex-row gap-6 mb-12">
            <Card imgSrc="/storage/geomesa-card.jpeg" href="/projects/geomesa-gui">
                <template v-slot:headline>GeoMesa GUI</template>
                <template v-slot:secondary-headline>www.geomesa.org</template>
                <template v-slot:paragraph>
                    Open source contribution adding functionality to show data points from a GeoMesa database instance on a map, and to display their info when clicked.
                </template>
            </Card>
            <Card imgSrc="/storage/portfolio-site-card.jpg" href="/projects/portfolio">
                <template v-slot:headline>Portfolio Website</template>
                <template v-slot:secondary-headline>www.kevinwheeler.net</template>
                <template v-slot:paragraph>
                    The very website that you are currently viewing.
                </template>
            </Card>
            <Card imgSrc="/storage/keyboard-smash-card.jpg" href="/projects/baby-keyboard-smash-game">
                <template v-slot:headline>Baby Keyboard Smash Game</template>
                <template v-slot:secondary-headline>www.kevinwheeler.net/baby-keyboard-smash-game</template>
                <template v-slot:paragraph>
                    A simple game for a baby/toddler that displays a firework and makes a sound on keypresses and mouse clicks.
                </template>
            </Card>
        </div>
        <div class="flex flex-col sm:flex-row gap-6 mb-12">
            <Card class="hidden sm:block sm:invisible" imgSrc="/storage/geomesa-card.jpeg" href="/projects/geomesa-gui">
                <template v-slot:headline>GeoMesa GUI</template>
                <template v-slot:secondary-headline>2015</template>
                <template v-slot:paragraph>
                    Open source contribution adding functionality to show data points from a GeoMesa database instance on a map, and to display their info when clicked.
                </template>
            </Card>
            <Card imgSrc="/storage/ubuntu-logo-card.jpg" href="/projects/ubuntu-vps">
                <template v-slot:headline>Ubuntu VPS</template>
                <template v-slot:secondary-headline>2022</template>
                <template v-slot:paragraph>
                    Ubuntu VPS for cheaply hosting as many websites as I would want.
                </template>
            </Card>
            <Card class="hidden sm:block sm:invisible" imgSrc="/storage/geomesa-card.jpeg" href="/projects/geomesa-gui">
                <template v-slot:headline>GeoMesa GUI</template>
                <template v-slot:secondary-headline>2015</template>
                <template v-slot:paragraph>
                    Open source contribution adding functionality to show data points from a GeoMesa database instance on a map, and to display their info when clicked.
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
