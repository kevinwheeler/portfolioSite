<template>
    <main ref="main">
        <div class="flex flex-col gap-6">
            <div class="duration-1000 transition data-inviewport from-left">
                <h1 class="text-6xl font-bold text-center">GeoMesa <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">GUI</span></h1>
                <div class="text-l text-gray-400 self-center text-center"><a class="overflow-anywhere" href="https://www.geomesa.org/">www.geomesa.org/</a></div>
            </div>
            <img src="/storage/geomesa-hero.jpeg" alt="Translate Search" class="md:px-32 sm:px-16 mb-16 duration-1000 transition data-inviewport from-right">
            <h2 class="text-5xl mb-6 text-center font-bold duration-[2000ms] transition data-inviewport fade-in">Project <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Description</span></h2>
            <div class="text-2xl">
                <p class="mb-8 text-center">
                    <span class="duration-[2000ms] transition data-inviewport fade-in">Open source contribution taking GeoMesa's shell/stub of a </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">GUI and adding a map to it after also adding OpenLayers to </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">the project.  Then finished functionaliy to show data points </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">on a map and display their info when clicked. Data points </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">were retrieved from a GeoMesa database using Open Geospatial </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">Consortium standard WMS interface calls. </span>
                </p>
            </div>

            <h2 class="whitespace-none text-5xl font-bold duration-[2000ms] transition data-inviewport fade-in">Source<span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent"> Code</span></h2>
            <div class="text-2xl">
                <p class="mb-8 duration-[2000ms] transition data-inviewport fade-in">
                    <a class="underline overflow-anywhere" href="https://github.com/locationtech/geomesa/pull/487">https://github.com/locationtech/geomesa/pull/487</a>
                </p>
            </div>

            <h2 class="whitespace-none text-5xl font-bold duration-[2000ms] transition data-inviewport fade-in">Related <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Projects</span></h2>
            <ul class="mb-48 duration-[2000ms] transition data-inviewport fade-in">
                <li class="text-2xl mb-4 blue-bullet"><router-link class="underline" to="/projects/density-iterator">GeoMesa Temporal Density Iterator</router-link></li>
            </ul>
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
