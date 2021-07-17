<template>
  <v-dialog v-model="dialog" @click:outside="close()" width="1400">
    <v-card :color="color" dark v-if="user">
      <v-container>
        <v-row justify="end">
          <v-btn fab x-small depressed color="error" class="mr-4" @click="close()">
            <v-icon>mdi-close</v-icon>
          </v-btn>
        </v-row>

        <v-container class="d-flex">
          <v-row class="text-center" justify="center">
            <v-col class="pr-0" align-self="center">
              <v-avatar size="100"><img :src="$storage('icon') + user.icon" /></v-avatar>
              <v-row class="text-h5 mt-2" justify="center">{{ user.handlename }}</v-row>
              <v-row class="text-body-2" justify="center">{{ '@' + user.username }}</v-row>
              <v-row class="mt-2 text-body-2" justify="center">
                登録日：{{ $moment(user.created_at).format('YYYY年MM月DD日') }}
              </v-row>
              <v-row class="mt-2 text-body-2" justify="center">
                累計着席時間：{{ Math.floor(user.sitting_time / 60) }}時間
              </v-row>

              <v-row class="mt-3" justify="center" v-if="user.sns || user.web">
                <v-btn
                  icon
                  color="#00acee"
                  :href="'https://twitter.com/' + user.sns.twitter"
                  target="_blank"
                  v-if="user.sns.twitter"
                >
                  <v-icon>mdi-twitter</v-icon>
                </v-btn>

                <v-btn
                  icon
                  color="#000000"
                  :href="'https://github.com/' + user.sns.github"
                  target="_blank"
                  v-if="user.sns.github"
                >
                  <v-icon>mdi-github</v-icon>
                </v-btn>

                <v-btn
                  icon
                  :href="'https://qiita.com/' + user.sns.qiita"
                  target="_blank"
                  v-if="user.sns.qiita"
                >
                  <v-avatar size="20" color="white">
                    <v-img :src="$storage('system') + 'qiita.png'"></v-img>
                  </v-avatar>
                </v-btn>

                <v-btn icon color="#ffffff" :href="user.web" target="_blank" v-if="user.web">
                  <v-icon>mdi-home</v-icon>
                </v-btn>
              </v-row>

              <v-row class="mt-3" justify="center" v-if="user.id !== authUser.id">
                <v-btn
                  :color="!user.following ? 'primary' : 'error'"
                  :loading="loading"
                  @click="follow()"
                >
                  {{ !user.following ? 'フォロー' : 'フォロー解除' }}
                </v-btn>
              </v-row>

              <p class="mt-3 mb-0" v-if="user.followed">フォローされています</p>
              <v-card
                light
                flat
                class="mt-3 mr-2 overflow-y-auto"
                min-width="240"
                min-height="240"
                max-height="400"
              >
                <pre class="ma-3 text-body-1"
                  >{{ user.introduction ? user.introduction : '自己紹介が未記入です' }}
              </pre
                >
              </v-card>
            </v-col>
          </v-row>

          <v-row justify="center">
            <v-card light flat width="80%" class="mx-6 mt-2 text-center">
              <v-card-text class="pt-3 pl-3 pb-0 black--text">目標</v-card-text>

              <pre class="ma-3 text-body-1">{{ user.vision || 'がんばる' }}</pre>
            </v-card>
            <v-card light flat width="80%" class="mx-6 mt-2 text-center">
              <v-card-text class="pt-3 pl-3 pb-0 black--text"
                >いまやっていること
                <small v-if="user.seat">in {{ user.room.name }}</small>
                <small v-else>未着席</small>
              </v-card-text>

              <pre class="ma-3 text-body-1">{{ user.in_progress || '集中しています！' }}</pre>
            </v-card>
            <v-card light flat width="80%" class="mx-6 mt-2 text-center">
              <bar-chart :height="90" :graph-data="allKartes" v-if="barChart"></bar-chart>
            </v-card>
            <v-card light flat width="80%" class="mx-6 mt-2 text-center">
              <v-card-text class="pt-3 pl-3 pb-0 black--text">毎日のカルテ数の表示</v-card-text>
              <v-card-text class="pt-3 pl-3 pb-0 black--text"></v-card-text>
              <v-card-text class="pt-3 pl-3 pb-0 black--text"></v-card-text>
              <v-card-text class="pt-3 pl-3 pb-0 black--text"></v-card-text>
              <v-card-text class="pt-3 pl-3 pb-0 black--text"></v-card-text>
              <v-card-text class="pt-3 pl-3 pb-0 black--text"></v-card-text>
              <v-card-text class="pt-3 pl-3 pb-0 black--text"></v-card-text>
              <v-card-text class="pt-3 pl-3 pb-0 black--text"></v-card-text>
              <v-card-text class="pt-3 pl-3 pb-0 black--text"></v-card-text>
              <v-card-text class="pt-3 pl-3 pb-0 black--text"></v-card-text>
              <v-card-text class="pt-3 pl-3 pb-0 black--text"></v-card-text>
              <v-card-text class="pt-3 pl-3 pb-0 black--text"></v-card-text>
              <v-card-text class="pt-3 pl-3 pb-0 black--text"></v-card-text>
              <v-card-text class="pt-3 pl-3 pb-0 black--text"></v-card-text>
              <v-card-text class="pt-3 pl-3 pb-0 black--text"></v-card-text>
              <v-card-text class="pt-3 pl-3 pb-0 black--text"></v-card-text>
              <v-card-text class="pt-3 pl-3 pb-0 black--text"></v-card-text>
            </v-card>
          </v-row>
        </v-container>

        <v-row class="my-6" justify="center">
          <v-spacer></v-spacer>

          <v-col md="3" class="select pa-0" @click="showFollows()">
            <v-card class="py-4" :color="color" :elevation="show === 'follow' ? 1 : 3">
              <p class="text-center">フォロー</p>
              <p class="text-center mb-0">{{ user.follows_count }}</p>
            </v-card>
          </v-col>

          <v-spacer></v-spacer>

          <v-col md="3" class="select pa-0" @click="showFollowers()">
            <v-card class="py-4" :color="color" :elevation="show === 'follower' ? 1 : 3">
              <p class="text-center">フォロワー</p>
              <p class="text-center mb-0">{{ user.followers_count }}</p>
            </v-card>
          </v-col>

          <v-spacer></v-spacer>

          <v-col md="3" class="select pa-0" @click="showKartes()">
            <v-card class="py-4" :color="color" :elevation="show === 'karte' ? 1 : 3">
              <p class="text-center">カルテ</p>
              <p class="text-center mb-0"><v-icon>mdi-chevron-down</v-icon></p>
            </v-card>
          </v-col>

          <v-spacer></v-spacer>
        </v-row>

        <!-- フォロー/フォロワー一覧 -->
        <v-list
          :color="color"
          v-if="(show === 'follow' || show === 'follower') && followers.length"
        >
          <v-list-item
            v-for="follower in followers"
            :key="follower.id"
            @click="$store.dispatch('dialog/open', { type: 'user', username: follower.username })"
          >
            <v-list-item-avatar>
              <v-img :src="$storage('icon') + follower.icon"></v-img>
            </v-list-item-avatar>

            <v-list-item-content>
              <v-list-item-title>
                {{ follower.handlename }}
                <small>@{{ follower.username }}</small>
              </v-list-item-title>
              <v-list-item-subtitle>
                {{ follower.introduction || '自己紹介が入力されていません。' }}
              </v-list-item-subtitle>
            </v-list-item-content>
          </v-list-item>
        </v-list>

        <v-list
          :color="color"
          v-if="(show === 'follow' || show === 'follower') && !followers.length"
        >
          <v-list-item>
            <span class="mx-auto">誰よりも早くフォローしよう！</span>
          </v-list-item>
        </v-list>

        <!-- カルテ一覧 -->
        <v-list :color="color" v-if="show === 'karte' && kartes.length">
          <v-list-item
            v-for="karte in kartes"
            :key="karte.id"
            @click="$store.dispatch('dialog/open', { type: 'karte', id: karte.id })"
          >
            <v-img
              max-width="80"
              height="40"
              contain
              class="mr-4 my-2"
              :src="karte.path + karte.image"
              v-if="karte.image"
            ></v-img>
            <v-sheet
              color="grey lighten-2"
              width="80"
              height="40"
              class="mr-4 my-2"
              v-else
            ></v-sheet>

            <v-list-item-content class="text-truncate">
              {{ karte.body }}
            </v-list-item-content>
          </v-list-item>
        </v-list>

        <v-list :color="color" v-if="show === 'karte' && !kartes.length">
          <v-list-item>
            <span class="mx-auto">まだカルテがないようです．．．</span>
          </v-list-item>
        </v-list>
      </v-container>
    </v-card>
  </v-dialog>
