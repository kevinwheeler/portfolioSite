<template>
  <Card 
      imgSrc="/storage/geomesa-card.jpeg"
      href="/projects/geomesa-gui"
      :tags="['OpenLayers', 'GIS', 'WFS', 'GIS Interface Standards']" 
      :classes="cardClasses">
      <template v-slot:headline>GeoMesa GUI</template>
      <template v-slot:secondary-headline>www.geomesa.org</template>
      <template v-slot:paragraph>
          Open source contribution adding functionality to show data points from a GeoMesa database instance on a map, and to display their info when clicked.
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
