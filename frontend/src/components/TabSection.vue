<template>
  <div>
    <div
      v-for="(fetch_post, index) in fetch_posts"
      :key="index"
      class="accordion"
      id="accordionExample"
    >
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button
            class="accordion-button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapseTwo"
            aria-expanded="false"
            aria-controls="collapseTwo"
          >
            {{ fetch_post.title.rendered }}
          </button>
        </h2>
        <div
          id="collapseTwo"
          class="accordion-collapse collapse"
          data-bs-parent="#accordionExample"
        >
          <div class="accordion-body">
            <p v-html="fetch_post.content.rendered" />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
// @ is an alias to /src
import axios from "axios";
export default {
  name: "TabSection",
  data: () => ({
    fetch_posts: [],
    isLoaded: false,
  }),
  mounted() {
    axios
      .get("/wp-json/wp/v2/Sslcertstabs")
      .then((response) => {
        this.fetch_posts = response.data;
        this.isLoaded = true;
        console.log("Subscribers: " + this.fetch_posts);
      })
      .catch((err) => console.log(err));
  },
};
</script>
