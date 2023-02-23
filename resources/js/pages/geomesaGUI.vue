<template>
    <main>
        <div class="flex flex-col gap-6">
            <h1 class="text-6xl font-bold text-center">GeoMesa <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">GUI</span></h1>
            <div class="text-l text-gray-400 self-center text-center"><a href="https://www.geomesa.org/">www.geomesa.org/</a></div>
            <img src="/storage/geomesa-hero.jpeg" alt="Translate Search" class="md:px-32 sm:px-16 mb-16">
            <h2 class="text-5xl mb-6 font-bold text-center">Project <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Description</span></h2>
            <div class="text-2xl">
                <p class="mb-10 font-bold text-center">
                    Open source contribution adding functionality to distributed database to return a histogram of where data points fall temporally.
                </p>
                <p class="mb-8">
                    Utilizes the distributed nature of Accumulo to achieve scalability. In collaboration with other co-authors, we programmed each database node to process its local set of data, tallying up how many data point's timestamps fell into a variety of different time slots, and then this "temporal histogram" would be returned to the central server upstream to be reduced (combined) into a single histogram representing the time series data of the entire dataset. Thus, a user could easily see how many data points occured at different points in time for their entire dataset.
                </p>
            </div>

            <h2 class="whitespace-none text-5xl font-bold">Source<span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent"> Code</span></h2>

            <div class="text-2xl">
                <p class="mb-8">
                    <a class="underline" href="https://github.com/locationtech/geomesa/pull/346">www.github.com/locationtech/geomesa/pull/346</a> *
                </p>
                <p class="mb-8">
                    <a class="underline" href="https://github.com/locationtech/geomesa/pull/501">www.github.com/locationtech/geomesa/pull/501</a>
                </p>
                <p class="mb-2 accent-color">
                    * Branch was squashed to one commit and committed using co-author's Github account. Non-squashed branch with my contributions can be found here: 
                </p>
                <p class="mb-8">
                    <a class="underline" href="https://github.com/kevinwheeler/geomesa/commits/tdi">www.github.com/kevinwheeler/geomesa/commits/tdi</a>
                </p>
            </div>

            <h2 class="whitespace-none text-5xl font-bold">Additional <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Features</span></h2>
            <div class="text-2xl">
                <p class="text-3xl font-bold">
                    In addition to the core feature implemented, my co-author and I also:
                </p>
            </div>

            <ul class="mb-8">
                <li class="text-2xl mb-4 list-style-blue-bullet">Added a test suite of tests for our new functionality.</li>
                <li class="text-2xl mb-4 list-style-blue-bullet accent-color">
                    In addition to the regular programmatic interface, we later added support to access our temporal density iterator through a
                    WPS (Web Processing Service) interface, an Open Geospatial Consortium interface standard allowing interoperability with other 
                    GIS software, such as GeoServer.
                </li>
            </ul>

            <h2 class="whitespace-none text-5xl font-bold">Related <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Projects</span></h2>

            <ul class="mb-48">
                <li class="text-2xl mb-4 list-style-blue-bullet"><router-link class="underline" to="/projects/geomesa-gui">GeoMesa GUI</router-link></li>
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
