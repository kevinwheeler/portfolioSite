<template>
    <main>
        <div class="flex flex-col gap-6">
            <h1 class="text-6xl font-bold text-center">Ubuntu <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">VPS</span></h1>
            <div class="text-l text-gray-400 self-center text-center"><router-link to="/">2022</router-link></div>
            <img src="/storage/ubuntu-logo-hero.jpg" alt="Ubuntu VPS Hero" class="md:px-32 sm:px-16 mb-16">
            <h2 class="text-5xl mb-6 font-bold text-center">Project <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Description</span></h2>
            <div class="text-2xl">
                <p class="mb-10 font-bold text-center">
                    An ubuntu VPS hosted by Digital Ocean.
                </p>
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
