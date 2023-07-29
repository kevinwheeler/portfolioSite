<template>
  <Card 
      imgSrc="/storage/translate-search.jpg"
      href="/projects/translate-search"
      :tags="['Laravel', 'Apache', 'MySQL', 'PHP', 'Google APIs']"
      :classes="cardClasses">
      <template v-slot:headline> Translate Search </template>
      <template v-slot:secondary-headline>www.translatesearch.com</template>
      <template v-slot:paragraph>
          A web application that translates a user provided search query and selection of languages and displays the Google image search results for each language.
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
