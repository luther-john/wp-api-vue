<template>
  <div>
    <div class="card p-3 shadow">
      <h2 class="text-center p-3">Choose the Right Type of Certificate</h2>
      <p>
        While the need for online security is universal, not all SSL
        Certificates are created equal.
      </p>
      <p>Explore the difference between DV, OV and EV Certificates.</p>
      <nav>
        <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
          <button
            class="nav-link active"
            id="nav-home-tab"
            data-bs-toggle="tab"
            data-bs-target="#nav-home"
            type="button"
            role="tab"
            aria-controls="nav-home"
            aria-selected="true"
          >
            SSL Certificates
          </button>
          <button
            class="nav-link"
            id="nav-profile-tab"
            data-bs-toggle="tab"
            data-bs-target="#nav-profile"
            type="button"
            role="tab"
            aria-controls="nav-profile"
            aria-selected="false"
          >
            Code Signing Certificates
          </button>
          <button
            class="nav-link"
            id="nav-contact-tab"
            data-bs-toggle="tab"
            data-bs-target="#nav-contact"
            type="button"
            role="tab"
            aria-controls="nav-contact"
            aria-selected="false"
          >
            Client(S/MIME) Certificates
          </button>
          <button
            class="nav-link"
            id="nav-contact-tab"
            data-bs-toggle="tab"
            data-bs-target="#nav-sitelock"
            type="button"
            role="tab"
            aria-controls="nav-sitelock"
            aria-selected="false"
          >
            SiteLock
          </button>
        </div>
      </nav>
      <div class="tab-content p-3 border bg-light" id="nav-tabContent">
        <div
          class="tab-pane fade active show"
          id="nav-home"
          role="tabpanel"
          aria-labelledby="nav-home-tab"
        >
          <SslCerts />
        </div>
        <div
          class="tab-pane fade"
          id="nav-profile"
          role="tabpanel"
          aria-labelledby="nav-profile-tab"
        >
          <CodeSigningTable />
        </div>
        <div
          class="tab-pane fade"
          id="nav-contact"
          role="tabpanel"
          aria-labelledby="nav-contact-tab"
        >
          <ClientCertsTable />
        </div>
        <div
          class="tab-pane fade"
          id="nav-sitelock"
          role="tabpanel"
          aria-labelledby="nav-sitelock-tab"
        >
          <SiteLockTable />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
// @ is an alias to /src
import SslCerts from "@/views/Product/SslCerts/index.vue";
import SiteLockTable from "@/views/Product/SiteLockTable.vue";
import CodeSigningTable from "@/views/Product/CodeSigningTable.vue";
import ClientCertsTable from "@/views/Product/ClientCertsTable.vue";

export default {
  name: "ProductSection",
  components: {
    CodeSigningTable,
    ClientCertsTable,
    SiteLockTable,
    SslCerts,
  },
};
</script>
<style scoped>
.nav-tabs .nav-link.active,
.nav-tabs .nav-item.show .nav-link {
  background: #23326b !important;
  color: #fff !important;
}
</style>
