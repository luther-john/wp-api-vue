<template>
  <div>
    <table class="table geotrust--tbl">
      <thead>
        <tr style="background: #f26f28">
          <th scope="col">
            <img :src="image" alt="..." />
          </th>
          <th scope="col">
            <h1 class="geotrust--paragraph">
              Business-class, flexible, and cost-effective SSL/TLS solutions
              with the authorized Trust Seals that displays trust to visitors of
              your site - all from the second largest digital certificate
              provider, GeoTrust®.
            </h1>
          </th>
        </tr>
      </thead>
    </table>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col" class="geotrust--th" align="left">
            SSL Certificates
          </th>
          <th scope="col" class="geotrust--th">Lowest Price</th>
          <th scope="col" class="geotrust--th">Discount</th>
          <th scope="col" class="geotrust--th">Features</th>
          <th scope="col" class="geotrust--th">Validation</th>
          <th scope="col" class="geotrust--th">&nbsp;</th>
        </tr>
      </thead>
      <tbody v-for="item in thawtesslData" :key="item.id">
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
  name: "GeoTrustSSL",
  data: () => ({
    fetch_certs: [],
    isLoaded: false,
    thawtesslData: [
      {
        id: 1,
        title: "GeoTrust QuickSSL Premium",
        price: "$72.42/yr",
        discount: "51.40%",
        features: "See List",
        validation: "DV",
      },
      {
        id: 2,
        title: "GeoTrust True BusinessID",
        price: "$225.18/yr",
        discount: "15.00%",
        features: "See List",
        validation: "OV",
      },
      {
        id: 3,
        title: "GeoTrust True BusinessID with EV",
        price: "$187.92/yr",
        discount: "48.49%",
        features: "See List",
        validation: "EV",
      },
      {
        id: 4,
        title: "GeoTrust True BusinessID Wilcard",
        price: "$713.72/yr",
        discount: "15.00%",
        features: "See List",
        validation: "OV",
      },
      {
        id: 5,
        title: "GeoTrust True BusinessID Multi-Domain",
        price: "$321.02/yr",
        discount: "15.00%",
        features: "See List",
        validation: "OV",
      },
      {
        id: 6,
        title: "GeoTrust True BusinessID with EV Multi-Domain",
        price: "$310.11/yr",
        discount: "15.00%",
        features: "See List",
        validation: "EV",
      },
    ],
    image:
      "http://localhost/api-support/wp-content/uploads/2023/09/geotrust-brand-1.png",
  }),
};
</script>
<style scoped>
.table {
  --bs-table-bg: none !important;
}

.geotrust--paragraph {
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
