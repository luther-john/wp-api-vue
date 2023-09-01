<template>
  <div></div>
</template>

<script>
// @ is an alias to /src
/* eslint-disable */
import axios from "axios";
export default {
  name: "CarouselSection",
  data: () => ({
    fetch_carousels: [],
    isLoaded: false,
  }),
  mounted() {
    axios
      .get("/wp-json/wp/v2/carousels")
      .then((response) => {
        this.fetch_carousels = response.data;
        this.isLoaded = true;
        console.log("Subscribers: " + this.fetch_carousels);
      })
      .catch((err) => console.log(err));
  },
};
</script>
