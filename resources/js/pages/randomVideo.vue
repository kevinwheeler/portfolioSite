<template>
    <main ref="main">
        <div class="flex flex-col gap-6">
            <div class="duration-1000 transition data-inviewport from-left motion-reduce:from-cancel">
                <h1 class="text-6xl font-bold text-center">Random <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Video</span></h1>
                <div class="text-l text-gray-400 self-center text-center overflow-anywhere"><a href="https://www.randomvideo.site">www.randomvideo.site</a></div>
            </div>
            <img src="/storage/random-video-hero.jpg" alt="Random Video Hero" class="md:px-32 sm:px-16 mb-16 duration-1000 transition data-inviewport from-right motion-reduce:from-cancel">
            <h2 class="text-5xl mb-6 font-bold text-center duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Project <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Description</span></h2>
            <div class="text-2xl">
                <p class="mb-10 font-bold text-center duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">
                    A simple Spring + React CRUD app where users can create video lists and an associated URL, and other people can view a random video from those lists at that URL. Created so that I could learn Spring Framework / Spring Boot (Java) and React in addition to Hibernate and Redux.
                </p>
                <p class="mb-8 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">
                    Source code: <a class="underline overflow-anywhere" href="https://github.com/kevinwheeler/randomvideo"> github.com/kevinwheeler/randomvideo</a>
                </p>
                <p class="mb-8 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">
                    Live website: <a class="underline overflow-anywhere" href="https://www.randomvideo.site">www.randomvideo.site</a>
                </p>
            </div>

            <h2 class="whitespace-none text-5xl font-bold duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Tech<span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">nologies</span></h2>

            <ul class="text-2xl mb-8">
                <li class="inline duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Spring Framework (Spring Boot), </li>
                <li class="inline duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Hibernate, </li>
                <li class="inline duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">React, </li>
                <li class="inline duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Redux, </li>
                <li class="inline duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Digital Ocean Ubuntu VPS, </li>
                <li class="inline duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Apache, </li>
                <li class="inline duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">MySQL, </li>
                <li class="inline duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">JHipster, </li>
                <li class="inline duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Liquibase, </li>
                <li class="inline duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Maven, </li>
                <li class="inline duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Webpack, </li>
                <li class="inline duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none"> and many others as can be found in my pom.xml and package.json files.</li>


            </ul>
            
            <h2 class="whitespace-none text-5xl font-bold duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Application <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Features</span></h2>

            <ul class="mb-8">
                <li class="text-2xl mb-4 blue-bullet-500 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Ability to toggle between English and French.</li>
                <li class="text-2xl mb-4 blue-bullet-500 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Users can input a slug when creating a video list, and then their video list is
                    publicly viewable from https://www.randomvideo.site/slug.
                </li>
                <li class="text-2xl mb-4 blue-bullet-500 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none accent-color">Ability for users to register, receive an activation email, forgot password / password reset, change password, and login.</li>
                <li class="text-2xl mb-4 blue-bullet-500 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Ability to click through to the next and previous videos, while also indicating when there are no prevoius/next videos available</li>
                <li class="text-2xl mb-4 blue-bullet-500 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Client and server side input validation.</li>
                <li class="text-2xl mb-4 blue-bullet-500 accent-color duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Admin panel with user managent, all sorts of metrics, health status indicators, configuration, and logging. </li>
                <li class="text-2xl mb-4 blue-bullet-500 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Display success and error toast messages when calls to the server are successful or fail.</li>
                <li class="text-2xl mb-4 blue-bullet-500 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">All variations of http/https and www/blank redirect to https://www.</li>
            </ul>

            <h2 class="whitespace-none text-5xl font-bold duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Server <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Features</span></h2>

            <ul class="mb-48">
                <li class="text-2xl mb-4 blue-bullet-500 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Please see the <router-link class="underline" to="/projects/ubuntu-vps">Ubuntu VPS server portfolio page</router-link> for server features.</li>
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
