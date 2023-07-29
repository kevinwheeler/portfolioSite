<template>
  <Card 
      imgSrc="/storage/geomesa-card.jpeg"
      :tags="['Scala', 'Accumulo', 'Hadoop', 'Distributed Computing', 'GIS']"
      href="/projects/density-iterator"
      :classes="cardClasses">
        <template v-slot:headline> Temporal Density Iterator </template>
        <template v-slot:secondary-headline> GeoMesa Temporal Density Iterator </template>
        <template v-slot:paragraph>
            Open source contribution adding functionality to distributed database to return a histogram of where data points fall temporally.
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
