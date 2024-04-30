<template>
  <Card 
      imgSrc="/storage/notes-app-card.webp"
      href="/projects/notes-app"
      :tags="['NestJS', 'Next.js', 'Docker', 'AWS ECS', 'SSR', 'GraphQL']" 
      :classes="cardClasses">
      <template v-slot:headline>Notes App</template>
      <template v-slot:secondary-headline>notes-app.kevinwheeler.net (EOL)</template>
      <template v-slot:paragraph>
        A simple notes app created in three weeks as part of a job interview process.
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
