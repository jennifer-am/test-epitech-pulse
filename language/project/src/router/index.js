import { createRouter, createWebHistory } from "vue-router";
import NotFound from "../views/404.vue";
import HomeView from "../views/HomeView.vue";
import LibraryView from "../views/LibraryView.vue";
import ProfileView from "../views/ProfileView.vue";

const routes = [
  {
    path: "/",
    name: "Home",
    component: HomeView,
  },
  {
    path: "/library",
    name: "Library",
    component: LibraryView,
  },
  {
    path: "/profile",
    name: "Profile",
    component: ProfileView,
  },
  {
    path: "/:pathMatch(.*)*",
    name: "404",
    component: NotFound,
  },
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
