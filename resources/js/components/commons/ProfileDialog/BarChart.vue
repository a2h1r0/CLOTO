<script>
import { Bar } from 'vue-chartjs';

export default {
  extends: Bar,
  props: {
    graphData: {
      type: Promise,
      required: true,
    },
  },
  data() {
    return {
      // グラフに表示するデータ
      data: {
        labels: [],
        datasets: [
          {
            label: 'タグ別のカルテのパーセンテージ',
            data: [],
            backgroundColor: [],
          },
        ],
      },
      // グラフのオプション
      options: {
        responsive: true,
        scales: {
          yAxes: [
            {
              ticks: {
                beginAtZero: true,
              },
            },
          ],
        },
      },
    };
  },
  methods: {
    /**
     * 親コンポーネントから渡されたPromiseオブジェクトのvalueプロパティの値を取得
     */
    getData: async function () {
      let promiseData = null;
      await this.graphData.then(function (value) {
        promiseData = value;
      });
      return promiseData;
    },

    /**
     * すべてのカルテに対するタグごとのカルテの割合の取得
     * @param {Object} kartes - カルテのデータ
     */
    percentagePerTag: function (kartes) {
      // すべてのカルテの件数を取得
      const allKartes = kartes.length;

      // すべてのカルテにつけられたタグを取得。カルテのタグがない場合は、「タグなし」として取得
      let allTags = kartes.map((karte) =>
        karte.tags.length !== 0 ? karte.tags : [{ name: 'タグなし' }]
      );

      let tagNames = [];
      allTags.forEach((tagObject) => (tagNames = tagNames.concat(tagObject)));
      tagNames = tagNames.map((tag) => tag.name);

      // タグごとのカルテの割合を取得
      let tagPercentage = {};
      tagNames.forEach(
        (tagName) =>
          (tagPercentage[tagName] =
            tagPercentage[tagName] === undefined ? 1 : tagPercentage[tagName] + 1)
      );

      for (let tag in tagPercentage) {
        tagPercentage[tag] = Math.round((tagPercentage[tag] / allKartes) * 100);
      }

      // タグごとのカルテの割合を降順にソート
      // ソートをかけるために、tagPercentageオブジェクトのデータを配列に入れる
      const tagPercentageArray = Object.keys(tagPercentage).map((k) => ({
        key: k,
        value: tagPercentage[k],
      }));
      // パーセンテージの値を降順に並び替え
      tagPercentageArray.sort((a, b) => b.value - a.value);
      // 配列のデータを取り出し、元のオブジェクトに戻す
      tagPercentage = Object.assign(
        {},
        ...tagPercentageArray.map((item) => ({
          [item.key]: item.value,
        }))
      );

      return tagPercentage;
    },

    /**
     * グラフにデータをセット
     * @param {Object} percentages - タグごとのカルテのパーセンテージ
     */
    setData: function (percentages) {
      let count = 0;
      for (const key in percentages) {
        // データが10以上ある場合は、上位10データをセット
        if (count < 10) {
          this.data.labels.push(key);
          this.data.datasets[0].data.push(percentages[key]);
          this.data.datasets[0].backgroundColor.push('rgba(255,202,43,0.5)');
        }
        count++;
      }

      // もしデータが10以下の場合は、グラフのデータの見栄えをよくするためにdata.datasets[0].dataに空のデータをセット
      if (this.data.datasets[0].data.length < 10) {
        const datasetsLength = this.data.datasets[0].data.length;
        for (let i = 0; i < 10 - datasetsLength; i++) {
          this.data.labels.push('');
          this.data.datasets[0].data.push(0);
        }
      }
    },
  },
  mounted: async function () {
    // 親コンポーネントから渡されるオブジェクトの取得
    const kartes = await this.getData();

    // すべてのカルテに対するタグごとのカルテの割合の取得
    const percentages = this.percentagePerTag(kartes);

    // グラフにデータをセット
    this.setData(percentages);

    // グラフの描画
    this.renderChart(this.data, this.options);
  },
};
</script>
