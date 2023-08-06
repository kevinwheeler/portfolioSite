<template>
  <Card 
      imgSrc="/storage/nothing-but-headlines.jpg" 
      href="/projects/multiplayer-painting" 
      :tags="['Node.js','Backbone.js','MongoDB', 'AWS S3', 'Heroku', 'Bootstrap', 'Facebook APIs']" 
      :classes="cardClasses">
      <template v-slot:headline> AR Multiplayer Painting </template>
      <template v-slot:secondary-headline> 2029 </template>
      <template v-slot:paragraph>
        Multiplayer painting on Quest 2 and above headsets.
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
