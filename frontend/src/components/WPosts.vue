<template>
  <div>
    <template v-for="fetch_post in fetch_posts">
      <div :key="fetch_post.id">
        {{ fetch_post.title.rendered }}
      </div>
      <p
        :key="fetch_post.content.rendered"
        v-html="fetch_post.content.rendered"
      />
      <a
        :href="`/post/${fetch_post.id}`"
        :key="fetch_post.id"
        style="position: relative; padding-bottom: 10px"
        >Link here</a
      >
    </template>
  </div>
</template>

<script>
// @ is an alias to /src
import axios from "axios";
export default {
  name: "WPosts",
  data: () => ({
    fetch_posts: [],
    isLoaded: false,
  }),
  mounted() {
    axios
      .get("/wp-json/wp/v2/posts")
      .then((response) => {
        this.fetch_posts = response.data;
        this.isLoaded = true;
        console.log("Subscribers: " + this.fetch_posts);
      })
      .catch((err) => console.log(err));
  },
};
</script>
