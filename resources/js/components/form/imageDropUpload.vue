<template>
  <div>
    <!-- 画像アップロードエリア -->
    <div
      class="area"
      v-bind:class="{dragLeave: dragLeave, dragOver: dragOver}"
      @dragover.prevent="changeStyle('over')"
      @dragleave.prevent="changeStyle('leave')"
      @drop.prevent="uploadFile()"
    >
      <label for="upload_image" class="button btn-cloto-primary">
        <p>画像を選択</p>

        <input
          id="upload_image"
          type="file"
          name="upload_image"
          @change="uploadFile()"
          style="display:none;"
          accept="image/*"
        />
      </label>

      <p>画像ファイルをドラッグ＆ドロップ</p>

      <!-- 画像プレビュー -->
      <img class="preview" v-show="preview" v-bind:src="preview" />
    </div>

    <!-- トリミングモーダル -->
    <div class="modal" v-if="cropperModal">
      <div class="modal-content">
        <div class="modal-header-area">
          <a @click="cropperModal=false">
            <i class="fas fa-times-circle fa-2x"></i>
          </a>
        </div>

        <div class="vue-cropper">
          <vueCropper
            ref="cropper"
            :img="option.img"
            :outputSize="option.size"
            :outputType="option.outputType"
            :autoCrop="option.autoCrop"
            :autoCropWidth="option.autoCropWidth"
            :autoCropHeight="option.autoCropHeight"
            :centerBox="option.centerBox"
            :fixed="option.fixed"
            :fixedNumber="option.fixedNumber"
            :fixedBox="option.fixedBox"
            :canMove="option.canMove"
          ></vueCropper>
        </div>

        <div class="modal-footer-area">
          <button
            type="button"
            class="btn btn-lg btn-primary"
            @click="cropImage"
            v-if="option.img != ''"
          >決定</button>
        </div>
      </div>
    </div>
  </div>
</template>


<script>
import { VueCropper } from 'vue-cropper';

export default {
  components: {
    VueCropper,
  },
  props: {
    noChangeCropRatio: Boolean, // アスペクト比の変更許可
    ratioX: String, // 横の比
    ratioY: String, // 縦の比
  },
  data: function () {
    return {
      dragLeave: true,
      dragOver: false,
      preview: '',
      cropperModal: false,
      option: {
        img: '',
        size: 1,
        outputType: 'jpeg',
        autoCrop: true,
        autoCropWidth: 1024,
        autoCropHeight: 1024,
        centerBox: true,
        fixed: this.noChangeCropRatio,
        fixedNumber: [this.ratioX, this.ratioY],
        fixedBox: false,
        canMove: true,
      },
    };
  },
  methods: {
    uploadFile: function () {
      this.dragLeave = true;
      this.dragOver = false;

      this.cropperModal = true;

      const files = event.target.files ? event.target.files : event.dataTransfer.files;
      const file = files[0];

      // TODO: バリデーション作成の必要あり
      //   if (!/\.(gif|jpg|jpeg|png|bmp|GIF|JPG|PNG)$/.test(event.target.value)) {
      //     alert("画像の形式ではありません！");
      //     return false;
      //   }

      var reader = new FileReader();
      reader.onload = (event) => {
        let data;
        if (typeof event.target.result === 'object') {
          data = window.URL.createObjectURL(new Blob([event.target.result]));
        } else {
          data = event.target.result;
        }

        this.option.img = data;
      };

      reader.readAsArrayBuffer(file);
    },
    cropImage: function () {
      this.cropperModal = false;

      this.$refs.cropper.getCropData((data) => {
        // プレビューデータ
        this.preview = data;
      });

      this.$refs.cropper.getCropBlob((data) => {
        // 親コンポーネントのformDataに画像を追加
        this.$parent.formData.append('upload-image', data, 'image.png');
      });
    },
    changeStyle: function (status) {
      if (status == 'over') {
        this.dragLeave = false;
        this.dragOver = true;
      } else if (status == 'leave') {
        this.dragLeave = true;
        this.dragOver = false;
      }
    },
  },
};
</script>


<style lang="scss" scoped>
@import '~/_variables';

/* 画像アップロードエリア */
.area {
  padding: 30px;
  text-align: center;
  border-radius: 30px;

  .button {
    border-radius: 0.25rem;

    p {
      margin: 0.375rem 0.75rem;
    }
  }

  /* 画像プレビュー */
  .preview {
    max-width: 100%;
  }
}

/* カラー変更 */
.dragLeave {
  background-color: $light-gray;
}

.dragOver {
  background-color: rgba(246, 191, 0, 0.3);
}

/* トリミングモーダル */
/* 表示，非表示はvueで制御するので表示状態にしておく */
.modal {
  display: block;

  .modal-content {
    width: 535px;
    height: 620px;
    margin: auto;
    top: 50%;
    transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
    border-radius: 5px;

    .modal-header-area {
      height: 40px;
      padding: 5px;
      text-align: right;

      a {
        color: $vermilion;
        cursor: pointer;

        &:hover {
          color: $red;
        }
      }
    }

    .vue-cropper {
      width: 530px;
      height: 510px;
      margin: 0 auto;
    }

    .modal-footer-area {
      display: inline-block;
      line-height: 70px;
      text-align: center;
    }
  }
}
</style>
