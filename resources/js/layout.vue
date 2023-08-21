<template>
    <div class="flex flex-col min-h-screen bg-slate-900 text-gray-100 items-center overflow-x-hidden antialiased">
        <div class="w-full max-w-screen-lg flex flex-col px-8">
            <nav ref="nav" class="flex flex-col sm:flex-row gap-y-2 justify-between nav-padding mb-14 duration-[2000ms] transition fade-in">
                <div class="flex items-center">
                    <router-link to="/" class="flex ml-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" class="mr-1 h-10 w-10 stroke-cyan-600">
                            <path d="M 8.9414062 6 C 8.1404062 6 7.3853594 6.3118594 6.8183594 6.8808594 C 6.2513594 7.4478594 5.9404063 8.2028594 5.9414062 9.0058594 L 5.9980469 38.527344 C 5.9980469 38.681344 5.9625781 38.837563 5.8925781 38.976562 L 0.52734375 49.708984 C 0.18334375 50.398984 -7.4014868e-17 51.172359 0 51.943359 L 0 55 C 0 56.654 1.346 58 3 58 L 61 58 C 62.654 58 64 56.654 64 55 L 64 51.943359 C 64 51.172359 63.816656 50.398031 63.472656 49.707031 L 58.105469 38.974609 C 58.035469 38.836609 58 38.682344 58 38.527344 L 58 9 C 58 7.346 56.654 6 55 6 L 8.9414062 6 z M 8.9414062 8 L 55 8 C 55.552 8 56 8.448 56 9 L 56 38.527344 C 56 38.990344 56.109406 39.455141 56.316406 39.869141 L 61.382812 50 L 2.6171875 50 L 7.6171875 40 L 45 40 C 45.553 40 46 39.553 46 39 C 46 38.447 45.553 38 45 38 L 7.9980469 38 L 7.9414062 9.0019531 C 7.9414062 8.7339531 8.046375 8.4839219 8.234375 8.2949219 C 8.424375 8.1049219 8.6744062 8 8.9414062 8 z M 12 10 C 10.897 10 10 10.897 10 12 L 10 34 C 10 35.103 10.897 36 12 36 L 52 36 C 53.103 36 54 35.103 54 34 L 54 12 C 54 10.897 53.103 10 52 10 L 12 10 z M 12 12 L 52 12 L 52.001953 34 L 12 34 L 12 12 z M 34 15 C 33.74425 15 33.488469 15.097469 33.292969 15.292969 L 32.292969 16.292969 C 31.901969 16.683969 31.901969 17.316031 32.292969 17.707031 C 32.487969 17.902031 32.744 18 33 18 C 33.256 18 33.512031 17.902031 33.707031 17.707031 L 34.707031 16.707031 C 35.098031 16.316031 35.098031 15.683969 34.707031 15.292969 C 34.511531 15.097469 34.25575 15 34 15 z M 32 19 C 28.691 19 26 21.691 26 25 C 26 28.309 28.691 31 32 31 C 33.704 31 35.338375 30.253125 36.484375 28.953125 C 36.673375 28.738125 36.761562 28.454875 36.726562 28.171875 C 36.691563 27.887875 36.538734 27.632703 36.302734 27.470703 C 35.487734 26.908703 35 25.984 35 25 C 35 24.016 35.486734 23.091297 36.302734 22.529297 C 36.537734 22.367297 36.693516 22.112125 36.728516 21.828125 C 36.763516 21.545125 36.675328 21.261875 36.486328 21.046875 C 35.339328 19.746875 33.704 19 32 19 z M 32 21 C 32.815 21 33.587141 21.244125 34.244141 21.703125 C 33.451141 22.605125 33 23.774 33 25 C 33 26.226 33.451141 27.394875 34.244141 28.296875 C 33.587141 28.755875 32.815 29 32 29 C 29.794 29 28 27.206 28 25 C 28 22.794 29.794 21 32 21 z M 49 38 C 48.447 38 48 38.447 48 39 C 48 39.553 48.447 40 49 40 L 53 40 C 53.553 40 54 39.553 54 39 C 54 38.447 53.553 38 53 38 L 49 38 z M 10 42 C 9.447 42 9 42.447 9 43 C 9 43.553 9.447 44 10 44 L 12 44 C 12.553 44 13 43.553 13 43 C 13 42.447 12.553 42 12 42 L 10 42 z M 16 42 C 15.447 42 15 42.447 15 43 C 15 43.553 15.447 44 16 44 L 18 44 C 18.553 44 19 43.553 19 43 C 19 42.447 18.553 42 18 42 L 16 42 z M 22 42 C 21.447 42 21 42.447 21 43 C 21 43.553 21.447 44 22 44 L 24 44 C 24.553 44 25 43.553 25 43 C 25 42.447 24.553 42 24 42 L 22 42 z M 28 42 C 27.447 42 27 42.447 27 43 C 27 43.553 27.447 44 28 44 L 30 44 C 30.553 44 31 43.553 31 43 C 31 42.447 30.553 42 30 42 L 28 42 z M 34 42 C 33.447 42 33 42.447 33 43 C 33 43.553 33.447 44 34 44 L 36 44 C 36.553 44 37 43.553 37 43 C 37 42.447 36.553 42 36 42 L 34 42 z M 40 42 C 39.447 42 39 42.447 39 43 C 39 43.553 39.447 44 40 44 L 42 44 C 42.553 44 43 43.553 43 43 C 43 42.447 42.553 42 42 42 L 40 42 z M 46 42 C 45.447 42 45 42.447 45 43 C 45 43.553 45.447 44 46 44 L 48 44 C 48.553 44 49 43.553 49 43 C 49 42.447 48.553 42 48 42 L 46 42 z M 52 42 C 51.447 42 51 42.447 51 43 C 51 43.553 51.447 44 52 44 L 54 44 C 54.553 44 55 43.553 55 43 C 55 42.447 54.553 42 54 42 L 52 42 z M 13 46 C 12.447 46 12 46.447 12 47 C 12 47.553 12.447 48 13 48 L 15 48 C 15.553 48 16 47.553 16 47 C 16 46.447 15.553 46 15 46 L 13 46 z M 19 46 C 18.447 46 18 46.447 18 47 C 18 47.553 18.447 48 19 48 L 21 48 C 21.553 48 22 47.553 22 47 C 22 46.447 21.553 46 21 46 L 19 46 z M 25 46 C 24.447 46 24 46.447 24 47 C 24 47.553 24.447 48 25 48 L 39 48 C 39.553 48 40 47.553 40 47 C 40 46.447 39.553 46 39 46 L 25 46 z M 43 46 C 42.447 46 42 46.447 42 47 C 42 47.553 42.447 48 43 48 L 45 48 C 45.553 48 46 47.553 46 47 C 46 46.447 45.553 46 45 46 L 43 46 z M 49 46 C 48.447 46 48 46.447 48 47 C 48 47.553 48.447 48 49 48 L 51 48 C 51.553 48 52 47.553 52 47 C 52 46.447 51.553 46 51 46 L 49 46 z M 2 52 L 62 52 L 62 55 C 62 55.552 61.552 56 61 56 L 3 56 C 2.448 56 2 55.552 2 55 L 2 52 z"/>
                        </svg>
                        <div class="ml-2 bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-xl font-bold text-transparent">
                            Kevin's Portfolio
                        </div>
                    </router-link>
                </div>
                <ul class="flex flex-wrap gap-x-3 font-medium text-gray-300 pl-5 justify-left">
                    <li class="hover:text-white">
                        <router-link class="ml-2 mr-2" to="/projects">Portfolio</router-link>
                    </li>
                    <li class="hover:text-white">
                        <router-link class="ml-2 mr-2" to="/resume">Résumé</router-link>
                    </li>
                    <li class="hover:text-white">
                        <a class="ml-2 mr-2 " href="https://www.linkedin.com/in/kevinwheeler0">LinkedIn</a>
                    </li>
                    <li class="hover:text-white">
                        <a class="ml-2 mr-2 " href="https://stackoverflow.com/users/3470632/kevin-wheeler">Stack Overflow</a>
                    </li>
                    <li class="hover:text-white">
                        <a class="ml-2 mr-2" href="https://github.com/kevinwheeler">GitHub</a>
                    </li>
                </ul>
            </nav>
            <slot />
        </div>
    </div>
</template>

<script>
import { useRoute } from 'vue-router'
import { ref } from 'vue'
import { onMounted, onUnmounted } from '@vue/runtime-core'

export default {
    components: {
        
    },
    setup() {
        const route = useRoute();
        const nav = ref(null);

        //Add is-inViewport class to elements in viewport. Remove class when not in viewport.
        const inViewport = (entries) => {
          entries.forEach(entry => {
            if (entry.isIntersecting){
                entry.target.classList.add("is-inViewport");
            } 
          });
        };

        const Obs = new IntersectionObserver(inViewport);
        onMounted(() => {
            const obsOptions = {};
            Obs.observe(nav.value, obsOptions);
        })

        onUnmounted(() => {
            Obs.unobserve(nav.value);
            nav.value.classList.remove("is-inViewport");
        })

        return {
            route, nav
        }
    }
}
</script>
