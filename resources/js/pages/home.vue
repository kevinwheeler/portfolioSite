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
        <div class="flex gap-3">
            <Card imgSrc="/storage/nothing-but-headlines.jpg">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus malesuada nisi tellus, non imperdiet nisi tempor at. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.
            </Card>
            <Card imgSrc="/storage/nothing-but-headlines.jpg">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus malesuada nisi tellus, non imperdiet nisi tempor at. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.
            </Card>
            <Card imgSrc="/storage/nothing-but-headlines.jpg">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus malesuada nisi tellus, non imperdiet nisi tempor at. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.
            </Card>
        </div>
    </main>

</template>

<script>
import { ref } from 'vue'
import Card from '../components/card.vue'
import { onMounted } from '@vue/runtime-core'

export default {
    
    components: {
        Card
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
