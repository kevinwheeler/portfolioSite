<template>
    <main ref="main">
        <div class="flex flex-col gap-6">
            <div class="duration-1000 transition data-inviewport from-left">
                <h1 class="text-6xl font-bold text-center">Baby Keyboard <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Smash Game</span></h1>
                <div class="text-l text-gray-400 self-center text-center"><a class="overflow-anywhere" href="/baby-keyboard-smash-game">www.kevinwheeler.net/baby-keyboard-smash-game</a></div>
            </div>
            <img src="/storage/keyboard-smash-hero.jpg" alt="Keyboard Smash Screenshot" class="md:px-32 sm:px-16 mb-16 duration-1000 transition data-inviewport from-right">
            <h2 class="text-center text-5xl mb-6 font-bold duration-[2000ms] transition data-inviewport fade-in">Project <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Description</span></h2>
            <div class="text-2xl">
                <p class="text-center mb-8">
                    <span class="duration-[2000ms] transition data-inviewport fade-in">A simple game I quickly made for my son by stitching </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">together free code I found online. I found the firework code </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">and changed it to fire on keypresses and clicks instead of </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">on an interval. I also added a firework sound. I found the </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">code for the grass and sky and added it as well. I then  </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">modified both sets of code to handle window resize events. </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">It was nothing big, and I certainly didn't take the time to </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">refactor the code and clean it up or convert it into using </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">vue components or anything like that.  </span>
                </p>
                <p class="mb-8 duration-[2000ms] transition data-inviewport fade-in">
                    Live website: <a class="underline overflow-anywhere" href="/baby-keyboard-smash-game">https://www.kevinwheeler.net/baby-keyboard-smash-game</a>
                </p>
                <p class="mb-8 duration-[2000ms] transition data-inviewport fade-in">
                    Source code: <a class="underline overflow-anywhere" href="https://github.com/kevinwheeler/portfolioSite/blob/main/resources/views/baby-keyboard-smash.blade.php">https://github.com/kevinwheeler/portfolioSite/blob/main/resources/views/baby-keyboard-smash.blade.php</a>
                </p>
            </div>

            <h2 class="whitespace-none text-5xl font-bold duration-[2000ms] transition data-inviewport fade-in">Video <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Demo</span></h2>

            <div class="flex flex-col text-2xl">
                <p class="mb-8 duration-[2000ms] transition data-inviewport fade-in">
                    Here is a video of my son playing the game I made for him:
                </p>
                <div class="md:px-32 mb-48 duration-[2000ms] transition data-inviewport fade-in">
                    <video class="aspect-video" controls>
                      <source src="/storage/keyboard-smash-memory.mp4" type="video/mp4">
                       Your browser does not support the video tag.
                     </video> 
                </div>
            </div>
        </div>
    </main> 
</template>

<script>
import { ref } from 'vue'
import { getObserver, observeElements, unobserveElements } from '../helpers/observerHelpers.js'
import { onBeforeUnmount, onMounted } from '@vue/runtime-core'

export default {
    
    components: {
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
