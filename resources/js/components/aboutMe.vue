<template>
<!-- gap-8 mx-8 md:gap-16 md:mx-16 lg:gap-32 lg:mx-32 xl:gap-40 xl:mx-40 2xl:gap-52 2xl:mx-52 -->
  <div class="flex flex-col sm:flex-row items-center justify-center gap-8 mx-8 md:mx-16 lg:gap-16 lg:mx-32 xl:gap-24 xl:mx-40 2xl:mx-52">
    <div class="flex-1 sm:w-0 data-inviewport duration-1000 transition from-left">
        <h1 class="text-3xl font-bold mb-6">
            Hi, I'm <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Andrew</span>  👋
        </h1>
        <p class="text-xl leading-9">
            I am an AR/VR developer with 6 years of experience in Unity. I specialize in creating immersive and interactive experiences for various platforms and headsets, including but not limited to iOS (ARKit), Android (ARCore), both mobile platforms at once (ARFoundation), Oculus Rift, Oculus Quest 1 and 2, HTC Vive, Pico 3 and 4, Microsoft HoloLens 2, and Magic Leap just to name a few.

        </p>
    </div>
    <img class="sm:w-0 sm:py-2 rounded-3xl from-right duration-1000 transition data-inviewport max-h-[calc(100vh-40px)]" style="flex-grow:1" src="/storage/andrew-main.jpg">
  </div>
</template>
  
<script>
// import { onMounted, onBeforeUnmount, ref} from 'vue';
import _ from 'lodash';

export default {

  components: {},
  props: {},
  setup() {},
};

</script>