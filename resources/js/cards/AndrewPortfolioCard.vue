<template>
  <Card 
      imgSrc="/storage/andrew-portfolio-card.jpg"
      href="/projects/andrew-portfolio"
      :tags="['Adaptive Bitrate Streaming', 'Video encoding', 'Video transcoding', 'Video editing', 'HLS.js']" 
      :classes="cardClasses">
      <template v-slot:headline>Andrew LaBoy's Portfolio</template>
      <template v-slot:secondary-headline>www.andrewlaboyxr.com</template>
      <template v-slot:paragraph>
        Andrew LaBoy's AR/VR Unity Developer Portfolio. 
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
