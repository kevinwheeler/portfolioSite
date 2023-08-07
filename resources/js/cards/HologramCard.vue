<template>
  <Card 
      vidSrc="/storage/hologram.mp4"
      href="/projects/hologram"
      :tags="['Laravel', 'Apache', 'MySQL', 'PHP', 'Google APIs']"
      :classes="cardClasses">
      <template v-slot:headline> Realtime Hologram </template>
      <template v-slot:secondary-headline>2069</template>
      <template v-slot:paragraph>
        Uses an IOS device camera pointed at a person and creates a hologram in VR that updates in real time.
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
