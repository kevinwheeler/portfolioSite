<template>
  <div :class="`flex flex-1 flex-col p-10 mb-10 ${classes}`"> <!-- removed overflow-hidden. I don't think it was necessary. Delete this comment if no bugs turn up-->
    <ResizingVideo :aspectRatio="videoAspectRatio" :src="`${vidSrc}`" type="video/mp4"/>
    <CardBottom :href="href" :tags="tags" :paragraphClasses="paragraphClasses">
      <!-- transitively pass our input/received slot parameters to be input as slot parameters to the CardBottom component-->
      <template v-slot:headline>
        <slot name="headline"></slot>
      </template>
      <template v-slot:secondary-headline>
        <slot name="secondary-headline"></slot>
      </template>
      <template v-slot:paragraph>
        <slot name="paragraph"></slot>
      </template>
    </CardBottom>
  </div>
</template>
  
  <script>
  import _ from 'lodash';
  import CardBottom from './cardBottom.vue';
  import ResizingVideo from './resizingVideo.vue';

  export default {

    components: {
      CardBottom,
      ResizingVideo,
    },

    data() {
      return {
        // Repeat tag colors twice in the same order.
        ResizingVideo,
      };
    },

    props: {
      'classes': {
        type: String,
        default: () => '',
      },
      'href': {
        type: String,
        required: true,
      },
      'paragraphClasses': {
        type: String,
        default: () => '',
      },
      'videoAspectRatio': {
        type: Number,
        default: () => 16/9,
      },
      'vidSrc': {
        type: String,
        required: true,
      },
      tags: {
        type: Array,
        default: () => [],
      },
    },
  };
  </script>