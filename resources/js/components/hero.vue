<template>
    <div class="hero p-6 transition duration-[2000ms] data-inviewport fade-in">
      <video ref="videoRef" class="hero__video" :poster="currentVideoPoster" playsinline autoplay muted loop>
          <source :src="currentVideo" type="video/mp4">
      </video>
      <div class="hero__content">
          <Nav />
          <div>
            <p class="ml-1 sm:ml-9 mb-3 text-lg md:text-xl lg:text-2xl font-[Montserrat] font-[400] uppercase">AR/VR Unity Developer</p>
            <div class="sm:ml-8 relative leading-none">
              <h1 class="text-[10vw] sm:text-[calc(10vw-10px)] mb-8 font-bold uppercase italic inline-block">
                  <span class="relative whitespace-nowrap after:absolute after:bottom-0 after:left-[10%] after:w-[100%] after:h-[4px] after:bg-white">Andrew LaBoy</span>
              </h1>
            </div>
            <p class="sm:ml-8 text-lg md:text-xl lg:text-2xl max-w-[70%]">Unity developer specializing in augmented and virtual reality applications and games</p>
          </div>
      </div>
    </div>
    <CardBottom href="/TODO" :tags="['Spring Framework', 'Hibernate', 'React', 'Redux', 'Java', 'Bootstrap']">
      <template v-slot:headline> Dream Stream AR </template>
      <template v-slot:secondary-headline> 42069 </template>
      <template v-slot:paragraph>
        iOS application that utilizes realtime human segmentation to detect people and apply VFX to them.
      </template>
    </CardBottom>
  </template>
  
  <script>
  import {  } from 'vue';
  import { onMounted, onBeforeUnmount, ref} from 'vue';
  import _ from 'lodash';
  import CardBottom from './cardBottom.vue';
  import Nav from './nav.vue';

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
    let playbackPosition = 0;
    let currentAspectRatioBucket = null;
    const currentVideo = ref('');
    const currentVideoPoster = ref('');

    const videosAndPosters = {
      '9:19 aka .477': ['/storage/water-girl-9-by-19.mp4', '/storage/water-girl-9-by-19.jpg'],
      '.625': ['/storage/water-girl-0point625.mp4', '/storage/water-girl-0point625.jpg'],
      '.98': ['/storage/water-girl-0point98.mp4', '/storage/water-girl-0point98.jpg'],
      '2880:1800 aka 1.6': ['/storage/water-girl.mp4', '/storage/water-girl.jpg']
    };

    const determineAspectRatioBucket = () => {
        const ratio = window.innerWidth / window.innerHeight;
        if      (ratio < .548) return '9:19 aka .477';
        else if (ratio < .854)     return '.625';
        else if (ratio < 1.16)     return '.98';
        else return '2880:1800 aka 1.6';
    };

    const updateVideoSource = () => {
            const newAspectRatioBucket = determineAspectRatioBucket();

            // If it's the initial load or if the aspect ratio bucket has changed
            if (!currentAspectRatioBucket || newAspectRatioBucket !== currentAspectRatioBucket) {
                currentAspectRatioBucket = newAspectRatioBucket;

                if (videoRef.value) {
                    if (!currentAspectRatioBucket) {
                      // Initial load. Set poster
                      currentVideoPoster.value = videosAndPosters[currentAspectRatioBucket][1];
                    } else {
                      // Aspect ratio bucket changed. Remove poster. It's better to have a blank video flash than
                      // a poster that isn't gfrom the same time in the video.
                      currentVideoPoster.value = '';
                    }
                    if (currentAspectRatioBucket == '2880:1800 aka 1.6') {
                      videoRef.value.classList.add('hero__video--right');
                    } else {
                      videoRef.value.classList.remove('hero__video--right');
                    }
                    playbackPosition = videoRef.value.currentTime;
                }

                // Set the video source based on the new aspect ratio bucket
                currentVideo.value = videosAndPosters[currentAspectRatioBucket][0];

                // Load and play the video after updating the source
                if (videoRef.value) {
                    videoRef.value.load();
                    videoRef.value.play().catch(e => {
                        console.error("Video play failed:", e);
                    });
                    videoRef.value.currentTime = playbackPosition;
                }
            }
        };

        onMounted(() => {
            updateVideoSource();
            window.addEventListener('resize', updateVideoSource);
        });

        onBeforeUnmount(() => {
            window.removeEventListener('resize', updateVideoSource);
        });

    return {
      currentVideo,
      currentVideoPoster,
      tagColors,
      videoRef,
    };
  },
  };

  </script>