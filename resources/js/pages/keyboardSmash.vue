<template>
    <main>
        <div class="flex flex-col gap-6">
            <h1 class="text-6xl font-bold text-center">Baby Keyboard <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Smash Game</span></h1>
            <div class="text-l text-gray-400 self-center text-center"><a href="/baby-keyboard-smash-game">www.kevinwheeler.net/baby-keyboard-smash-game</a></div>
            <img src="/storage/keyboard-smash-hero.jpg" alt="Keyboard Smash Screenshot" class="md:px-32 sm:px-16 mb-16">
            <h2 class="text-5xl mb-6 font-bold">Project <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Description</span></h2>
            <div class="text-2xl">
                <p class="mb-8">
                    A simple game I quickly made for my son by stitching
                    together free code I found online. I found the firework code
                    and changed it to fire on keypresses and clicks instead of
                    on an interval. I also added a firework sound. I found the
                    code for the grass and sky and added it as well. Then I
                    modified both sets of code to handle window resize events.
                    It was nothing big, and I certainly didn't take the time to
                    refactor the code and clean it up or convert it into using
                    vue components or anything like that. 
                </p>
                <p class="mb-8">
                    Live website: <a class="underline" href="/baby-keyboard-smash-game">https://www.kevinwheeler.net/baby-keyboard-smash-game</a>
                </p>
                <p class="mb-8">
                    Source code: <a class="underline" href="https://github.com/kevinwheeler/portfolioSite/blob/main/resources/views/baby-keyboard-smash.blade.php">https://github.com/kevinwheeler/portfolioSite/blob/main/resources/views/baby-keyboard-smash.blade.php</a>
                </p>
            </div>

            <h2 class="whitespace-none text-5xl font-bold">Video <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Demo</span></h2>

            <div class="flex flex-col text-2xl">
                <p class="mb-8">
                    Here is a video of my son playing the game I made for him:
                </p>
                <div class="md:px-32 mb-48">
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
import { onMounted } from '@vue/runtime-core'

export default {
    
    components: {
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
