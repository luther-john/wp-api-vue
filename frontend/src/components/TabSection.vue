<template>
  <div>
    <div class="accordion" id="accordionExample">
      <div class="accordion-item" v-for="item in fetch_posts" :key="item.id">
        <h2 class="accordion-header" :key="item.id">
          <button
            class="accordion-button"
            type="button"
            data-bs-toggle="collapse"
            :data-bs-target="`#collapseOne${item.id}`"
            aria-expanded="false"
            :aria-controls="`collapseOne${item.id}`"
          >
            {{ item.title.rendered }}
          </button>
        </h2>
        <div
          :id="`collapseOne${item.id}`"
          class="accordion-collapse collapse"
          data-bs-parent="#accordionExample"
        >
          <div class="accordion-body">
            <p v-html="item.content.rendered" />
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