</template>

<script>
import BarChart from './ProfileDialog/BarChart.vue';

export default {
  components: {
    BarChart,
  },
  data() {
    return {
      dialog: false,
      loading: false, // ローディング制御
      user: null, // 表示するプロフィール
      show: null, // フォロー/フォロワーどちらを表示するか
      followers: [], // フォロー/フォロワー一覧
      kartes: [], // カルテ一覧
      barChart: true, //カルテ別の割合を示すグラフの表示の有無
    };
  },

  computed: {
    authUser() {
      return this.$store.getters['auth/user'];
    },

    username() {
      return this.$store.getters['dialog/username'];
    },

    color() {
      return '#9e9e9e';
      // return this.$classColor(this.user.roadmaps.length ? this.user.roadmaps[0].in_progress : '');
    },

    /**
     * ユーザーのカルテのデータを子コンポーネントへ渡す
     */
    allKartes: async function () {
      // ユーザーのカルテの取得。ここで呼び出さないとthis.kartesの値が取得できないのでここで実行した
      await this.getKartes();

      return this.kartes;
    },
  },
  watch: {
    username: function (username) {
      // 値がセットされたらオープン
      if (username) {
        this.open();
      }
    },
  },

  methods: {
    /**
     * ダイアログのオープン
     */
    open: async function () {
      await this.getUser();
      this.dialog = true;
      // タグ別のカルテの割合のグラフの生成
      this.barChart = true;
    },

    /**
     * ダイアログのクローズ
     */
    close: function () {
      // タグ別のカルテの割合のグラフの削除。これをしないと、他のユーザーのプロフィールを開いたときに、前のユーザーのデータがグラフに残るため
      this.barChart = false;
      this.dialog = false;
      this.show = null;
      this.$store.dispatch('dialog/close', 'user');
    },

    /**
     * ユーザーデータの取得
     */
    getUser: async function () {
      let response = await axios.get('/api/users/' + this.username);
      this.user = response.data;
    },

    /**
     * フォロー処理
     */
    follow: async function () {
      this.loading = true;

      let response = await axios.post('/api/users/' + this.user.id + '/follow');
      this.user = response.data;

      this.loading = false;
    },

    /**
     * フォロー一覧の表示
     */
    showFollows: async function () {
      let response = await axios.get('/api/users/' + this.user.id + '/follows');
      this.followers = response.data;
      this.show = 'follow';
    },

    /**
     * フォロワー一覧の表示
     */
    showFollowers: async function () {
      let response = await axios.get('/api/users/' + this.user.id + '/followers');
      this.followers = response.data;
      this.show = 'follower';
    },

    /**
     * カルテの取得
     */
    getKartes: async function () {
      let response = await axios.get('/api/kartes/user/' + this.user.id);
      this.kartes = response.data;
    },

    /**
     * カルテ一覧の表示
     */
    showKartes: async function () {
      this.show = 'karte';
    },
  },
};
</script>

<style lang="scss" scoped>
a:hover {
  text-decoration: none;
}

pre {
  white-space: pre-wrap;
}

.select {
  cursor: pointer;
}
</style>
