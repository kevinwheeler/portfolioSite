<template>
    <main ref="main">
        <div class="flex flex-col gap-6">
            <div class="duration-1000 transition data-inviewport from-left motion-reduce:from-cancel">
                <h1 class="text-6xl font-bold text-center">Andrew LaBoy's AR/VR <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Unity Portfolio</span></h1>
                <div class="text-l text-gray-400 self-center text-center"><router-link to="https://www.andrewlaboyxr.com">www.andrewlaboyxr.com</router-link></div>
            </div>
            <img src="/storage/andrew-portfolio-hero.jpg" alt="Portfolio Site Hero" class="md:px-32 sm:px-16 mb-16 duration-1000 transition data-inviewport from-right motion-reduce:from-cancel">
            <h2 class="text-5xl mb-6 font-bold text-center duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Project <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Description</span></h2>
            <div class="text-2xl">
                <p class="mb-10 font-bold text-center duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">
                  A portfolio website created for Andrew LaBoy. This website features a full screen video background hero as well as other videos using adaptive bitrate streaming (ABS). The quality of the video sent will adjust to the user's internet speed. The rest of the videos on the page will wait until the main hero is sufficiently loaded before they themselves will start to load. Since the hero video is full screen (full height + full width), four different versions of the video were created for different screen sizes / aspect ratios. The website will detect the user's screen size and send the appropriate video, adjusting to resize events automatically while playing the new video where the old one left off.
                </p>
                <p class="mb-8 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">
                    Source code: <a class="underline overflow-anywhere" href="https://github.com/kevinwheeler/andrew-portfolio">https://github.com/kevinwheeler/andrew-portfolio</a>
                </p>
                <p class="mb-8 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">
                    Live website: <a class="underline overflow-anywhere" href="https://www.andrewlaboyxr.com">https://www.andrewlaboyxr.com</a>
                </p>
            </div>

            <h2 class="whitespace-none text-5xl font-bold duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Tech<span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">nologies</span></h2>

            <ul class="mb-8">
                <li class="text-2xl mb-4 blue-bullet-500 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">HLS.js</li>
                <li class="text-2xl mb-4 blue-bullet-500 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">ffmpeg</li>
                <li class="text-2xl mb-4 blue-bullet-500 accent-color duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Adaptive Bitrate Streaming</li>
                <li class="text-2xl mb-4 blue-bullet-500 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Adobe Premiere Pro</li>
                <li class="text-2xl mb-4 blue-bullet-500 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">AWS Elastic Transcoder</li>
                <li class="text-2xl mb-4 blue-bullet-500 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">AWS Elemental MediaConvert</li>
                <li class="text-2xl mb-4 blue-bullet-500 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Adobe Premiere Pro</li>
                <li class="text-2xl mb-4 blue-bullet-500 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Bitmovin</li>
                <li class="text-2xl mb-4 blue-bullet-500 accent-color duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Ubuntu VPS</li>
                <li class="text-2xl mb-4 blue-bullet-500 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Laravel</li>
                <li class="text-2xl mb-4 blue-bullet-500 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Vue.js</li>
                <li class="text-2xl mb-4 blue-bullet-500 accent-color duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Tailwind</li>
                <li class="text-2xl mb-4 blue-bullet-500 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Laravel + Laravel UI and Included/Related Tech: Vite, Sass, Composer, GuzzleHTTP </li>
                <li class="text-2xl mb-4 blue-bullet-500 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">MSMTP as sendmail provider for contact form</li>
                <li class="text-2xl mb-4 blue-bullet-500 accent-color duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Google ReCAPTCHA to protect email/contact form</li>
            </ul>

            <h2 class="text-5xl mb-6 font-bold text-center duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Additional <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Details</span></h2>
            <div class="text-2xl">
                <p class="mb-10 font-bold text-center duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">
                  Originally I tried using video.js to implement ABS, but it would take a long time to adjust to changes in the user's connection speed, so I switched to using HLS.js. I was using ffmpeg to create the different versions of the video, but I switched to using Bitmovin's cloud encoding service after also trying Amazon AWS's Elastic Transcoder and also AWS's MediaConvert and running into issues with both. Ffmpeg could have worked, but was quite involved, as I would need to first make a version of each video (one for each aspect ratio of the hero, and one for each subsequent video that wasn't full screen) with keyframes placed at each place where I would want my ABS segments to start+end, then I would need to choose a resolution + bitrate + frames per second for each sub-version of every base video I wanted. I decided to use Bitmovin to make these decisions for me, as I figured they would be better at this. It would also save me the tedium of having to write out 100+ commands. I ended up tweaking Bitmovin's output, however, because I wanted to use lower FPS as I cared more about image quality than frames per second, and I also adjusted the bitrate frequency at which the different versions of videos changed. Bitmovin's output would cluster two different bitrates that were right next to each other, which was unoptimal, so I deleted one of the two versions for each cluster to produce a more uniform spread of bitrate versions. AWS Elastic Transcoder had limitations of the maximum resolution and bitrate output it could produce, and AWS MediaConvert was just as low level as ffmpeg requiring manual setup of everything, so I did not end up using those services. 
                </p>
                <p class="mb-8 duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">
                    Source code: <a class="underline overflow-anywhere" href="https://github.com/kevinwheeler/andrew-portfolio">https://github.com/kevinwheeler/andrew-portfolio</a>
                </p>
            </div>

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
