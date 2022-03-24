<template>
  <div>
    <q-toolbar class="bg-blue-grey shadow-1">
      <q-btn flat
        ><router-link class="text-decoration-none text-white" to="/"
          >Business Card Manager</router-link
        ></q-btn
      >
      <q-space />

      <q-tabs v-model="tab" shrink stretch>
        <q-tab no-caps
          ><router-link class="text-decoration-none text-white" :to="{ name: 'Profile' }"
            >Profile</router-link
          ></q-tab
        >
        <q-tab no-caps
          ><router-link class="text-decoration-none text-white" :to="{ name: 'Library' }"
            >Library</router-link
          ></q-tab
        >
        <!-- <q-tab>
          <avatar
            class="bg-indigo"
            size="30px"
            v-if="$store.state.user && $store.state.user.name"
            :href="{ name: 'Profile' }"
            :label="$store.state.user.name"
          />
        </q-tab> -->
        <!-- <q-tab
          no-caps
          v-if="$store.state.user"
          label="Deconnexion"
          @click="logout"
        ></q-tab>
        <q-tab no-caps v-if="!$store.state.user"
          ><router-link class="text-decoration-none" :to="{ name: 'Login' }"
            >Se connecter</router-link
          ></q-tab
        >
        <q-tab no-caps v-if="!$store.state.user"
          ><router-link
            class="text-decoration-none bg-teal"
            :to="{ name: 'Register' }"
            >S'inscrire</router-link
          ></q-tab
        > -->
      </q-tabs>
    </q-toolbar>
  </div>
</template>

<script>
// import Avatar from "./AvatarComp.vue";

export default {
  name: "HeaderComp",
  // components: {
  //   Avatar,
  // },
  // methods: {
  //   logout() {
  //     this.$store.dispatch("logout");
  //     this.$router.push("/");
  //   },
  // },

  // created() {
  //   this.$store.dispatch("loadUser");
  // },
};
</script>
