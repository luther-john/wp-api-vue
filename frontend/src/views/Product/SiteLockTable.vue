<template>
  <div style="border: 1px solid #ccc; border-top: 0">
    <table class="table sitelock--tbl">
      <thead>
        <tr>
          <th scope="col">
            <img :src="image" alt="..." />
          </th>
          <th scope="col">
            <p>
              SiteLock is the global leader in the website security industry. It
              provides the tool that offers
              <span style="display: block">
                automatic scanning, fixing and prevent harmful cyber threats on
                your website.
              </span>
            </p>
          </th>
        </tr>
        <tr>
          <td colspan="7" class="sitelock--malware">
            <h2>Malware Scan</h2>
          </td>
        </tr>
      </thead>
    </table>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col" class="sitelock--th">&nbsp;</th>
          <th scope="col" class="sitelock--th">Lowest Price</th>
          <th scope="col" class="sitelock--th">Discount</th>
          <th scope="col" class="sitelock--th">Features</th>
          <th scope="col" class="sitelock--th">Validation</th>
          <th scope="col" class="sitelock--th">&nbsp;</th>
        </tr>
      </thead>
      <tbody v-for="item in sitelockData" :key="item.id">
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
  name: "SiteLockTable",
  data: () => ({
    fetch_sitelocks: [],
    isLoaded: false,
    sitelockData: [
      {
        id: 1,
        title: "SiteLock FIND",
        price: "$20.00/yr",
        discount: "20.00%",
        features: "See List",
        validation: "-",
      },
      {
        id: 2,
        title: "SiteLock FIX",
        price: "$85.00/yr",
        discount: "15.00%",
        features: "See List",
        validation: "-",
      },
      {
        id: 3,
        title: "SiteLock PREVENT",
        price: "$450.00/yr",
        discount: "10.00%",
        features: "See List",
        validation: "-",
      },
      {
        id: 4,
        title: "SiteLock 911",
        price: "$180.00/yr",
        discount: "10.00%",
        features: "See List",
        validation: "-",
      },
    ],
    image:
      "http://localhost/api-support/wp-content/uploads/2023/09/sitelock-white-logo.png",
  }),
};
</script>
<style scoped>
.sitelock--tbl th {
  background: #c31f26;
  color: #fff;
  position: relative;
}

.sitelock--tbl p {
  position: relative;
  left: -154px;
}
.sitelock--malware {
  background: #00345f;
}

.sitelock--malware h2 {
  color: #fff;
  line-height: 45px;
  text-transform: uppercase;
  position: relative;
  left: -427px;
}

th.sitelock--th {
  font-size: 17px;
  line-height: 35px;
  text-transform: uppercase;
}

td:first-child {
  font-weight: 600;
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
