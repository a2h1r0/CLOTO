<template>
  <v-layout id="mystudy">
    <Drawer />
    <v-flex class="overflow-y-auto">
      <!-- 強制的にコンポーネントを初期化（変数の初期化） -->
      <router-view :key="$route.name" />
    </v-flex>
  </v-layout>
</template>

<script>
import Drawer from '@/components/mystudy/Drawer';

export default {
  components: {
    Drawer,
  },
};
</script>

<style lang="scss" scoped>
#mystudy {
  min-height: calc(100vh - 64px);
}
</style>
