<template>
  <div>
    <!-- 検索フォーム -->
    <input type="text" v-model="search" placeholder="キーワード検索" @input="fetchWorks" />

    <!-- タグ選択 -->
    <select v-model="tag" @change="fetchWorks">
      <option value="">すべてのタグ</option>
      <option v-for="t in tags" :key="t" :value="t">{{ t }}</option>
    </select>

    <!-- 一覧 -->
    <div v-for="work in works.data" :key="work.id" class="work-item">
      <img :src="work.image" alt="" width="150" />
      <h3>{{ work.title }}</h3>
      <p>{{ work.description }}</p>
      <a :href="`/works/${work.id}`">詳細を見る</a>
    </div>

    <!-- ページネーション -->
    <div v-if="works.last_page > 1">
      <button
        v-for="page in works.last_page"
        :key="page"
        @click="fetchWorks(page)"
        :disabled="page === works.current_page"
      >
        {{ page }}
      </button>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      works: { data: [] },
      search: "",
      tag: "",
      tags: []
    };
  },
  mounted() {
    this.fetchWorks();
  },
  methods: {
    fetchWorks(page = 1) {
      let params = new URLSearchParams({
        search: this.search,
        tag: this.tag,
        page
      }).toString();

      fetch(`/works?${params}`, {
        headers: { "Accept": "application/json" }
      })
        .then(res => res.json())
        .then(data => {
          this.works = data;
          // タグ一覧抽出（全作品からユニークタグ）
          let allTags = [];
          data.data.forEach(item => {
            allTags.push(...item.tags);
          });
          this.tags = [...new Set(allTags)];
        });
    }
  }
};
</script>

<style>
.work-item {
  margin-bottom: 20px;
}
</style>
