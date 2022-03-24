<template>
  <q-avatar>
    <router-link class="text-decoration-none text-white" :to="href">{{
      getFistLetters(label)
    }}</router-link>
  </q-avatar>
</template>

<script>
export default {
  name: "AvatarComp",
  props: ["label", "href", "link"],
  methods: {
    getFistLetters(text, length = 2) {
      if (text.length) {
        return text.slice(0, length).toUpperCase();
      }
      return "";
    },
  },
};
</script>
