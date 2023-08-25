<template>
    <div class="flex flex-col min-h-screen bg-slate-900 text-gray-100 items-center overflow-x-hidden antialiased" role="presentation">
        <div class="w-full max-w-screen-lg flex flex-col px-8">
            <nav ref="nav" class="flex flex-col sm:flex-row gap-y-2 justify-between nav-padding mb-14 duration-[2000ms] transition fade-in">
                <div class="flex items-center">
                    <router-link to="/" class="flex ml-2 items-center">
                    <img src="/storage/logo.svg" alt="Logo of a computer" class="mr-1 h-10 w-10"/>
                        <div class="ml-2 bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-xl font-bold text-transparent">
                            Kevin's Portfolio
                        </div>
                    </router-link>
                </div>
                <ul class="flex flex-wrap gap-x-3 font-medium text-gray-300 pl-5 justify-left">
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
