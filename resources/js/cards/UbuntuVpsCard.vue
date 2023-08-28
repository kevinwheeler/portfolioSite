<template>
  <Card 
      imgSrc="/storage/ubuntu-logo-card.jpg"
      href="/projects/ubuntu-vps"
      :tags="['Linux', 'Server Security', 'Apache', 'MySQL', 'Monitoring']"
      :classes="cardClasses">
      <template v-slot:headline>Ubuntu VPS</template>
      <template v-slot:secondary-headline>2022</template>
      <template v-slot:paragraph>
          Ubuntu VPS for cheaply hosting projects.
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
