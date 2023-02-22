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
            <Card imgSrc="/storage/nothing-but-headlines.jpg" href="/nothing-but-headlines">
                <template v-slot:headline> Nothing But Headlines </template>
                <template v-slot:secondary-headline> 2016 </template>
                <template v-slot:paragraph>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus malesuada nisi tellus, non imperdiet nisi tempor at. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                </template>
            </Card>
            <Card imgSrc="/storage/translate-search.jpg" href="/translate-search">
                <template v-slot:headline> Translate Search </template>
                <template v-slot:secondary-headline> 2023 </template>
                <template v-slot:paragraph>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus malesuada nisi tellus, non imperdiet nisi tempor at. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                </template>
            </Card>
            <Card imgSrc="/storage/nothing-but-headlines.jpg" href="/translate-search">
                <template v-slot:headline> Headline </template>
                <template v-slot:secondary-headline> Secondary Headline </template>
                <template v-slot:paragraph>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus malesuada nisi tellus, non imperdiet nisi tempor at. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.
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
