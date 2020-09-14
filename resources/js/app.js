/**
 * 必要なライブラリの読み込み
 */
require('./bootstrap');
window.Vue = require('vue');
window.API = require('./api');
window.Storage = require('./consts/storage');

/**
 * Vueプロトタイプの設定
 */
Vue.prototype.$http = window.axios;
Vue.prototype.$endpoint = window.API.getEndpoint;
Vue.prototype.$storage = window.Storage.getStoragePath;

/**
 * Vueコンポーネントの読み込み
 */
Vue.component('room', require('./components/front/Room.vue').default);
Vue.component('timetable', require('./components/front/Timetable.vue').default);
Vue.component('image-drop-upload', require('./components/form/ImageDropUpload.vue').default);
Vue.component('profile', require('./components/user/Profile.vue').default);

/**
 * Vueの定義
 */
import VueHead from 'vue-head';
import router from './router';
import store from './store';
import vuetify from './plugins/vuetify';
import App from './App.vue';

Vue.use(VueHead, {
  separator: '|',
  complement: 'CLOTO',
});

const app = new Vue({
  router,
  store,
  vuetify,
  render: (h) => h(App),
});

/**
 * Vueのマウント
 */
(async function () {
  /** 前処理 */
  await store.dispatch('auth/syncAuthUser');

  /** マウント */
  app.$mount('#app');
})();
