<template>
    <main>
        <div class="flex flex-col gap-6">
            <h1 class="text-6xl font-bold text-center">GeoMesa <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">GUI</span></h1>
            <div class="text-l text-gray-400 self-center text-center"><a class="overflow-anywhere" href="https://www.geomesa.org/">www.geomesa.org/</a></div>
            <img src="/storage/geomesa-hero.jpeg" alt="Translate Search" class="md:px-32 sm:px-16 mb-16">
            <h2 class="text-5xl mb-6 text-center font-bold">Project <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Description</span></h2>
            <div class="text-2xl">
                <p class="mb-8 text-center">
                    Open source contribution taking GeoMesa's shell/stub of a GUI and adding a map to it after also adding OpenLayers to the project.
                    Then finished functionaliy to show data points on a map and display their info when clicked. Data points were 
                    retrieved from a GeoMesa database using Open Geospatial Consortium standard WMS interface calls.
                </p>
            </div>

            <h2 class="whitespace-none text-5xl font-bold">Source<span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent"> Code</span></h2>
            <div class="text-2xl">
                <p class="mb-8">
                    <a class="underline overflow-anywhere" href="https://github.com/locationtech/geomesa/pull/487">https://github.com/locationtech/geomesa/pull/487</a>
                </p>
            </div>

            <h2 class="whitespace-none text-5xl font-bold">Related <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Projects</span></h2>
            <ul class="mb-48">
                <li class="text-2xl mb-4 blue-bullet"><router-link class="underline" to="/projects/density-iterator">GeoMesa Temporal Density Iterator</router-link></li>
            </ul>
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
