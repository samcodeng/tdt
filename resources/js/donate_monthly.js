window.Vue = require("vue").default;
window.axios = require("axios");
//fire new view
window.Bus = new Vue();

//vue form
window.Form = Form;
import { Form } from "vform";
//import sweet alert
import Swal from "sweetalert2";
window.Swal = Swal;
//sweet alert toast
import Flutterwave from "flutterwave-vue-v3";
Vue.use(Flutterwave, { publicKey: process.env.MIX_FLUTTERWAVE_KEY });
Vue.component("donate", require("./components/donate_monthly.vue").default);
const app = new Vue({
    el: "#app",
}).$mount("#app");
