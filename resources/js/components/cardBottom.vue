<template>
  <div :class="['flex flex-col flex-1 items-center p-6', additionalClasses]">
    <h3 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl 2xl:text-6xl font-semibold text-center accent-color">
      <slot name="headline"></slot>
    </h3>
    <p class="mb-2 text-s sm:text-md md:text-lg lg:text-xl xl:text-2xl 2xl:text-3xl text-center">
      <slot name="secondary-headline"></slot>
    </p>
    <p :class="['lg:mt-1 xl:mt-2 text-sm sm:text-md md:text-lg lg:text-xl xl:text-2xl 2xl:text-3xl text-center max-w-md sm:max-w-lg md:max-w-xl lg:max-w-2xl xl:max-w-3xl 2xl:max-w-5xl text-white', paragraphClasses]">
      <slot name="paragraph"></slot>
    </p>
    <div class="mt-6 flex justify-center flex-wrap gap-2">
      <span
        v-for="(tag, index) in tags"
        :key="index"
        class="text-xs sm:text-s md:text-md lg:text-lg xl:text-xl 2xl:text-2xl inline-flex items-center font-bold leading-sm px-3 py-1 rounded-full"
        :class="`${tagColors[index].background} ${tagColors[index].text}`"
      >
        {{ tag }}
       </span>
    </div>
  </div>
</template>
  
  <script>
  import _ from 'lodash';
  // import ResizingVideo from './resizingVideo.vue';

  export default {

    components: {
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
        tagColors: _.concat(shuffledColors, _.cloneDeep(shuffledColors)),
      };
    },

    props: {
      tags: {
        type: Array,
        default: () => [],
      },
      additionalClasses: {
        type: String,
        default: ''
      },
      paragraphClasses: {
        type: String,
        default: ''
      }

    },
  };
  </script>