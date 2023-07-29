<template>
  <Card 
      imgSrc="/storage/geomesa-card.jpeg"
      href="stub"
      :tags="['TODO']"
      :classes="cardClasses">
      <template v-slot:headline>stub</template>
      <template v-slot:secondary-headline>stub</template>
      <template v-slot:paragraph>
          This card is just a stub so that the cards are all the same height. This row only has two cards, so we need a third to make the cards the correct height.
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
