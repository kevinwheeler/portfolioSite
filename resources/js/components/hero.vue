<template>
    <div class="hero p-6 transition duration-[2000ms] data-inviewport fade-in">
      <video class="hero__video" playsinline autoplay muted loop>
          <source src="/storage/water-girl.mp4" type="video/mp4">
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
      <template v-slot:headline> Dream Stream </template>
      <template v-slot:secondary-headline> 42069 </template>
      <template v-slot:paragraph>
        iOS application that utilizes realtime human segmentation to detect people and apply VFX to them.
      </template>
    </CardBottom>
  </template>
  
  <script>
  import _ from 'lodash';
  import CardBottom from './cardBottom.vue';
  import ResizingVideo from './resizingVideo.vue';
  import Nav from './nav.vue';

  export default {

    components: {
      CardBottom,
      Nav,
      ResizingVideo,
    },

    data() {
      // Shuffle tag colors so that adjacent cards won't all have the same order of tag colors.
      const shuffledColors = _.shuffle([
        { background: 'bg-blue-200', text: 'text-blue-700' },
        { background: 'bg-teal-200', text: 'text-teal-700' },
        { background: 'bg-yellow-200', text: 'text-yellow-700' },
        { background: 'bg-purple-200', text: 'text-purple-700' },
        { background: 'bg-green-200', text: 'text-green-700' },
        { background: 'bg-pink-200', text: 'text-pink-700' },
      ]);

      return {
        // Repeat tag colors twice in the same order.
        ResizingVideo,
        tagColors: _.concat(shuffledColors, _.cloneDeep(shuffledColors)),
      };
    },

    // props: {
    //   'videoAspectRatio': {
    //     type: Number,
    //     default: () => 16/9,
    //   },
    //   'classes': {
    //     type: String,
    //     default: () => '',
    //   },
    //   'href': {
    //     type: String,
    //     required: true,
    //   },
    //   'vidSrc': {
    //     type: String,
    //     required: true,
    //   },
    //   tags: {
    //     type: Array,
    //     default: () => [],
    //   },
    // },
  };

  </script>