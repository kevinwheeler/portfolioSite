<template>
   <video :style="videoStyles" autoplay loop muted playsinline class="shadow-none">
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
    'containerWidth': {
      type: Number,
      default: () => 0,
    },
  },
  setup(props) {
    const videoStyles = ref({});

    const adjustVideoSize = () => {
      // -80 to account for padding on parent. Could improve this by passing in the parent's width as a prop, but it's not worth the time for a personal project. I'm not going to need it.
      const viewportAspectRatio = (window.innerWidth - 80) / window.innerHeight;

      // viewport is wider than video
      if (viewportAspectRatio > props.aspectRatio) {
        videoStyles.value = {
          height: 'calc(100vh - 40px)',
          width: 'auto',
        };
      // viewport is taller than video
      } else {
        videoStyles.value = {
          width: '100vw',
          height: 'auto',
          "max-height": 'calc(100vh - 40px)',
        };
      }
    };

    onMounted(() => {
      window.addEventListener('resize', adjustVideoSize);
      adjustVideoSize();
    });

    onUnmounted(() => {
      window.removeEventListener('resize', adjustVideoSize);
    });

    return {
      videoStyles,
    };
  },
};
</script>