<template>
  <v-footer app inset absolute dark padless>
    <v-row justify="center" no-gutters class="black white--text">
      <v-btn color="white" text rounded exact class="my-2" :to="{ name: 'home' }"> ホーム </v-btn>

      <v-btn color="white" text rounded exact class="my-2" @click="$emit('logout')">
        ログアウト
      </v-btn>

      <v-col class="py-4 text-center white--text" cols="12">
        {{ $moment().format('YYYY') }} — <strong>© CLOTO Team</strong>
      </v-col>
    </v-row>
  </v-footer>
</template>

<style lang="scss">
.v-btn:hover {
  text-decoration: none !important;
}
</style>
