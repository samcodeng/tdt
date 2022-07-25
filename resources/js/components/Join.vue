<template>
    <div>
        <form
            @submit.prevent="submit"
            @keydown="form.onKeydown($event)"
            v-if="!success"
            method="post"
        >
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">First Name</label>
                        <input
                            type="text"
                            class="form-control"
                            id="first_name"
                            v-model="form.first_name"
                            :class="
                                form.errors.get('first_name')
                                    ? 'is-invalid'
                                    : ''
                            "
                        />
                        <p
                            class="error"
                            v-if="form.errors.has('first_name')"
                            v-html="form.errors.get('first_name')"
                        />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Last Name</label>
                        <input
                            type="text"
                            class="form-control"
                            id="last_name"
                            v-model="form.last_name"
                            :class="
                                form.errors.get('last_name') ? 'is-invalid' : ''
                            "
                        />
                        <p
                            class="error"
                            v-if="form.errors.has('last_name')"
                            v-html="form.errors.get('last_name')"
                        />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input
                            type="number"
                            class="form-control"
                            id="phone"
                            v-model="form.phone_number"
                            :class="
                                form.errors.get('phone_number')
                                    ? 'is-invalid'
                                    : ''
                            "
                        />
                        <p
                            class="error"
                            v-if="form.errors.has('phone_number')"
                            v-html="form.errors.get('phone_number')"
                        />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input
                            type="email"
                            class="form-control"
                            id="email"
                            v-model="form.email"
                            :class="
                                form.errors.get('email') ? 'is-invalid' : ''
                            "
                        />
                        <p
                            class="error"
                            v-if="form.errors.has('email')"
                            v-html="form.errors.get('email')"
                        />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input
                            type="number"
                            class="form-control"
                            id="age"
                            v-model="form.age"
                            :class="form.errors.get('age') ? 'is-invalid' : ''"
                        />
                        <p
                            class="error"
                            v-if="form.errors.has('age')"
                            v-html="form.errors.get('age')"
                        />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="class">Class</label>
                        <input
                            class="form-control"
                            id="class"
                            v-model="form.class"
                            :class="
                                form.errors.get('class') ? 'is-invalid' : ''
                            "
                        />
                        <p
                            class="error"
                            v-if="form.errors.has('class')"
                            v-html="form.errors.get('class')"
                        />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="city">City</label>
                        <input
                            class="form-control"
                            id="city"
                            v-model="form.city"
                            :class="form.errors.get('city') ? 'is-invalid' : ''"
                        />
                        <p
                            class="error"
                            v-if="form.errors.has('city')"
                            v-html="form.errors.get('city')"
                        />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="lga">LGA</label>
                        <input
                            class="form-control"
                            id="lga"
                            v-model="form.lga"
                            :class="form.errors.get('lga') ? 'is-invalid' : ''"
                        />
                        <p
                            class="error"
                            v-if="form.errors.has('lga')"
                            v-html="form.errors.get('lga')"
                        />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="parents_occupation"
                            >Parent's occupation</label
                        >
                        <input
                            type="parents_occupation"
                            class="form-control"
                            id="parents_occupation"
                            v-model="form.parents_occupation"
                            :class="
                                form.errors.get('parents_occupation')
                                    ? 'is-invalid'
                                    : ''
                            "
                        />
                        <p
                            class="error"
                            v-if="form.errors.has('parents_occupation')"
                            v-html="form.errors.get('parents_occupation')"
                        />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="parents_number">Parent's Number</label>
                        <input
                            type="parents_number"
                            class="form-control"
                            id="parents_number"
                            v-model="form.parents_number"
                            :class="
                                form.errors.get('parents_number')
                                    ? 'is-invalid'
                                    : ''
                            "
                        />
                        <p
                            class="error"
                            v-if="form.errors.has('parents_number')"
                            v-html="form.errors.get('parents_number')"
                        />
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="brand">Previous experience using computers? </label>
                <div class="flex flex1">
                    <div class="form-check form-check-inline">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="inlineRadioOptions2"
                            id="inlineRadio2"
                            value="sms"
                            @click="form.experience = 'yes'"
                            checked
                        />
                        <label class="form-check-label nb" for="inlineRadio2"
                            >Yes</label
                        >
                    </div>
                    <div class="form-check form-check-inline">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="inlineRadioOptions2"
                            id="inlineRadio2"
                            value="sms"
                            @click="form.experience = 'no'"
                        />
                        <label class="form-check-label nb" for="inlineRadio2"
                            >No</label
                        >
                    </div>
                </div>
            </div>
            <button
                type="submit"
                class="p-btn hvr-bounce-to-bottom"
                :disabled="form.busy"
                @click.prevent="submit()"
            >
                Submit

                <span
                    class="spinner-border spinner-border-sm onPageloader"
                    v-show="isSpinning"
                    role="status"
                    aria-hidden="true"
                ></span>
            </button>
        </form>
    </div>
</template>
<script>
export default {
    data() {
        return {
            isSpinning: false,
            success: false,
            // Create a new form instance
            form: new Form({
                first_name: "",
                last_name: "",
                phone_number: "",
                email: "",
                city: "",
                lga: "",
                parents_phone_number: "",
                parents_occupation: "",
                age: "",
                class: "",
                experience: "yes",
            }),
        };
    },
    methods: {
        submit() {
            this.isSpinning = true;
            this.form
                .post("/api/kih/join")
                //.post("/api/kih/join")
                .then(() => {
                    //// Run Job Schedule
                    window.axios.get("/api/kih/run");
                    setTimeout(function () {
                        window.axios.get("/api/kih/run");
                    }, 1000);
                    setTimeout(function () {
                        window.axios.get("/api/kih/run");
                    }, 10000);
                    //////////////////
                    this.isSpinning = false;
                    this.form.reset();
                    Swal.fire({
                        title: "Message Sent",
                        text: "we will reach out to you shortly.",
                        icon: "success",
                        showCancelButton: false,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Okay",
                    }).then((result) => {
                        // Send request to the server
                        if (result.value) {
                            $("#registerModal").modal("hide");
                        }
                    });
                })
                .catch(() => {
                    Toast.fire({
                        icon: "error",
                        title: "there was an error",
                    });
                    this.isSpinning = false;
                });
        },
    },
    mounted() {},
};
</script>

<style scoped>
.ver-email {
    font-size: 13px;
    margin-top: 35px;
    position: relative;
    margin-bottom: -20px;
}
.ver-email input {
    width: 191px;
    margin: 10px auto;
}
.timer {
    display: block;
    margin-top: 10px;
}
.timer span {
    cursor: pointer;
}
.timer span.inactive {
    cursor: not-allowed;
}
.success {
    color: #68a85c !important;
    font-size: 14px !important;
    line-height: 20px !important;
    margin-top: 15px !important;
}
.row {
    margin-bottom: 0px;
}
.p-btn {
    padding: 16px 22px;
    font-size: 12px;
    margin: 0px;
}
.nb {
    padding-bottom: 0px !important;
}
</style>
