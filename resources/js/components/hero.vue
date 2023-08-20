<!-- Probably need to make sure we don't have an re-renders, since video.js is managing the DOM manually. I don't want its
     DOM manipulations to get clobbered when the DOM is diffed, etc. -->
<template>
    <div class="hero p-6 transition duration-[2000ms] data-inviewport fade-in">
      <!-- video.js takes over this element and puts move any classes from it to a
           container element. So we add classes via JavaScript instead. -->
      <video ref="videoRef" class="hero__video"></video>
      <div class="hero__content">
          <Nav additionalClasses="" />
          <div class="text-shadow">
            <p class="ml-1 sm:ml-9 mb-3 text-lg md:text-xl lg:text-2xl font-[Montserrat] font-[400] uppercase">AR/VR Unity Developer</p>
            <div class="sm:ml-8 relative leading-none">
              <h1 class="text-[10vw] sm:text-[calc(10vw-10px)] mb-8 font-bold uppercase italic inline-block">
                  <span class="relative whitespace-nowrap after:absolute after:bottom-0 after:left-[10%] after:w-[100%] after:h-[4px] after:bg-white after-line-shadow">Andrew LaBoy</span>
              </h1>
            </div>
            <p class="sm:ml-8 text-lg md:text-xl lg:text-2xl max-w-[70%]">Unity developer specializing in augmented and virtual reality applications and games</p>
          </div>
      </div>
    </div>
    <div class="p-10 mb-10 flow-root">
      <CardBottom :tags="['C#', 'Unity', 'ARFoundation', 'VFXGraph', 'HLSL']" additionalClasses="mt-10 duration-1000 transition data-inviewport from-right"><!-- mt-1 added because otherwise the element was considered to be on the screen at the start, which 
        prevented any animation when the element was scrolled into view.-->
        <template v-slot:headline> Dream Stream AR </template>
        <template v-slot:secondary-headline><a class="underline text-gray-400 visited:text-gray-400" href="https://apps.apple.com/bs/app/dream-stream-ar/id1588851059">View On App Store</a></template>
        <template v-slot:paragraph>
          Displayed above (best viewed on desktop) - An iOS application that utilizes realtime human segmentation to detect people and apply VFX to them. VFX were made in VFXGraph and HLSL (shaders).  Used in many concerts and music festivals in Austin, Texas and surrounding areas, as well as livestreams and videos.
        </template >
      </CardBottom>
    </div>
</template>

<script>
import { onMounted, onBeforeUnmount, ref } from 'vue';
import _ from 'lodash';
import CardBottom from './cardBottom.vue';
import Nav from './nav.vue';
import videojs from 'video.js';
import 'video.js/dist/video-js.css';

  export default {

    components: {
      CardBottom,
      Nav,
    },

    setup() {
    // Shuffle tag colors so that adjacent cards won't all have the same order of tag colors.
    const shuffledColors = _.shuffle([
      { background: 'bg-blue-200', text: 'text-blue-700' },
      { background: 'bg-teal-200', text: 'text-teal-700' },
      { background: 'bg-yellow-200', text: 'text-yellow-700' },
      { background: 'bg-purple-200', text: 'text-purple-700' },
      { background: 'bg-green-200', text: 'text-green-700' },
      { background: 'bg-pink-200', text: 'text-pink-700' },
    ]);

    const tagColors = ref(_.concat(shuffledColors, _.cloneDeep(shuffledColors)));
    const videoRef = ref(null);
    let player = null;
    let playbackPosition = 0;
    let currentAspectRatioBucket = null;
    let initialLoad = true;

    const videosAndPosters = {
      '9:19 aka .477': ['https://s3.amazonaws.com/kmw-bitmovin/water-girl-9-by-19-final/manifest.m3u8', '/storage/water-girl-9-by-19.jpg'],
      '.625': ['https://s3.amazonaws.com/kmw-bitmovin/water-girl-0625-final/manifest.m3u8', '/storage/water-girl-0point625.jpg'],
      '.98': ['https://s3.amazonaws.com/kmw-bitmovin/water-girl-098-final/manifest.m3u8', '/storage/water-girl-0point98.jpg'],
      '2880:1800 aka 1.6': ['https://s3.amazonaws.com/kmw-bitmovin/water-girl-full-final/manifest.m3u8', '/storage/water-girl.jpg'],
    };

    const determineAspectRatioBucket = () => {
        // Important to not use window.innerWidth|Height here, as URL bar interferes with that measurement.
        const ratio = videoRef.value.offsetWidth / videoRef.value.offsetHeight;
        if      (ratio < .548) return '9:19 aka .477';
        else if (ratio < .854)     return '.625';
        else if (ratio < 1.16)     return '.98';
        else return '2880:1800 aka 1.6';
    };

    const updateVideoSource = _.debounce(() => {
      const newAspectRatioBucket = determineAspectRatioBucket();

      // If it's the initial load or if the aspect ratio bucket has changed
      if (!currentAspectRatioBucket || newAspectRatioBucket !== currentAspectRatioBucket) {
          currentAspectRatioBucket = newAspectRatioBucket;

          if (initialLoad) {
            player.poster(videosAndPosters[currentAspectRatioBucket][1]);
          } else {
            // Aspect ratio bucket changed. Remove poster. It's better to have a blank video flash than
            // a poster that isn't from the same time in the video as we left off.
            player.poster(null);
          }

          if (currentAspectRatioBucket == '2880:1800 aka 1.6') {
            // align video to the right since this video isn't centered.
            // we want to cut off the left side of the video, not the right.
            videoRef.value.classList.add('hero__video','hero__video--right');
          } else {
            videoRef.value.classList.remove('hero__video--right');
          }

          playbackPosition = videoRef.value.currentTime;
          const videoURL = videosAndPosters[determineAspectRatioBucket()][0];
          player.src({
            src: videoURL,
            type: 'application/x-mpegURL',
          });
          player.currentTime(playbackPosition);

          initialLoad = false;
      }
    }, 300);

    onMounted(() => {
      // Initialize Video.js player
      player = videojs(videoRef.value, {
        autoplay: true,
        muted: true,
        loop: true,
      });
      updateVideoSource();
      window.addEventListener('resize', updateVideoSource);
    });

    onBeforeUnmount(() => {
        window.removeEventListener('resize', updateVideoSource);
    });

    return {
      tagColors,
      videoRef,
    };
  },
};
</script>
