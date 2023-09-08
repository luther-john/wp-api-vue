<template>
  <div>
    <table class="table sitelock--tbl">
      <thead>
        <tr style="background: #784e2c">
          <th scope="col">
            <img :src="image" alt="..." />
          </th>
          <th scope="col">
            <h1 class="rapid--paragraph">
              The fast issuance and cost-effective SSL/TLS certificates allow
              strong encryption trusted by over 99% of browsers and customers
              worldwide.
            </h1>
          </th>
        </tr>
      </thead>
    </table>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col" class="sitelock--th" align="left">
            SSL Certificates
          </th>
          <th scope="col" class="sitelock--th">Lowest Price</th>
          <th scope="col" class="sitelock--th">Discount</th>
          <th scope="col" class="sitelock--th">Features</th>
          <th scope="col" class="sitelock--th">Validation</th>
          <th scope="col" class="sitelock--th">&nbsp;</th>
        </tr>
      </thead>
      <tbody v-for="item in rapidsslData" :key="item.id">
        <tr>
          <td scope="row" align="left">{{ item.title }}</td>
          <td>{{ item.price }}</td>
          <td>{{ item.discount }}</td>
          <td>{{ item.features }}</td>
          <td>{{ item.validation }}</td>
          <td>
            <a class="btn-bn" href="#">Buy Now</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
// @ is an alias to /src
export default {
  name: "RapidSsL",
  data: () => ({
    fetch_certs: [],
    isLoaded: false,
    rapidsslData: [
      {
        id: 1,
        title: "RapidSSL Certificates",
        price: "$16.45/yr",
        discount: "69.58%",
        features: "See List",
        validation: "DV",
      },
      {
        id: 2,
        title: "RapidSSL Wildcard Certificates",
        price: "$136.58/yr",
        discount: "36.86%",
        features: "See List",
        validation: "DV",
      },
    ],
    image:
      "http://localhost/api-support/wp-content/uploads/2023/09/rapidssl-brand.png",
  }),
};
</script>
<style scoped>
.table {
  --bs-table-bg: none !important;
}

.rapid--paragraph {
  color: #fff;
  font-size: 20px;
  line-height: 28px;
}
.btn-bn {
  color: #fff;
  background: #51a547;
  text-decoration: none;
  padding: 4.5px 14.5px;
  border-radius: 40px;
  font-size: 13px;
  text-transform: uppercase;
  border: 2px solid #51a547;
  font-family: proxima_novasemibold;
  line-height: 15px;
}
</style>
