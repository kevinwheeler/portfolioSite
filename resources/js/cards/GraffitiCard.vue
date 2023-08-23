<template>
  <Card 
      :aspectRatio="1148/1104"
      :classes="cardClasses"
      paragraphClasses="max-w-md sm:max-w-lg md:max-w-xl lg:max-w-2xl xl:max-w-xl 2xl:max-w-xl"
      poster="/storage/ar-graffiti-poster.jpg"
      :tags="['C#', 'Unity', 'ARCore', 'Photoshop', 'Image Recognition']" 
      vidSrc="https://kmw-bitmovin.s3.amazonaws.com/ar-graffiti-final/manifest.m3u8"
      >
      <template v-slot:headline>AR Graffiti</template>
      <template v-slot:secondary-headline></template>
      <template v-slot:paragraph>
        Designed an AR experience for the murals and street art of Red Bank, NJ using ARCore and ARKit's image tracking capabilities. Upon detection, murals come alive with animated GIF overlays crafted in Photoshop, adding a dynamic layer to the urban canvas.
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
