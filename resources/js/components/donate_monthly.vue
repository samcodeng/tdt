<template>
    <div>
        <div class="content-wrapper login-container" v-if="!success">
            <div class="right-content-wrapper">
                <div class="form-wrap top-rem">
                    <!-- section 2 -->
                    <div>
                        <h1>Payment <span>Information</span></h1>
                        <h3 style="padding-bottom: 40px">
                            You can set up a monthly donation or make a one-time
                            donation.
                        </h3>
                        <input
                            type="hidden"
                            name="_token"
                            v-model="$attrs.csrf"
                        />
                        <div>
                            <div class="row" v-if="!anonymous">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fullname">Fullname</label>
                                        <input
                                            class="form-control input-1"
                                            v-model="name"
                                            name="fullname"
                                            id="fullname"
                                            type="text"
                                        />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="floating-label">
                                            <label for="email">Email</label>
                                            <input
                                                class="form-control input-1"
                                                v-model="email"
                                                name="email"
                                                id="email"
                                                type="email"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6" v-if="!anonymous">
                                    <div class="form-group">
                                        <div class="floating-label">
                                            <label for="phone"
                                                >Phone Number</label
                                            >
                                            <input
                                                class="form-control input-1"
                                                v-model="phone_number"
                                                name="phone"
                                                id="phone"
                                                type="phone"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="floating-label">
                                            <label for="phone"
                                                >Donation Type</label
                                            >
                                            <select
                                                class="form-control input-1"
                                                v-model="recurringId"
                                                name="phone"
                                                id="phone"
                                                type="phone"
                                            >
                                                <option value="2">
                                                    One-off
                                                </option>
                                                <option value="1">
                                                    Monthly
                                                </option>
                                                <option value="3">
                                                    Quaterly
                                                </option>
                                                <option value="4">
                                                    Annually
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="amount">Donation Amount</label>
                                    <input
                                        class="form-control input-1"
                                        v-model="amount"
                                        name="amount"
                                        id="amount"
                                        type="number"
                                        style="margin: 0"
                                    />
                                    <span
                                        id="amount_error"
                                        class="is-invalid"
                                        style="font-size: 12px"
                                    ></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="amount">Currency</label>
                                    <select
                                        class="form-control input-1"
                                        v-model="currency"
                                        name="amount"
                                        id="amount"
                                        type="number"
                                        style="margin: 0"
                                    >
                                        <option value="NGN">NGN</option>
                                        <option value="USD">USD</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="button-group" style="margin-bottom: 20px">
                            <div class="">
                                <label class="pure-material-checkbox">
                                    <input
                                        type="checkbox"
                                        id="checkbox1"
                                        @change="stayAnonymous()"
                                    />
                                    <span>Stay anonymous</span>
                                </label>
                            </div>
                        </div>

                        <div class="button-group">
                            <button
                                @click="checkDetails()"
                                class="p-btn hvr-bounce-to-bottom"
                                v-if="!allSet()"
                            >
                                Pay Now
                            </button>
                            <flutterwave-pay-button
                                :tx_ref="reference"
                                :amount="amount"
                                :currency="currency"
                                :payment_plan="payment_plan"
                                payment_options="card"
                                redirect_url=""
                                class="p-btn hvr-bounce-to-bottom"
                                :meta="meta"
                                :customer="{
                                    name: name,
                                    email: email,
                                    phone_number: phone_number,
                                }"
                                :customizations="customizations"
                                :callback="makePaymentCallback"
                                v-if="allSet()"
                                :onclose="closePaymentCallback"
                                :public_key="key"
                            >
                                Pay Now
                            </flutterwave-pay-button>
                        </div>
                    </div>
                    <!--- section 2---->
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->
        <div class="success-wrapper center" v-if="success">
            <!-- on upload success-->
            <h1 style="padding-top: 30px">
                Giving <span style="color: #3caaff">Successful!</span>
            </h1>
            <p>Thank you for funding this cause.</p>
            <img src="/kih-files/images/success.png" class="succes-img" />

            <div class="center">
                <p>Need help?</p>
                <a href="/support" style="color: #3caaff; font-weight: 500"
                    >Contact support</a
                >
            </div>
        </div>
    </div>
