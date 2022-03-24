<template>
  <q-layout view="lHh Lpr lFf" class="q-mx-auto">
    <Header />
    <q-page-container>
      <router-view />
    </q-page-container>
  </q-layout>
</template>

<script>
import { ref } from "vue";
import Header from "./components/HeaderComp.vue";

export default {
  name: "LayoutDefault",

  components: {
    Header,
  },

  setup() {
    return {
      leftDrawerOpen: ref(false),
    };
  },
};
</script>

<style lang="scss">
@import "./styles/style.scss";
</style>
