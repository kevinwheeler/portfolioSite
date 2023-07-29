<template>
  <Card 
      imgSrc="/storage/nothing-but-headlines.jpg" 
      href="/projects/nothing-but-headlines" 
      :tags="['Node.js','Backbone.js','MongoDB', 'AWS S3', 'Heroku', 'Bootstrap', 'Facebook APIs']" 
      :classes="cardClasses">
      <template v-slot:headline> Nothing But Headlines </template>
      <template v-slot:secondary-headline> www.nothingbutheadlines.lol (EOL) </template>
      <template v-slot:paragraph>
          A web application for creating fake/funny headlines to be displayed as articles on Facebook.
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
