<template>
  <div>
    <Header />
    <Main />
  </div>
</template>

<script>
import Header from "../components/Header.vue";
import Main from "../components/Main.vue";
import Posts from "../pages/Posts.vue";

export default {
  name: "App",
  data: function () {
    return {
      postlist: [],
    };
  },
  components: {
    Header,
    Main,
    Posts,
  },
};
</script>

<style lang="scss" scoped>
</style>
