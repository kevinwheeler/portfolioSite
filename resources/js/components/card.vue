<template>
  <!-- If you change the horizontal padding here, make sure to adjust the
  calculations in resizingVideo.vue accordingly. -->
  <div :class="`flex flex-1 flex-col p-10 mb-10 ${classes}`">
    <ResizingVideo :aspectRatio="aspectRatio" :src="vidSrc" type="video/mp4"/>
    <CardBottom :href="href" :tags="tags" :paragraphClasses="paragraphClasses">
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
import { ref } from 'vue';
import CardBottom from './cardBottom.vue';
import ResizingVideo from './resizingVideo.vue';

export default {
  components: {
    CardBottom,
    ResizingVideo,
  },
  props: {
    classes: {
      type: String,
      default: ''
    },
    href: {
      type: String,
      required: true
    },
    paragraphClasses: {
      type: String,
      default: ''
    },
    aspectRatio: {
      type: Number,
      default: 16 / 9
    },
    vidSrc: {
      type: String,
      required: true
    },
    tags: {
      type: Array,
      default: () => []
    }
  },
  setup(props) {
    // Here, we can use the `ref` and other Vue 3 reactivity features.
    // For this specific code, no setup logic is required.
    // You can access props directly in the template.

    return {
      // any variables or methods you define here will be accessible in the template
    };
  }
};
</script>