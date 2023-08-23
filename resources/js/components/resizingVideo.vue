<template>
   <video ref="videoRef" :style="videoStyles" :poster="poster" autoplay loop muted playsinline class="shadow-none">
     Your browser does not support the video tag.
   </video>
 </template>
  
  <script>
import { ref, onMounted, onUnmounted, watch } from 'vue';
import { useStore } from 'vuex';
import _ from 'lodash';
import Hls from 'hls.js';

export default {
  name: 'FullScreenVideo',
  props: {
    'aspectRatio': {
      type: Number,
      required: true,
    },
    'containerWidth': {
      type: Number,
      default: () => 0,
    },
    'poster': {
      type: String,
      default: () => '',
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
  setup(props) {
    const store = useStore();
    const videoRef = ref(null);
    const videoStyles = ref({});

    const adjustVideoSize = _.throttle(() => {
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
    }, 300, { 'leading': true, 'trailing': true });

    const loadVideo = () => {
      if (Hls.isSupported()) {
        const hls = new Hls();
        hls.attachMedia(videoRef.value);
        hls.loadSource(props.src);
      }

      else if (videoRef.value.canPlayType('application/vnd.apple.mpegurl')) {
        videoRef.value.src = props.src;
        videoRef.value.addEventListener('loadedmetadata', function() {
          videoRef.value.play();
        });
      }

      else {
        alert("Your browser does not support HLS video streaming.");
      }
    };

    onMounted(() => {
      window.addEventListener('resize', adjustVideoSize);
      adjustVideoSize();
      // Wait for main hero video to load before loading this one.
      if (store.state.heroVideoLoadedEnough) {
        loadVideo();
      }
    });

    onUnmounted(() => {
      window.removeEventListener('resize', adjustVideoSize);
    });

    watch(
      () => store.state.heroVideoLoadedEnough,
      (newVal, oldVal) => {
        if (newVal === true) {
          loadVideo();
        }
      }
    );

    return {
      videoRef,
      videoStyles,
    };
  },
};
</script>