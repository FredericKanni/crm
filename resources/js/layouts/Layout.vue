<template>
  <v-app>
    <v-content>
      <v-container fluid>
        <router-link tag="li" to="/">Home</router-link>
        <router-link tag="li" to="/about">About</router-link>
  <router-link tag="li" to="/client">Client</router-link>
        <router-view></router-view>
      </v-container>
    </v-content>
  </v-app>
</template>

<script>

export default {};
</script>