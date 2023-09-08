<template>
  <div>
    <div class="card p-3 shadow">
      <nav>
        <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
          <button
            class="nav-link active"
            id="nav-all-tab"
            data-bs-toggle="tab"
            data-bs-target="#nav-all"
            type="button"
            role="tab"
            aria-controls="nav-all"
            aria-selected="true"
          >
            ALL
          </button>
          <button
            class="nav-link"
            id="nav-digicert-tab"
            data-bs-toggle="tab"
            data-bs-target="#nav-digicert"
            type="button"
            role="tab"
            aria-controls="nav-digicert"
            aria-selected="true"
          >
            DIGICERT
          </button>
          <button
            class="nav-link"
            id="nav-geotrust-tab"
            data-bs-toggle="tab"
            data-bs-target="#nav-geotrust"
            type="button"
            role="tab"
            aria-controls="nav-geotrust"
            aria-selected="false"
          >
            GEOTRUST
          </button>
          <button
            class="nav-link"
            id="nav-thawte-tab"
            data-bs-toggle="tab"
            data-bs-target="#nav-thawte"
            type="button"
            role="tab"
            aria-controls="nav-thawte"
            aria-selected="false"
          >
            THAWTE
          </button>
          <button
            class="nav-link"
            id="nav-rapidssl-tab"
            data-bs-toggle="tab"
            data-bs-target="#nav-rapidssl"
            type="button"
            role="tab"
            aria-controls="nav-rapidssl"
            aria-selected="false"
          >
            RapidSSL
          </button>
        </div>
      </nav>
      <div class="tab-content p-3 border bg-light" id="nav-tabContent">
        <div
          class="tab-pane fade active show"
          id="nav-all"
          role="tabpanel"
          aria-labelledby="nav-all-tab"
        >
          <DigiCert />
          <GeoTrustSSL />
          <ThawteSSL />
          <RapidSSL />
        </div>
        <div
          class="tab-pane fade"
          id="nav-digicert"
          role="tabpanel"
          aria-labelledby="nav-digicert-tab"
        >
          <DigiCert />
        </div>
        <div
          class="tab-pane fade"
          id="nav-geotrust"
          role="tabpanel"
          aria-labelledby="nav-geotrust-tab"
        >
          <GeoTrustSSL />
        </div>
        <div
          class="tab-pane fade"
          id="nav-thawte"
          role="tabpanel"
          aria-labelledby="nav-thawte-tab"
        >
          <ThawteSSL />
        </div>
        <div
          class="tab-pane fade"
          id="nav-rapidssl"
          role="tabpanel"
          aria-labelledby="nav-rapidssl-tab"
        >
          <RapidSSL />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
// @ is an alias to /src
import DigiCert from "@/views/Product/SslCerts/DigiCert.vue";
import RapidSSL from "@/views/Product/SslCerts/RapidSsl.vue";
import GeoTrustSSL from "@/views/Product/SslCerts/GeoTrustSSL.vue";
import ThawteSSL from "@/views/Product/SslCerts/ThawteSSL.vue";

export default {
  name: "SslCerts",
  components: {
    DigiCert,
    RapidSSL,
    GeoTrustSSL,
    ThawteSSL,
  },
};
</script>
<style scoped>
.nav-tabs .nav-link.active {
  background-color: #51a547;
  border: none;
  color: #fff;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  border-radius: 16px;
}
</style>
