<template>
    <main ref="main">
        <div class="flex flex-col gap-6">
            <div class="duration-1000 transition data-inviewport from-left motion-reduce:from-cancel">
                <h1 class="text-6xl font-bold text-center">GeoMesa Temporal <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Density Iterator</span></h1>
                <div class="text-l text-gray-400 self-center text-center"><a class="overflow-anywhere" href="https://www.geomesa.org/">www.geomesa.org/</a></div>
            </div>
            <img src="/storage/geomesa-hero.jpeg" alt="Translate Search" class="md:px-32 sm:px-16 mb-16 duration-1000 transition data-inviewport from-right motion-reduce:from-cancel">
            <h2 class="text-5xl mb-6 font-bold text-center duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Project <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Description</span></h2>
            <div class="text-2xl">
                <p class="mb-10 font-bold text-center duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">
                    Open source contribution adding functionality to a distributed database to return a histogram of where data points fall temporally.
                </p>
                <p class="mb-8 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Utilizes the distributed nature of Accumulo (built on </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Bigtable) to achieve scalability. In collaboration with </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">other co-authors, we programmed each database node to </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">process its local set of data, tallying up how many data </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">point's timestamps fell into a variety of different time </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">slots, and then this "temporal histogram" is returned to the </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">central server upstream to be reduced (combined) into a </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">single histogram representing the time series data of the </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">entire dataset. Thus, a user could easily see how many data </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">points occured at different points in time for their entire </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">dataset. </span>
                </p>
            </div>

            <h2 class="whitespace-none text-5xl font-bold duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Source<span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent"> Code</span></h2>

            <div class="text-2xl">
                <p class="mb-8 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">
                    <a class="underline overflow-anywhere" href="https://github.com/locationtech/geomesa/pull/346">www.github.com/locationtech/geomesa/pull/346</a> *
                </p>
                <p class="mb-8 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">
                    <a class="underline overflow-anywhere" href="https://github.com/locationtech/geomesa/pull/501">www.github.com/locationtech/geomesa/pull/501</a>
                </p>
                <p class="mb-2 accent-color duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">
                    * Branch was squashed to one commit and committed using co-author's Github account. Non-squashed branch with my contributions can be found here: 
                </p>
                <p class="mb-8 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">
                    <a class="underline overflow-anywhere" href="https://github.com/kevinwheeler/geomesa/commits/tdi">www.github.com/kevinwheeler/geomesa/commits/tdi</a>
                </p>
            </div>

            <h2 class="whitespace-none text-5xl font-bold duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Additional <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Features</span></h2>
            <div class="text-2xl">
                <p class="text-3xl font-bold duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">
                    In addition to the core feature implemented, my co-authors and I also:
                </p>
            </div>

            <ul class="mb-8">
                <li class="text-2xl mb-4 blue-bullet duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Added a test suite of tests for our new functionality.</li>
                <li class="text-2xl mb-4 blue-bullet accent-color duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">
                    In addition to the regular programmatic interface, support was later added to access our temporal density iterator through a
                    WPS (Web Processing Service) interface: an Open Geospatial Consortium interface standard allowing interoperability with other 
                    GIS software such as GeoServer.
                </li>
            </ul>

            <h2 class="whitespace-none text-5xl font-bold duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Related <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Projects</span></h2>

            <ul class="mb-48">
                <li class="text-2xl mb-4 blue-bullet duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none"><router-link class="underline" to="/projects/geomesa-gui">GeoMesa GUI</router-link></li>
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
