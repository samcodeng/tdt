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

const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: false,
    onOpen: (toast) => {
        toast.addEventListener("mouseenter", Swal.stopTimer);
        toast.addEventListener("mouseleave", Swal.resumeTimer);
    },
});
window.Toast = Toast;
Vue.component("Support", require("./components/Support.vue").default);

const app = new Vue({
    el: "#app",
}).$mount("#app");
