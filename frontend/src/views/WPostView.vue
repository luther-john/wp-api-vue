<template>
  <div class="wpost">
    <h1>This is an wpost page by Id: {{ this.$route.params.id }}</h1>
  </div>
</template>
<script>
// @ is an alias to /src
import axios from "axios";
export default {
  name: "WPostView",
  data: () => ({
    post: [],
    id: null,
    isLoaded: false,
  }),
  mounted() {
    axios
      .get("`/wp-json/wp/v2/posts/6`")
      .then((response) => {
        this.post = response.data;
        this.isLoaded = true;
        console.log("Subscribers: " + this.post);
      })
      .catch((err) => console.log(err));
  },
};
</script>
