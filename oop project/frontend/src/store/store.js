import Vue from "vue";
import Vuex from "vuex";

Vue.use(Vuex);

export const store = new Vuex.Store({
  state: {
    loggedIn: localStorage.getItem("loggedIn"),
    email: localStorage.getItem("email"),
  },
  getters: {},
  mutations: {
    logIn: (state, payload) => {
      localStorage.setItem("loggedIn", "true");
      localStorage.setItem("email", payload);
      state.loggedIn = localStorage.getItem("loggedIn");
      state.email = localStorage.getItem("email");
    },
    logout: (state) => {
      localStorage.setItem("loggedIn", "false");
      localStorage.setItem("email", "");
      state.loggedIn = localStorage.getItem("loggedIn");
      state.email = localStorage.getItem("email");
    },
  }, //sync
  actions: {
    logIn: (context, user) => {
      context.commit("logIn", user);
    },
    logout: (context) => {
      context.commit("logout");
    },
  }, //async
});
