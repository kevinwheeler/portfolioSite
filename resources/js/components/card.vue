<template>
    <!--    
       Don't add hover:translate-y-1 to the class list. Almost every card uses it, but not all.
       In particular when we have a row of two cards and we need them centered, we use 
       .translate-y-1-and-translate-x-1\/2\+12px:hover Documentation available in scss file.
    -->
    <article :class="`flex flex-1 flex-col ${classes}`">
      <div class="hover:translate-y-1 transition duration-300 flex flex-1 flex-col rounded-lg overflow-hidden">
        <router-link aria-hidden="true" :to="`${href}`">
          <img class="flex-1" :src="imgSrc" :alt="alt">
        </router-link>
        <div class="flex flex-col flex-1 p-6 items-center bg-slate-800">
          <router-link :to="`${href}`">
            <h3 class="text-3xl font-bold text-center">
              <slot name="headline"></slot>
            </h3>
          </router-link>
          <p class="mt-1 text-md text-gray-400 font-bold text-center">
            <slot name="secondary-headline"></slot>
          </p>
          <p class="mt-2 text-lg font-bold">
            <slot name="paragraph"></slot>
          </p>
          <router-link :to="`${href}`">
          <p class="mt-2 text-lg font-bold underline">
            Learn More
          </p>
        </router-link>
          <div aria-label="tags" class="mt-6 flex-1 flex justify-start content-end flex-wrap gap-2">
            <span
              v-for="(tag, index) in tags"
              :key="index"
              class="text-md items-center font-bold leading-sm px-3 py-1 rounded-full"
              :class="`${tagColors[index].background} ${tagColors[index].text}`"
            >
              {{ tag }}
             </span>
          </div>
        </div>
      </div>
    </article>
  </template>
  
  <script>
  import _ from 'lodash';

  export default {
    props: {
      'alt': {
        type: String,
        // required: true,
      },
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