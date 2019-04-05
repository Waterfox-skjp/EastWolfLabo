import Vue from 'vue'
import Vuex from 'vuex'
import createPersistedState from 'vuex-persistedstate'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    correct: []
  },
  mutations: {
    correctAdd(state, x) {
      if (state.correct.indexOf(x) == -1){
        state.correct.push(x)
      }
    }
  },
  getters: {
    lastCorrect(state){
      if (state.correct.length > 0){
        return state.correct.reduce((a, b) => a > b ? a : b)
      }
    }
  },
  plugins: [
    createPersistedState({
      storage: window.localStorage,
      key: 'nazotoki-system'
    })
  ]
})
