<template>
  <div class="container">
    <div>
      <TabSection />
    </div>
    <div>
      <CarouselSection />
    </div>
  </div>
</template>

<script>
// @ is an alias to /src
import CarouselSection from "@/components/CarouselSection.vue";
import TabSection from "@/components/TabSection.vue";

export default {
  name: "HomeView",
  components: {
    TabSection,
    CarouselSection,
  },
};
</script>
