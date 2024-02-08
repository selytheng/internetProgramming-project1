import { createRouter, createWebHistory } from "vue-router";
import Homeview from "@/views/Homeview.vue";
import HomePageview from "@/views/HomePageview.vue";
import MenuPageview from "@/views/MenuPageview.vue";
import SignUpview from "@/views/SignUpview.vue";
import Singinview from "@/views/SingInview.vue";
import ForgotPwdview from "@/views/ForgotPwdview.vue";
import NewPassword from "@/views/NewPassword.vue";
import Hotview from "@/views/Hotview.vue";
import Iceview from "@/views/Iceview.vue";
import Frappeview from "@/views/Frappeview.vue";
import LocationPage from "@/views/LocationPage.vue"

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
      path: "/Menu",
      name: "menuview",
      component: MenuPageview,
    },
    {
      path: "/Hot",
      name: "hotview",
      component: Hotview,
    },
    {
      path: "/Ice",
      name: "iceview",
      component: Iceview,
    },
    {
      path: "/Frappe",
      name: "frappeview",
      component: Frappeview,
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
    {
      path: '/Location',
      component: LocationPage
    },
  ],
});

export default router;
