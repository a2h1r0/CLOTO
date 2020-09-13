<template>
  <v-app>
    <!-- ヘッダー -->
    <v-app-bar app dark>
      <router-link :to="{ name: 'index' }">
        <img :src="$storage('system') + 'header-logo.svg'" class="top-logo" />
      </router-link>

      <v-spacer></v-spacer>

      <v-app-bar-nav-icon @click.stop="drawer = !drawer" />
    </v-app-bar>

    <!-- ドロワーメニュー - 未ログイン時 -->
    <v-navigation-drawer
      app
      dark
      right
      temporary
      v-model="drawer"
      v-if="!$store.getters['auth/check']"
    >
      <v-list nav>
        <v-list-item :to="{ name: 'index' }">
          <v-list-item-icon>
            <v-icon>mdi-information</v-icon>
          </v-list-item-icon>
          <v-list-item-content>
            <v-list-item-title>トップページ</v-list-item-title>
          </v-list-item-content>
        </v-list-item>

        <v-list-item :to="{ name: 'register' }">
          <v-list-item-icon>
            <v-icon>mdi-account-plus</v-icon>
          </v-list-item-icon>
          <v-list-item-content>
            <v-list-item-title>新規登録</v-list-item-title>
          </v-list-item-content>
        </v-list-item>

        <v-list-item :to="{ name: 'login' }">
          <v-list-item-icon>
            <v-icon>mdi-login</v-icon>
          </v-list-item-icon>
          <v-list-item-content>
            <v-list-item-title>ログイン</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>

    <!-- ドロワーメニュー - ログイン時 -->
    <v-navigation-drawer app dark right temporary v-model="drawer" v-else>
      <v-list-item two-line class="px-3">
        <v-list-item-avatar>
          <img :src="$storage('icon') + $store.getters['auth/user'].icon" />
        </v-list-item-avatar>

        <v-list-item-content>
          <v-list-item-title>{{ $store.getters['auth/user'].handlename }}</v-list-item-title>
          <v-list-item-subtitle>{{
            '@' + $store.getters['auth/user'].username
          }}</v-list-item-subtitle>
        </v-list-item-content>
      </v-list-item>

      <v-divider></v-divider>

      <v-list nav>
        <v-list-item :to="{ name: 'home' }">
          <v-list-item-icon>
            <v-icon>mdi-home-city</v-icon>
          </v-list-item-icon>
          <v-list-item-content>
            <v-list-item-title>ホーム</v-list-item-title>
          </v-list-item-content>
        </v-list-item>

        <v-list-item
          :to="{ name: 'userPage', params: { username: $store.getters['auth/user'].username } }"
        >
          <v-list-item-icon>
            <v-icon>mdi-account</v-icon>
          </v-list-item-icon>
          <v-list-item-content>
            <v-list-item-title>マイページ</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list>

      <template v-slot:append v-if="$store.getters['auth/check']">
        <div class="pa-2">
          <v-btn block @click="logout">ログアウト</v-btn>
        </div>
      </template>
    </v-navigation-drawer>

    <!-- メイン -->
    <!-- Sizes your content based upon application components -->
    <v-main>
      <!-- Provides the application the proper gutter -->
      <v-container fluid>
        <div class="welcome__cloto-icon col-6" v-if="!$store.getters['auth/check']">
          <img :src="$storage('system') + 'top.png'" />
        </div>

        <!-- If using vue-router -->
        <router-view></router-view>
      </v-container>
    </v-main>

    <!-- フッター - 未ログイン時 -->
    <v-footer app dark absolute padless v-if="!$store.getters['auth/check']">
      <v-row justify="center" no-gutters>
        <v-btn color="white" text rounded class="my-2" :to="{ name: 'index' }">
          トップページ
        </v-btn>

        <v-btn color="white" text rounded class="my-2" :to="{ name: 'register' }"> 新規登録 </v-btn>

        <v-btn color="white" text rounded class="my-2" :to="{ name: 'login' }"> ログイン </v-btn>

        <v-btn color="white" text rounded class="my-2" :to="'hoge'"> 利用規約 </v-btn>

        <v-btn color="white" text rounded class="my-2" :to="'https://twitter.com/cloto_jp'">
          Twitter
        </v-btn>

        <v-btn color="white" text rounded class="my-2" :to="'mailto:info@cloto.jp'"> E-Mail </v-btn>

        <v-col dark class="py-4 text-center white--text" cols="12">
          {{ new Date().getFullYear() }} — <strong>© CLOTO Team</strong>
        </v-col>
      </v-row>
    </v-footer>

    <!-- フッター - ログイン時 -->
    <v-footer app dark absolute padless v-else>
      <v-row justify="center" no-gutters>
        <v-btn color="white" text rounded class="my-2" :to="{ name: 'home' }"> ホーム </v-btn>

        <v-btn color="white" text rounded class="my-2" @click="logout"> ログアウト </v-btn>

        <v-btn color="white" text rounded class="my-2" :to="'hoge'"> 利用規約 </v-btn>

        <v-btn color="white" text rounded class="my-2" :to="'https://twitter.com/cloto_jp'">
          Twitter
        </v-btn>

        <v-btn color="white" text rounded class="my-2" :to="'mailto:info@cloto.jp'"> E-Mail </v-btn>

        <v-col dark class="py-4 text-center white--text" cols="12">
          {{ new Date().getFullYear() }} — <strong>© CLOTO Team</strong>
        </v-col>
      </v-row>
    </v-footer>
  </v-app>
</template>

<script>
import { UNAUTHORIZED, INTERNAL_SERVER_ERROR } from '@/consts/status';

export default {
  data() {
    return {
      drawer: false, // ドロワーメニューの表示
    };
  },
  computed: {
    errorCode() {
      return this.$store.state.error.code;
    },
  },
  methods: {
    logout: async function () {
      // ログアウト処理
      await this.$store.dispatch('auth/logout');

      // トップページへリダイレクト
      if (this.$route.path != this.$router.resolve({ name: 'index' }).href) {
        this.$router.push({ name: 'index' });
      }
    },
  },
  watch: {
    errorCode: {
      // エラー発生
      async handler(val) {
        if (val === INTERNAL_SERVER_ERROR) {
          this.$router.push({ name: 'INTERNAL_SERVER_ERROR' });
        } else if (val === UNAUTHORIZED) {
          // トークンの再発行
          await this.$http.get(this.$endpoint('GET:regenerateToken'));
          // ストアのuserをクリア
          this.$store.commit('auth/setUser', null);
          // ログイン画面へ
          // this.$router.push({ name: 'login' });
          console.log('419');
        }
      },
      immediate: true,
    },
    $route() {
      // エラーの初期化
      this.$store.commit('error/setCode', null);
    },
  },
};
</script>

<style>
.top-logo {
  max-height: 64px;
  padding: 15px 0;
}
</style>
