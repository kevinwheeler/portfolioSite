<template>
  <Card 
      imgSrc="/storage/portfolio-site-card.jpg"
      href="/projects/portfolio"
      :tags="['Vue.js', 'Tailwind CSS', 'Laravel', 'PHP', 'MySQL']" 
      :classes="cardClasses">
      <template v-slot:headline>Portfolio Website</template>
      <template v-slot:secondary-headline>www.kevinwheeler.net</template>
      <template v-slot:paragraph>
          The very website that you are currently viewing.
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
