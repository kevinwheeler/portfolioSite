<template>
   <video :style="videoStyles" autoplay loop muted playsinline class="shadow-none py-2 ">
     <source :src="`${src}`" :type="`${type}`"/>
     Your browser does not support the video tag.
   </video>
 </template>
  
  <script>
import { ref, onMounted, onUnmounted, watch } from 'vue';

export default {
  name: 'FullScreenVideo',
  props: {
    'aspectRatio': {
      type: Number,
      required: true,
    },
    'type': {
      type: String,
      required: true,
    },
    'src': {
      type: String,
      required: true,
    },
  },
  setup() {
    const videoAspectRatio = ref(16/9);
    const videoStyles = ref({});

    const adjustVideoSize = () => {
      const viewportAspectRatio = window.innerWidth / window.innerHeight;

      console.log("-----")
      console.log("videoAspectRatio", videoAspectRatio.value);
      console.log("viewportAspectRatio", viewportAspectRatio);

      // viewport is wider than video
      if (viewportAspectRatio > videoAspectRatio.value) {
        console.log("viewport is wider than video");
        videoStyles.value = {
          height: '100vh',
          width: 'auto',
        };
      // viewport is taller than video
      } else {
        console.log("viewport is taller than video");
        videoStyles.value = {
          width: '100vw',
          height: 'auto',
        };
      }
    };

    const resizeListener = () => adjustVideoSize();

    onMounted(() => {
      window.addEventListener('resize', resizeListener);
      adjustVideoSize();
    });

    onUnmounted(() => {
      window.removeEventListener('resize', resizeListener);
    });

    return {
      videoStyles,
    };
  },
};
</script>