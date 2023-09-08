<template>
  <div>
    <table class="table thawte--tbl">
      <thead>
        <tr style="background: #db0025">
          <th scope="col">
            <img :src="image" alt="..." />
          </th>
          <th scope="col">
            <h1 class="thawte--paragraph">
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
          <th scope="col" class="thawte--th" align="left">SSL Certificates</th>
          <th scope="col" class="thawte--th">Lowest Price</th>
          <th scope="col" class="thawte--th">Discount</th>
          <th scope="col" class="thawte--th">Features</th>
          <th scope="col" class="thawte--th">Validation</th>
          <th scope="col" class="thawte--th">&nbsp;</th>
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
  name: "ThawteSSL",
  data: () => ({
    fetch_thawte: [],
    isLoaded: false,
    thawtesslData: [
      {
        id: 1,
        title: "Thawte SSL123",
        price: "$73.32/yr",
        discount: "46.32%",
        features: "See List",
        validation: "DV",
      },
      {
        id: 2,
        title: "Thawte SSL Web Server",
        price: "$225.18/yr",
        discount: "15.00%",
        features: "See List",
        validation: "OV",
      },
      {
        id: 3,
        title: "Thawte SSL Web Server with EV",
        price: "$187.92/yr",
        discount: "48.49%",
        features: "See List",
        validation: "EV",
      },
      {
        id: 4,
        title: "Thawte SSL Web Server Wildcard",
        price: "$713.72/yr",
        discount: "15.00%",
        features: "See List",
        validation: "OV",
      },
      {
        id: 5,
        title: "Thawte SSL 123 Wildcard",
        price: "$274.08/yr",
        discount: "58.87%",
        features: "See List",
        validation: "DV",
      },
    ],
    image:
      "http://localhost/api-support/wp-content/uploads/2023/09/thawte-brand.png",
  }),
};
</script>
<style scoped>
.table {
  --bs-table-bg: none !important;
}

.thawte--paragraph {
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
