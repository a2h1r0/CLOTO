<template>
  <v-dialog v-model="dialog" max-width="440">
    <v-card>
      <v-card-text>
        <v-container>
          <v-row>
            <v-col>
              <!-- エラーメッセージ -->
              <v-alert type="error" v-if="registerErrors">
                <span v-if="registerErrors.username">
                  <span v-for="msg in registerErrors.username" :key="msg">{{ msg }}</span>
                </span>
                <span v-if="registerErrors.email">
                  <span v-for="msg in registerErrors.email" :key="msg">{{ msg }}</span>
                </span>
              </v-alert>

              <!-- ロゴ -->
              <img
                :src="$storage('system') + 'logo.png'"
                class="login-logo"
                alt="logo"
                width="35"
                height="35"
                v-if="!registerErrors"
              />

              <!-- タイトル -->
              <h2>新規登録</h2>

              <!-- フォーム -->
              <v-form>
                <v-text-field
                  v-model="username"
                  :rules="[rules.required, rules.usernameMin, rules.usernameMax]"
                  label="ユーザー名"
                  counter="16"
                ></v-text-field>

                <v-text-field
                  v-model="email"
                  :rules="[rules.required, rules.email]"
                  label="メールアドレス"
                ></v-text-field>

                <v-text-field
                  :append-icon="showPassword ? 'far fa-eye' : 'far fa-eye-slash'"
                  :rules="[rules.required, rules.passwordMin, rules.passwordMax]"
                  :type="showPassword ? 'text' : 'password'"
                  class="input-group--focused"
                  v-model="password"
                  counter="64"
                  label="パスワード"
                  @click:append="showPassword = !showPassword"
                ></v-text-field>

                <v-text-field
                  :append-icon="showPasswordConfirmation ? 'far fa-eye' : 'far fa-eye-slash'"
                  :rules="[rules.required, rules.passwordMatch]"
                  :type="showPasswordConfirmation ? 'text' : 'password'"
                  v-model="passwordConfirmation"
                  counter="64"
                  label="パスワード再入力"
                  @click:append="showPasswordConfirmation = !showPasswordConfirmation"
                ></v-text-field>

                <v-text-field
                  v-model="handlename"
                  :rules="[rules.required, rules.handlenameMax]"
                  counter="20"
                  label="表示名"
                ></v-text-field>

                <v-row justify="center">
                  <button
                    v-on:click="register()"
                    type="button"
                    class="btn btn-cloto-primary"
                    v-bind:disabled="isButtonDisabled"
                  >登録</button>
                </v-row>
              </v-form>
            </v-col>
          </v-row>
        </v-container>

        <!-- ログイン画面へのリンク -->
        <v-row justify="center">
          既にアカウントはお持ちの方は
          <router-link :to="{ name: 'login' }">こちら</router-link>
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
        inner: '新規登録',
      };
    },
  },
  data() {
    return {
      dialog: true,
      username: '',
      email: '',
      password: '',
      passwordConfirmation: '',
      handlename: '',
      showPassword: false,
      showPasswordConfirmation: false,
      isButtonDisabled: true,
      rules: {
        required: (v) => !!v || '必須項目です。',
        usernameMin: (v) => v.length >= 4 || '4文字以上で入力してください。',
        usernameMax: (v) => v.length <= 16 || '16文字以下で入力してください。',
        email: (v) => {
          const pattern = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
          return pattern.test(v) || 'メールアドレスが無効です。';
        },
        passwordMin: (v) => v.length >= 8 || '8文字以上で入力してください。',
        passwordMax: (v) => v.length <= 64 || '64文字以下で入力してください。',
        passwordMatch: (v) => v === this.password || 'パスワードが一致しません。',
        handlenameMax: (v) => v.length <= 16 || '20文字以下で入力してください。',
      },
    };
  },
  computed: {
    _allTexts() {
      return [this.username, this.email, this.password, this.passwordConfirmation, this.handlename];
    },
    apiStatus() {
      return this.$store.state.auth.apiStatus;
    },
    registerErrors() {
      return this.$store.state.auth.registerErrorMessages;
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
    register: async function () {
      // データの作成
      var params = {
        username: this.username,
        email: this.email,
        password: this.password,
        password_confirmation: this.passwordConfirmation,
        handlename: this.handlename,
      };

      // 新規登録処理
      await this.$store.dispatch('auth/register', params);

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
