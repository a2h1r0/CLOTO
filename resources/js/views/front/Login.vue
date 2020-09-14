<template>
  <v-dialog v-model="dialog" max-width="440">
    <v-card>
      <v-card-text>
        <v-container>
          <v-row>
            <v-col>
              <!-- エラーメッセージ -->
              <v-alert type="error" v-if="loginErrors">
                <span v-for="msg in loginErrors.loginField" :key="msg">{{ msg }}</span>
              </v-alert>

              <!-- ロゴ -->
              <img
                :src="$storage('system') + 'logo.png'"
                class="login-logo"
                alt="logo"
                width="35"
                height="35"
                v-if="!loginErrors"
              />

              <!-- タイトル -->
              <h2>ログイン</h2>

              <!-- フォーム -->
              <v-form>
                <v-text-field
                  v-model="loginField"
                  label="ユーザー名 または メールアドレス"
                ></v-text-field>

                <v-text-field
                  :append-icon="showPassword ? 'far fa-eye' : 'far fa-eye-slash'"
                  :type="showPassword ? 'text' : 'password'"
                  v-model="password"
                  label="パスワード"
                  @click:append="showPassword = !showPassword"
                ></v-text-field>

                <v-row justify="center">
                  <button
                    v-on:click="login()"
                    type="button"
                    class="btn btn-cloto-primary"
                    v-bind:disabled="isButtonDisabled"
                  >
                    ログイン
                  </button>
                </v-row>
              </v-form>
            </v-col>
          </v-row>
        </v-container>

        <!-- 新規登録画面へのリンク -->
        <v-row justify="center">
          アカウントをお持ちでない方は<router-link :to="{ name: 'register' }">こちら</router-link>
        </v-row>
      </v-card-text>
    </v-card>
  </v-dialog>
</template>

<script>
export default {
  head: {
    title() {
      return {
        inner: 'ログイン',
      };
    },
  },
  data() {
    return {
      dialog: true,
      loginField: '',
      password: '',
      showPassword: false,
      isButtonDisabled: true,
    };
  },
  computed: {
    _allTexts() {
      return [this.loginField, this.password];
    },
    apiStatus() {
      return this.$store.state.auth.apiStatus;
    },
    loginErrors() {
      return this.$store.state.auth.loginErrorMessages;
    },
  },
  watch: {
    dialog: function () {
      // モーダルが閉じたらリダイレクト
      if (this.dialog === false) {
        this.$router.push({ name: 'index' });
      }
    },
    _allTexts(inputField) {
      if (inputField.indexOf('') === -1) {
        this.isButtonDisabled = false; // ログインボタンの有効化
      } else {
        this.isButtonDisabled = true; // ログインボタンの無効化
      }
    },
  },
  methods: {
    login: async function () {
      // データの作成
      var params = {
        loginField: this.loginField,
        password: this.password,
      };

      // ログイン処理
      await this.$store.dispatch('auth/login', params);

      if (this.apiStatus) {
        // ページ遷移
        this.$router.push({ name: 'home' });
      }
    },
  },
  created() {
    // エラーの初期化
    this.$store.commit('auth/setLoginErrorMessages', null);
  },
};
</script>

<style lang="scss" scoped>
@import '~/_variables';

.login-logo {
  display: block;
  margin: 0 auto;
}

h2 {
  margin: 0.8em 0 0.5em 0;
  text-align: center;
  font-weight: bold;
}
</style>
