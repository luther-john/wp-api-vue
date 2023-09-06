<template>
  <div class="container">
    <div>
      <p>Slider</p>
    </div>
    <div class="py-2">
      <ProductSection />
    </div>
    <div class="py-2">
      <SslCertsSection />
    </div>
    <div>
      <TabSection />
    </div>
    <div class="py-2" />
    <div>
      <CarouselSection />
    </div>
    <div>
      <p>Our Trusted Clients</p>
    </div>
  </div>
</template>

<script>
// @ is an alias to /src
import CarouselSection from "@/components/CarouselSection.vue";
import ProductSection from "@/views/Product/ProductSection.vue";
import SslCertsSection from "@/components/SslCertsSection.vue";
import TabSection from "@/components/TabSection.vue";

export default {
  name: "HomeView",
  components: {
    TabSection,
    ProductSection,
    SslCertsSection,
    CarouselSection,
  },
};
</script>
