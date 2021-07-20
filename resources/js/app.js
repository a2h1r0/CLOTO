/**
 * 必要なライブラリの読み込み
 */
require('./bootstrap');
require('fabric');
window.Vue = require('vue');
window.Peer = require('skyway-js');
window.FlowChat = require('./plugins/flow-chat');

/**
 * Vueプロトタイプの設定
 */
Vue.prototype.$moment = require('moment');
Vue.prototype.$storage = require('./consts/storage').getStoragePath;
Vue.prototype.$docs = require('./consts/storage').getDocsPath;
const functions = require('./plugins/functions');
Vue.prototype.$formatStr = functions.formatStr;
Vue.prototype.$statusColor = functions.statusColor;
Vue.prototype.$periodName = functions.periodName;
Vue.prototype.$periodColor = functions.periodColor;
Vue.prototype.$classColor = functions.classColor;
Vue.prototype.$slack = functions.slackPost;

/**
 * Vueコンポーネントの読み込み
 */
Vue.component('KarteContainer', require('./components/commons/KarteContainer').default);
Vue.component('PostContainer', require('./components/commons/PostContainer').default);
Vue.component('KartePostDialog', require('./components/commons/KartePostDialog').default);
Vue.component('ImageInput', require('./components/commons/form/ImageInput').default);

/**
 * Vueの定義
 */
import App from './App.vue';
import router from './router';
import store from './store';
import vuetify from './plugins/vuetify';
import { VueWindowSizePlugin } from 'vue-window-size/option-api';
import VueHead from 'vue-head';
import VueDragscroll from 'vue-dragscroll';
import VueScrollTo from 'vue-scrollto';
import Chat from 'vue-beautiful-chat';
import VueMasonryWall from 'vue-masonry-wall';
import VueCalendarHeatmap from 'vue-calendar-heatmap';

Vue.use(VueWindowSizePlugin)
  .use(VueHead, {
    separator: '/',
    complement: process.env.MIX_APP_NAME,
  })
  .use(VueDragscroll)
  .use(VueScrollTo)
  .use(Chat)
  .use(VueMasonryWall)
  .use(VueCalendarHeatmap);

new Vue({
  router,
  store,
  vuetify,
  render: (h) => h(App),
}).$mount('#app');
