<template>
  <Card 
      :classes="cardClasses"
      href="/projects/hologram"
      paragraphClasses="max-w-md sm:max-w-lg md:max-w-xl lg:max-w-2xl xl:max-w-xl 2xl:max-w-xl"
      :tags="['C#', 'Unity', 'ARFoundation', 'XR Interaction Toolkit']"
      :aspectRatio="1"
      vidSrc="/storage/hologram.mp4"
      >
      <template v-slot:headline> Realtime Hologram </template>
      <template v-slot:secondary-headline></template>
      <template v-slot:paragraph>
        Developed an interactive VR/AR experience for Meta Quest 2, where users can instantly transform anyone captured by their iOS or Android device's camera into a live-updating stencil hologram within the virtual space, seamlessly transmitted over Wi-Fi
      </template>
  </Card>
</template>

<script>
import Card from '../components/card.vue';

export default {
  components: {
      Card
  },
  props: {
      additionalClasses: {
          type: String,
          default: ''
      }
  },
  computed: {
      cardClasses() {
          return `duration-1000 transition data-inviewport sm:opacity-100 ${this.additionalClasses}`;
      }
  }
};
</script>
