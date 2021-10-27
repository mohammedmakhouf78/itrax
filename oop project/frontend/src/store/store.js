import Vue from "vue";
import Vuex from "vuex";

Vue.use(Vuex);

export const store = new Vuex.Store({
  state: {
    loggedIn: localStorage.getItem("loggedIn"),
    user: {
      email: "",
    },
  },
  getters: {},
  mutations: {
    logIn: (state, payload) => {
      localStorage.setItem("loggedIn", "true");
      state.loggedIn = localStorage.getItem("loggedIn");
      state.user.email = payload;
    },
    logout: (state) => {
      localStorage.setItem("loggedIn", "false");
      state.loggedIn = localStorage.getItem("loggedIn");
      state.user.email = "";
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
