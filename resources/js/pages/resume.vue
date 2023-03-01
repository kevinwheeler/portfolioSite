<template>
    <main>
        <div class="flex flex-col gap-6">
            <h1 class="text-6xl font-bold text-center">Rés<span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">umé</span></h1>
            <div class="text-l text-gray-400 self-center text-center">Last Updated March 2023</div>
            <div class="w-full mb-12" id="adobe-dc-view"></div>
            <!-- <embed class="w-full min-h-screen" src="https://drive.google.com/viewerng/
viewer?embedded=true&url=https://www.kevinwheeler.net/storage/kevin-wheeler-resume.pdf"> -->
            <a href="/storage/kevin-wheeler-resume.pdf" class="w-full self-center px-6 py-2.5 mb-24 text-center text-white font-medium text-xs
            leading-tight uppercase rounded shadow-md bg-gradient-to-br
            from-sky-500 to-blue-800 hover:from-sky-600 hover:to-sky-900
            hover:shadow-lg focus:from-sky-600 focus:to-sky-900 focus:shadow-lg
            focus:outline-none focus:ring-0 active:from-sky-700
            active:to-sky-900 active:shadow-lg transition duration-150
            ease-in-out">Download</a>
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
