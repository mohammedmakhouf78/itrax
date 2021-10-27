import Vue from "vue";
import Router from "vue-router";
import home from "./pages/Home.vue";
import Blogs from "./pages/Blogs.vue";
import Register from "./pages/Register.vue";
import Login from "./pages/Login.vue";
import { store } from "./store/store";

Vue.use(Router);

const router = new Router({
  mode: "history",
  routes: [
    {
      path: "/",
      component: home,
      name: "home",
    },
    {
      path: "/blogs",
      component: Blogs,
      name: "blogs",
    },

    {
      path: "/register",
      component: Register,
      name: "register",
      meta: {
        requiresNotAuth: true,
      },
    },

    {
      path: "/login",
      component: Login,
      name: "login",
      meta: {
        requiresNotAuth: true,
      },
    },
  ],
});

router.beforeEach((to, from, next) => {
  // if (to.matched.some((record) => record.meta.requiresAuth)) {
  //   if (store.state.loggedIn) {
  //     next();
  //     return;
  //   }
  //   next("/login");
  // } else {
  //   next();
  // }
  if (to.matched.some((record) => record.meta.requiresNotAuth)) {
    if (store.state.loggedIn == "false") {
      next();
      return;
    }
    next("/");
  } else {
    next();
  }
});

export default router;
