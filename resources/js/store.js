import { createStore } from 'vuex';

export default createStore({
  state: {
    heroVideoLoadedEnough: false,
  },
  mutations: {
    setHeroVideoLoadedEnough(state, value) {
      state.heroVideoLoadedEnough = value;
    },
  },
});