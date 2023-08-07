<template>
  <Card 
      imgSrc="/storage/random-video-card.jpg"
      href="/projects/random-video"
      :tags="['Spring Framework', 'Hibernate', 'React', 'Redux', 'Java', 'Bootstrap']" 
      :classes="cardClasses">
      <template v-slot:headline>AR Graffiti</template>
      <template v-slot:secondary-headline>Fill me in</template>
      <template v-slot:paragraph>
        An AR application that reocgnizes and animates various and street art in Red Bank, NJ.
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
