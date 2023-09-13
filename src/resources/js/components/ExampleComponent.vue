<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div>{{ message }}</div>
        <div class="card">
          <div class="card-header">Example Component Vue3 Used</div>

          <div class="card-body">
            I'm an example component.
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { ref, onMounted } from 'vue';
export default {
  setup() {
    const message = ref('Hello Laravel Vue 3'); // リアクティブな変数の作成

    onMounted(() => { // コンポーネントがマウントされたときに実行する処理
      console.log('Component mounted.');
    });
    return {
      message, // データと処理を返す
    };
  },
};
</script>






