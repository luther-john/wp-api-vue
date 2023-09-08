<template>
  <div>
    <table class="table digicert--tbl">
      <thead>
        <tr style="background: #1774bb">
          <th scope="col">
            <img :src="image" alt="..." />
          </th>
          <th scope="col">
            <h1 class="digicert--paragraph">
              DigiCert offers high-assurance, no-hassle validation, and
              zero-compromise SSL/TLS certificates that come with comprehensive
              website security features far beyond encryption.
            </h1>
          </th>
        </tr>
        <tr class="digicert--header">
          <td colspan="6">
            <h2>Basic SSL Certificates</h2>
          </td>
        </tr>
      </thead>
    </table>
    <table class="table table-hover">
      <tr>
        <td scope="col" class="digicert--th" align="left">SSL Certificates</td>
        <td scope="col" class="digicert--th">Lowest Price</td>
        <td scope="col" class="digicert--th">Discount</td>
        <td scope="col" class="digicert--th">Features</td>
        <td scope="col" class="digicert--th">Validation</td>
        <td scope="col" class="digicert--th">&nbsp;</td>
      </tr>
      <tbody v-for="item in digicertData" :key="item.id">
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
      <tr class="digicert--header">
        <td colspan="6">
          <h2>Business SSL certificates</h2>
        </td>
      </tr>
      <tbody v-for="item in businessSSLData" :key="item.id">
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
      <tr class="digicert--header">
        <td colspan="6">
          <h2>Professional SSL certificates</h2>
        </td>
      </tr>
      <tbody v-for="item in professionalSSLData" :key="item.id">
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
      <tr class="digicert--header">
        <td colspan="6">
          <h2>Client Certificates</h2>
        </td>
      </tr>
      <tbody v-for="item in clientData" :key="item.id">
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
      <tr class="digicert--header">
        <td colspan="6">
          <h2>Code Signing certificates</h2>
        </td>
      </tr>
      <tbody v-for="item in codesignData" :key="item.id">
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
      <tr class="digicert--header">
        <td colspan="6">
          <h2>Document Signing certificates</h2>
        </td>
      </tr>
      <tbody v-for="item in documentsignData" :key="item.id">
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
  name: "DigiCert",
  data: () => ({
    fetch_certs: [],
    isLoaded: false,
    digicertData: [
      {
        id: 1,
        title: "DigiCert Standard SSL",
        price: "$225.18/yr",
        discount: "15.00%",
        features: "See List",
        validation: "OV",
      },
      {
        id: 2,
        title: "DigiCert Extended Validation SSL",
        price: "$335.04/yr",
        discount: "15.00%",
        features: "See List",
        validation: "EV",
      },
      {
        id: 3,
        title: "DigiCert Wildcard SSL",
        price: "$187.92/yr",
        discount: "48.49%",
        features: "See List",
        validation: "EV",
      },
    ],
    businessSSLData: [
      {
        id: 1,
        title: "DigiCert Secure Site SSL",
        price: "$342.83/yr",
        discount: "15.00%",
        features: "See List",
        validation: "OV",
      },
      {
        id: 2,
        title: "DigiCert Secure Site Wildcard SSL",
        price: "$1,635.54/yr",
        discount: "15.00%",
        features: "See List",
        validation: "OV",
      },
      {
        id: 3,
        title: "DigiCert Secure Site EV SSL",
        price: "$791.92/yr",
        discount: "48.49%",
        features: "See List",
        validation: "EV",
      },
    ],
    professionalSSLData: [
      {
        id: 1,
        title: "DigiCert Secure Site Pro SSL",
        price: "$854.96/yr",
        discount: "15.00%",
        features: "See List",
        validation: "OV",
      },
      {
        id: 2,
        title: "DigiCert Secure Site Pro EV SSL",
        price: "$1,224/yr",
        discount: "15.00%",
        features: "See List",
        validation: "EV",
      },
    ],
    clientData: [
      {
        id: 1,
        title: "DigiCert Email Signing(S/MIME) Certificate",
        price: "$30.52/yr",
        discount: "18.25%",
        features: "See List",
        validation: "-",
      },
    ],
    codesignData: [
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
    documentsignData: [
      {
        id: 1,
        title: "Document Signing - Individual (500)",
        price: "$300.67/yr",
        discount: "15.00%",
        features: "See List",
        validation: "-",
      },
      {
        id: 2,
        title: "Document Signing - Individual (2000)",
        price: "$410.13/yr",
        discount: "15.00%",
        features: "See List",
        validation: "-",
      },
      {
        id: 3,
        title: "Document Signing - Organization (2000)",
        price: "$410.13/yr",
        discount: "15.00%",
        features: "See List",
        validation: "-",
      },
      {
        id: 4,
        title: "Document Signing - Organization (5000)",
        price: "$633.96/yr",
        discount: "15.00%",
        features: "See List",
        validation: "-",
      },
    ],
    image:
      "http://localhost/api-support/wp-content/uploads/2023/09/digicert-brand.png",
  }),
};
</script>
<style scoped>
.table {
  --bs-table-bg: none !important;
}

.digicert--paragraph {
  color: #fff;
  font-size: 20px;
  line-height: 28px;
}

.digicert--header {
  background: #00345f;
}

.digicert--header h2 {
  font-size: 22px;
  background: #00345f;
  color: #fff;
  line-height: 24px;
  text-transform: uppercase;
}

.digicert--header td:first-child {
  padding-left: 20px;
  text-align: left;
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