</template>

<script>
import debounce from "lodash.debounce";
export default {
    data() {
        return {
            key: "",
            disabled: true,
            isSpinning: false,
            donate: true,
            success: false,
            recurring: "Select a plan",
            beneficiaryId: "",
            name: "",
            email: "",
            recurringId: 1,
            number: "",
            phone_number: "",
            amount: "",
            plan_id: "",
            currency: "NGN",
            payment_plan: "",
            anonymous: false,
            customizations: {
                title: "KIH Donation",
            },
            customer: {},
            meta: {},
        };
    },
    computed: {
        reference() {
            let text = "";
            let possible =
                "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
            for (let i = 0; i < 10; i++)
                text += possible.charAt(
                    Math.floor(Math.random() * possible.length)
                );
            return text;
        },
    },
    methods: {
        allSet() {
            if (this.success != true) {
                this.setCurrency();
                this.addRecurring();

                if (
                    this.amount != "" &&
                    this.email != "" &&
                    this.name != "" &&
                    this.phone_number != "" &&
                    this.currency != "" &&
                    ((this.currency == "USD" && this.amount >= 1) ||
                        (this.currency == "NGN" && this.amount >= 100))
                ) {
                    this.meta = {
                        recurringId: this.recurringId,
                        plan: this.recurring,
                    };
                    return true;
                } else {
                    return false;
                }
            }
        },
        checkDetails() {
            this.setCurrency();
            this.addRecurring();
            //start vue progress
            if (this.name == "") {
                $("input[id='fullname']").addClass("is-invalid");
                $("label[for='fullname']").addClass("is-invalid");
                $(".select-i").addClass("is-invalid");
            } else {
                $("input[id='fullname']").removeClass("is-invalid");
                $("label[for='fullname']").removeClass("is-invalid");
                $(".select-i").removeClass("is-invalid");
            }
            if (this.phone_number == "") {
                $("input[id='phone']").addClass("is-invalid");
                $("label[for='phone']").addClass("is-invalid");
                $(".select-i").addClass("is-invalid");
            } else {
                $("label[for='phone']").removeClass("is-invalid");
                $("input[id='phone']").removeClass("is-invalid");
                $(".select-i").removeClass("is-invalid");
            }
            if (
                this.amount == "" &&
                this.currency != "USD" &&
                this.currency != "NGN"
            ) {
                $("input[id='amount']").addClass("is-invalid");
                $("label[for='amount']").addClass("is-invalid");
                $(".select-i").addClass("is-invalid");
            } else if (
                this.amount == "" &&
                (this.currency == "USD" || this.currency == "NGN")
            ) {
                $("input[id='amount']").addClass("is-invalid");
                $("label[for='amount']").addClass("is-invalid");
                $(".select-i").addClass("is-invalid");
            } else if (
                this.currency == "NGN" &&
                this.amount != "" &&
                this.amount < 100
            ) {
                $("input[id='amount']").addClass("is-invalid");
                $("label[for='amount']").addClass("is-invalid");
                $(".select-i").addClass("is-invalid");
                $("span[id='amount_error']").html("minimum ₦100");
            } else if (
                this.currency == "USD" &&
                this.amount != "" &&
                this.amount < 1
            ) {
                $("input[id='amount']").addClass("is-invalid");
                $("label[for='amount']").addClass("is-invalid");
                $(".select-i").addClass("is-invalid");
                $("span[id='amount_error']").html("minimum $1");
            } else {
                $("label[for='amount']").removeClass("is-invalid");
                $("input[id='amount']").removeClass("is-invalid");
                $("#select-i").removeClass("is-invalid");
                $("span[id='amount_error']").html("");
            }

            if (
                this.currency == "" ||
                this.currency == "Select Payment Currency"
            ) {
                $(".currency-select").addClass("is-invalid");
                $(".currency-select-i").addClass("is-invalid");
            } else {
                $(".currency-select").removeClass("is-invalid");
                $(".currency-select-i").removeClass("is-invalid");
            }

            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

            if (this.email == "" || !this.email.match(mailformat)) {
                $("input[id='email']").addClass("is-invalid");
                $("label[for='email']").addClass("is-invalid");
                $(".select-i").addClass("is-invalid");
            } else {
                $("label[for='email']").removeClass("is-invalid");
                $("input[id='email']").removeClass("is-invalid");
                $(".select-i").removeClass("is-invalid");
            }

            //start vue progress
            if (this.recurringId <= 0) {
                return false;
            }
        },
        setCurrency() {
            //MONTHLY
            if ((this.recurringId == 1) & (this.currency == "NGN")) {
                this.payment_plan = 57643;
            }
            if ((this.recurringId == 1) & (this.currency == "USD")) {
                this.payment_plan = 57644;
            }
            //QUATERLY
            if ((this.recurringId == 3) & (this.currency == "NGN")) {
                this.payment_plan = 57645;
            }
            if ((this.recurringId == 3) & (this.currency == "USD")) {
                this.payment_plan = 57646;
            }
            //ANNUALLY
            if ((this.recurringId == 4) & (this.currency == "NGN")) {
                this.payment_plan = 57647;
            }
            if ((this.recurringId == 4) & (this.currency == "USD")) {
                this.payment_plan = 57648;
            }
        },
        addRecurring() {
            if (this.recurringId == 1) {
                this.recurring = "Monthly";
                this.recurringId = 1;
            }
            if (this.recurringId == 2) {
                this.recurringId = 2;
                this.recurring = "One-off";
            }
            if (this.recurringId == 3) {
                this.recurringId = 3;
                this.recurring = "Quaterly";
            }
            if (this.recurringId == 4) {
                this.recurringId = 4;
                this.recurring = "Annually";
            }
            $(".custom-select-option").removeClass("display");
        },
        stayAnonymous() {
            this.anonymous = !this.anonymous;
            if (this.anonymous == true) {
                this.email = "anonymous@gmail.com";
                this.name = "anonymous";
                this.phone_number = "0";
            } else {
                this.name = "";
                this.email = "";
                this.phone_number = "";
            }
        },
        payNow() {
            this.section2 = false;
            this.section3 = true;
        },
        closePaymentCallback() {
            console.log("payment modal is closed");
        },
        makePaymentCallback(response) {
            this.donate = false;
            this.success = true;

            // Close modal in payment callback
            this.closePaymentModal();

            document
                .getElementsByName("checkout")[0]
                .setAttribute(
                    "style",
                    "position:fixed;top:0;left:0;z-index:-1;border:none;opacity:0;pointer-events:none;width:100%;height:100%;"
                );
            document.body.style.overflow = "";
            window.axios
                .get(
                    "/api/kih/verifyMonthlyTransaction/" +
                        response.transaction_id
                )
                .then(function (response) {
                    console.log(response);
                    //// Run Job Schedule
                    setTimeout(function () {
                        window.axios.get("/api/kih/run");
                    }, 1000);
                    setTimeout(function () {
                        window.axios.get("/api/kih/run");
                    }, 10000);
                    //////////////////
                });
        },
    },

    mounted() {
        this.key = process.env.MIX_FLUTTERWAVE_KEY;
        console.log();
        Bus.$on("success", () => {
            this.donate = false;
            this.success = true;
        });
    },
};
</script>

<style scoped>
.right-content-wrapper h1 {
    color: #04245f;
}
.right-content-wrapper h1 span {
    color: #3caaff;
}
.success-wrapper p {
    margin: 0 auto;
}
.success-wrapper .succes-img {
    width: 230px;
}
label {
    display: flex;
    align-items: center;
}
input[type="checkbox"],
input[type="radio"] {
    margin-right: 5px;
}
.row {
    margin-bottom: 10px;
}
.form-wrap {
    padding-bottom: 100px;
}
</style>
