<template>
  <Card 
      imgSrc="/storage/keyboard-smash-card.jpg"
      href="/projects/baby-keyboard-smash-game"
      :tags="['HTML', 'Canvas API', 'Graphics', 'JavaScript']" 
      :classes="cardClasses">
      <template v-slot:headline>Baby Keyboard Smash Game</template>
      <template v-slot:secondary-headline>www.kevinwheeler.net/baby-keyboard-smash-game</template>
      <template v-slot:paragraph>
          A simple game for a baby/toddler that displays a firework and makes a sound on keypresses and mouse clicks.
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
