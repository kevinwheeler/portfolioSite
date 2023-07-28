<template>
    <div :class="`flex flex-col flex-1 rounded-lg overflow-hidden hover:translate-y-1 ${classes}`">
      <router-link :to="`${href}`">
        <img class="flex-1" :src="`${imgSrc}`">
      </router-link>
      <div class="flex flex-col flex-1 p-6 items-center bg-slate-800">
        <router-link :to="`${href}`">
          <h3 class="text-xl font-semibold text-center">
            <slot name="headline"></slot>
          </h3>
        </router-link>
        <p class="mt-1 text-xs text-gray-400 text-center">
          <slot name="secondary-headline"></slot>
        </p>
        <p class="mt-2 text-sm">
          <slot name="paragraph"></slot>
        </p>
        <div class="mt-6 flex justify-start flex-wrap gap-2">
          <span
            v-for="(tag, index) in tags"
            :key="index"
            class="text-xs inline-flex items-center font-bold leading-sm px-3 py-1 rounded-full"
            :class="`${tagColors[index].background} ${tagColors[index].text}`"
          >
            {{ tag }}
           </span>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import _ from 'lodash';

  export default {
    props: {
      'classes': {
        type: String,
        default: () => '',
      },
      'href': {
        type: String,
        required: true,
      },
      'imgSrc': {
        type: String,
        required: true,
      },
      tags: {
        type: Array,
        default: () => [],
      },
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
  };
  </script>