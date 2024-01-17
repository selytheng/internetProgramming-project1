import { createRouter, createWebHistory } from "vue-router";
import Homeview from "@/views/Homeview.vue";
import HomePageview from "@/views/HomePageview.vue";
import SignUpview from "@/views/SignUpview.vue";
import Singinview from "@/views/Singinview.vue";
import ForgotPwdview from "@/views/ForgotPwdview.vue";
import NewPassword from "@/views/NewPassword.vue";
import HotviewVue from "@/views/Hotview.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: "/",
      name: "home",
      component: Homeview,
    },
    {
      path: "/HomePage",
      name: "homepage",
      component: HomePageview,
    },
    {
      path: "/Hot",
      name: "hotview",
      component: HotviewVue,
    },
    {
      path: "/signup",
      name: "Signup",
      component: SignUpview,
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      // component: () => import('../views/AboutView.vue')
    },
    {
      path: "/signin",
      name: "Signin",
      component: Singinview,
    },
    {
      path: "/forgotpwd",
      name: "ForgotPwd",
      component: ForgotPwdview,
    },
    {
      path: "/newpwd",
      name: "NewPassword",
      component: NewPassword,
    },
  ],
});

export default router;
