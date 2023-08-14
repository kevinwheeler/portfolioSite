<template>
  <Card 
      :classes="cardClasses"
      href="/projects/random-video"
      :tags="['C#', 'ARCore', 'Photoshop', 'Image Recognition']" 
      vidSrc="/storage/ar-graffiti.mp4"
      >
      <template v-slot:headline>AR Graffiti</template>
      <template v-slot:secondary-headline>2019</template>
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
