<template>
    <div>
        <form
            @submit.prevent="login"
            @keydown="form.onKeydown($event)"
            v-if="!success"
        >
            <div class="form-group">
                <label for="name">Name</label>
                <input
                    type="text"
                    class="form-control"
                    id="name"
                    v-model="form.fullname"
                    :class="form.errors.get('fullname') ? 'is-invalid' : ''"
                />
                <p
                    class="error"
                    v-if="form.errors.has('fullname')"
                    v-html="form.errors.get('fullname')"
                />
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input
                    type="number"
                    class="form-control"
                    id="phone"
                    v-model="form.phone_number"
                    :class="form.errors.get('phone_number') ? 'is-invalid' : ''"
                />
                <p
                    class="error"
                    v-if="form.errors.has('phone_number')"
                    v-html="form.errors.get('phone_number')"
                />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input
                    type="email"
                    class="form-control"
                    id="email"
                    v-model="form.email"
                    :class="form.errors.get('email') ? 'is-invalid' : ''"
                />
                <p
                    class="error"
                    v-if="form.errors.has('email')"
                    v-html="form.errors.get('email')"
                />
            </div>
            <div class="form-group">
                <label for="description">Message</label>
                <textarea
                    type="description"
                    class="form-control"
                    id="description"
                    v-model="form.description"
                    :class="form.errors.get('description') ? 'is-invalid' : ''"
                />
                <p
                    class="error"
                    v-if="form.errors.has('description')"
                    v-html="form.errors.get('description')"
                />
            </div>

            <button
                type="submit"
                class="p-btn2 p-btn hvr-bounce-to-bottom wow fadeInUp"
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
                fullname: "",
                phone_number: "",
                email: "",
                description: "",
            }),
        };
    },
    methods: {
        submit() {
            this.isSpinning = true;
            this.form
                .post("/api/kih/support")
                //.post("/api/kih/support")
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
</style>
