<template>
  <div>
    <div class="container text-center certs">
      <div class="row align-items-center">
        <div class="col">
          <img :src="image_certs" class="img-thumbnail certs" alt="..." />
        </div>
        <div class="col">
          <img :src="image_money_back" class="img-thumbnail certs" alt="..." />
        </div>
        <div class="col">
          <img
            :src="image_premium_support"
            class="img-thumbnail certs"
            alt="..."
          />
        </div>
        <div class="col">
          <img
            :src="image_multi_year_plan"
            class="img-thumbnail certs"
            alt="..."
          />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
// @ is an alias to /src
export default {
  name: "SSlCertsSection",
  data: () => ({
    fetch_certs: [],
    isLoaded: false,
    image_certs:
      "http://localhost/api-support/wp-content/uploads/2023/09/digicert-partner-logo.png",
    image_money_back:
      "http://localhost/api-support/wp-content/uploads/2023/09/30-days-money-back-guarantee-1.png",
    image_premium_support:
      "http://localhost/api-support/wp-content/uploads/2023/09/free-trial.png",
    image_multi_year_plan:
      "http://localhost/api-support/wp-content/uploads/2023/09/3yrs-multi-yr-plan.png",
  }),
};
</script>
<style scoped>
.certs {
  background: #f3f3f3;
  padding: 15px;
}
</style>
