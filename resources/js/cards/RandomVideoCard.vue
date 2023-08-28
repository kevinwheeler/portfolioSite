<template>
  <Card 
      imgSrc="/storage/random-video-card.jpg"
      href="/projects/random-video"
      :tags="['Spring Framework', 'Hibernate', 'React', 'Redux', 'Java', 'Bootstrap']" 
      :classes="cardClasses">
      <template v-slot:headline>Random Video</template>
      <template v-slot:secondary-headline>www.randomvideo.site</template>
      <template v-slot:paragraph>
          A simple Spring + React CRUD app where users can create video lists and an associated URL, and other people can view a random video from those lists at that URL.
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
