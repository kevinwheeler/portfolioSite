<template>
    <main ref="main" class="mb-48">
        <h2 class="text-5xl mb-12 font-bold text-center">All <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Projects</span></h2>
        <div class="flex flex-col sm:flex-row gap-6 mb-12 duration-1000 transition data-inviewport from-left">
            <Card imgSrc="/storage/nothing-but-headlines.jpg" href="/projects/nothing-but-headlines" classes="duration-1000 transition from-left data-inviewport sm:opacity-100 sm:translate-x-0">
                <template v-slot:headline> Nothing But Headlines </template>
                <template v-slot:secondary-headline> www.nothingbutheadlines.lol (EOL) </template>
                <template v-slot:paragraph>
                    A web application for creating fake/funny headlines to be displayed as articles on Facebook.
                </template>
            </Card>
            <Card imgSrc="/storage/translate-search.jpg" href="/projects/translate-search" classes="duration-1000 transition from-right data-inviewport sm:opacity-100 sm:translate-x-0">
                <template v-slot:headline> Translate Search </template>
                <template v-slot:secondary-headline>www.translatesearch.com</template>
                <template v-slot:paragraph>
                    A web application that translates a user provided search query and selection of languages and displays the Google image search results for each language.
                </template>
            </Card>
            <Card imgSrc="/storage/geomesa-card.jpeg" href="/projects/density-iterator" classes="duration-1000 transition from-left data-inviewport sm:opacity-100 sm:translate-x-0">
                <template v-slot:headline> Temporal Density Iterator </template>
                <template v-slot:secondary-headline>www.geomesa.org</template>
                <template v-slot:paragraph>
                    Open source contribution adding functionality to a distributed database to return a histogram of where data points fall temporally.
                </template>
            </Card>
        </div>
        <div class="flex flex-col sm:flex-row gap-6 mb-12 duration-1000 transition data-inviewport from-right">
            <Card imgSrc="/storage/geomesa-card.jpeg" href="/projects/geomesa-gui" classes="duration-1000 transition from-right data-inviewport sm:opacity-100 sm:translate-x-0">
                <template v-slot:headline>GeoMesa GUI</template>
                <template v-slot:secondary-headline>www.geomesa.org</template>
                <template v-slot:paragraph>
                    Open source contribution adding functionality to show data points from a GeoMesa database instance on a map, and to display their info when clicked.
                </template>
            </Card>
            <Card imgSrc="/storage/portfolio-site-card.jpg" href="/projects/portfolio" classes="duration-1000 transition from-left data-inviewport sm:opacity-100 sm:translate-x-0">
                <template v-slot:headline>Portfolio Website</template>
                <template v-slot:secondary-headline>www.kevinwheeler.net</template>
                <template v-slot:paragraph>
                    The very website that you are currently viewing.
                </template>
            </Card>
            <Card imgSrc="/storage/keyboard-smash-card.jpg" href="/projects/baby-keyboard-smash-game" classes="duration-1000 transition from-right data-inviewport sm:opacity-100 sm:translate-x-0">
                <template v-slot:headline>Baby Keyboard Smash Game</template>
                <template v-slot:secondary-headline>www.kevinwheeler.net/baby-keyboard-smash-game</template>
                <template v-slot:paragraph>
                    A simple game for a baby/toddler that displays a firework and makes a sound on keypresses and mouse clicks.
                </template>
            </Card>
        </div>
        <div class="flex flex-col sm:flex-row gap-6 mb-12 duration-1000 transition data-inviewport from-left">
            <Card class="hidden sm:block sm:invisible" imgSrc="/storage/geomesa-card.jpeg" href="/projects/geomesa-gui" classes="duration-1000 transition from-left data-inviewport sm:opacity-100 sm:translate-x-0">
                <template v-slot:headline>GeoMesa GUI</template>
                <template v-slot:secondary-headline>2015</template>
                <template v-slot:paragraph>
                    Open source contribution adding functionality to show data points from a GeoMesa database instance on a map, and to display their info when clicked.
                </template>
            </Card>
            <Card imgSrc="/storage/ubuntu-logo-card.jpg" href="/projects/ubuntu-vps" classes="duration-1000 transition from-right data-inviewport sm:opacity-100 sm:translate-x-0">
                <template v-slot:headline>Ubuntu VPS</template>
                <template v-slot:secondary-headline>2022</template>
                <template v-slot:paragraph>
                    Ubuntu VPS for cheaply hosting personal projects.
                </template>
            </Card>
            <Card class="hidden sm:block sm:invisible" imgSrc="/storage/geomesa-card.jpeg" href="/projects/geomesa-gui" classes="duration-1000 transition from-left data-inviewport sm:opacity-100 sm:translate-x-0">
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
import { getObserver, observeElements, unobserveElements } from '../helpers/observerHelpers.js'
import { onBeforeUnmount, onMounted } from '@vue/runtime-core'

export default {
    
    components: {
        Card
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
