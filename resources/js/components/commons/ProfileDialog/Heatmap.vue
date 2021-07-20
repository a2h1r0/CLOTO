<template>
  <div>
    <div class="d-flex">
      <p>一年間のカルテ数： {{ kartes.year }}</p>
      <p class="ml-5">一か月間のカルテ数： {{ kartes.month }}</p>
    </div>
    <calendar-heatmap
      :values="kartes.date"
      :max="4"
      :end-date="Date()"
      :range-color="[
        '#ebedf0',
        'rgba(255,202,43,0.4)',
        'rgba(255,202,43,0.6)',
        'rgba(255,202,43,0.8)',
        'rgba(255,202,43,1.0)',
      ]"
      tooltip-unit="kartes"
    ></calendar-heatmap>
  </div>
</template>

<script>
export default {
  props: {
    mapData: {
      type: Promise,
      required: true,
    },
  },
  data() {
    return {
      // カルテ数に関するデータを格納
      kartes: {
        year: 0,
        month: 0,
        date: [],
      },
    };
  },
  methods: {
    /**
     * 親コンポーネントから渡されたPromiseオブジェクトのvalueプロパティの値を取得
     */
    getData: async function () {
      let promiseData = null;
      await this.mapData.then(function (value) {
        promiseData = value;
      });
      // すべてのカルテの作成日時の取得
      const allDate = promiseData.map((karte) => karte.created_at);
      return allDate;
    },

    /**
     * すべてのカルテの作成日時のうち現在から一年以内のもののカウント
     * @param {Object} kartes - カルテのデータ
     */
    countPerYear: function (kartes) {
      // 現在から一年前の日付の取得
      const now = new Date();
      const lastYear = now.setFullYear(now.getFullYear() - 1);

      // 現在から一年前の日付よりも後に作成されたカルテ数の取得
      let count = 0;
      kartes.forEach((karte) => (count = lastYear <= new Date(karte) ? count + 1 : count));
      return count;
    },

    /**
     * すべてのカルテの作成日時のうち現在から一か月以内のもののカウント
     * @param {Object} kartes - カルテのデータ
     */
    countPerMonth: function (kartes) {
      // 現在から一年前の日付の取得
      const now = new Date();
      const lastMonth = now.setMonth(now.getMonth() - 1);

      // 現在から一年前の日付よりも後に作成されたカルテ数の取得
      let count = 0;
      kartes.forEach((karte) => (count = lastMonth <= new Date(karte) ? count + 1 : count));
      return count;
    },

    /**
     * カルテの作成状況を示すグラフに入れるデータの作成
     * @param {Object} kartes - カルテのデータ
     */
    countPerDate: function (kartes) {
      // 作成日時ごとにカルテ数をカウント
      let countDate = {};
      kartes.forEach(
        (karte) =>
          (countDate[karte.substr(0, 10)] =
            countDate[karte.substr(0, 10)] === undefined ? 1 : countDate[karte.substr(0, 10)] + 1)
      );

      // グラフで使用できるようにデータを加工
      const results = Object.keys(countDate).map((k) => ({
        date: k,
        count: countDate[k],
      }));
      return results;
    },
  },
  mounted: async function () {
    // 親コンポーネントから渡されるオブジェクトの取得
    const kartes = await this.getData();

    // 現在から一年以内に作成されたカルテ数の取得
    this.kartes.year = this.countPerYear(kartes);

    // 現在から一か月以内に作成されたカルテ数の取得
    this.kartes.month = this.countPerMonth(kartes);

    // カルテの作成状況を示すグラフに入れるデータの挿入
    this.kartes.date = this.countPerDate(kartes);
  },
};
</script>

