<template>
  <div>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col" style="background-color: #1774bb !important">
            <img :src="image" alt="..." />
          </th>
          <th colspan="6" style="background-color: #1774bb !important">
            <h1 class="cct">
              DigiCert Code Signing Certificates protect users from tampering
              and downloading compromised software. It provides the trusted
              authentication by using a digital signature.
            </h1>
          </th>
        </tr>
        <tr>
          <td colspan="7" class="clients--certs">
            <h2>Code Signing Certificates</h2>
          </td>
        </tr>
        <tr>
          <th scope="col" class="clients--th">&nbsp;</th>
          <th scope="col" class="clients--th">Lowest Price</th>
          <th scope="col" class="clients--th">Discount</th>
          <th scope="col" class="clients--th">Features</th>
          <th scope="col" class="clients--th">Validation</th>
          <th scope="col" class="clients--th">&nbsp;</th>
        </tr>
      </thead>
      <tbody v-for="item in codeSignData" :key="item.id">
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
  name: "CodeSigningTable",
  data: () => ({
    fetch_codesign: [],
    isLoaded: false,
    codeSignData: [
      {
        id: 1,
        title: "DigiCert Code Signing Certificates",
        price: "$427.61/yr",
        discount: "15.00%",
        features: "See List",
        validation: "OV",
      },
      {
        id: 2,
        title: "DigiCert EV Code Signing Certificates",
        price: "$598.97/yr",
        discount: "15.00%",
        features: "See List",
        validation: "EV",
      },
    ],
    image:
      "http://localhost/api-support/wp-content/uploads/2023/09/digicert-brand.png",
  }),
};
</script>
<style scoped>
.cct {
  font-size: 20px;
  color: #fff;
  line-height: 28px;
}
.clients--certs {
  background: #00345f;
}

.clients--certs h2 {
  color: #fff;
  font-size: 22px;
  line-height: 45px;
  text-transform: uppercase;
  position: relative;
  left: -401px;
}

.clients--th {
  font-size: 17px;
  line-height: 35px;
  text-transform: uppercase;
}

td {
  font-size: 17px;
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
