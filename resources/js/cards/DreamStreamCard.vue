<template>
  <Card 
      imgSrc="/storage/geomesa-card.jpeg"
      :tags="['Scala', 'Accumulo', 'Hadoop', 'Distributed Computing', 'GIS']"
      href="/projects/dream-stream"
      :classes="cardClasses">
        <template v-slot:headline> Dream Stream </template>
        <template v-slot:secondary-headline> 42069 </template>
        <template v-slot:paragraph>
            iOS application that utilizes realtime human segmentation to detect people and apply VFX to them.
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
