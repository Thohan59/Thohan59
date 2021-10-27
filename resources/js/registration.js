let registration = new Vue({
    el: '#registration',
    data: {
        errors: [],
        name: "",
        age: "",
        phone: "",
        profession: "",
        email: "",
        uniform_status: "1",
        uniform_bool_status: true,
        pant_size: "",
        shirt_size: "",
        cap: "0",
        belt: "0",
        states: [],
        state: "",
        vibhags: [],
        vibhag: "",
        zillas: [],
        zilla: "",
        cities: [],
        city: "",
        revenue_mandals: [],
        revenue_mandal: "",
        mandals: [],
        mandal: "",
        panchayathis: [],
        panchayathi: "",
        address: "",
        registered: false,
    },
    mounted: function () {
        this.getStates();
    },
    methods: {
        checkAge: function () {
            if (this.age === "") {
                toastr.error('Enter Age');
            } else if (this.age < 18) {
                toastr.error('You are not eligible for enrollment');
            }
        },
        getStates: function () {
            this.states = [];
            this.state = "";
            this.vibhags = [];
            this.vibhag = "";
            this.zillas = [];
            this.zilla = "";
            this.cities = [];
            this.city = "";
            this.revenue_mandals = [];
            this.revenue_mandal = "";
            this.mandals = [];
            this.mandal = "";
            this.panchayathis = [];
            this.panchayathi = "";
            axios.post(route('Address.get_states'))
                .then(response => {
                    let response_data = response.data;
                    if (response_data.status) {
                        registration.states = response_data.states;
                    } else {
                        toastr.error(response_data.msg);
                    }
                })
                .catch(error => {
                    registration.errors.push(error.response.data.errors);
                });
        },
        getVibhags: function () {
            if (!this.state) {
                toastr.error('Select State');
                this.vibhags = [];
                this.vibhag = "";
                this.zillas = [];
                this.zilla = "";
                this.cities = [];
                this.city = "";
                this.revenue_mandals = [];
                this.revenue_mandal = "";
                this.mandals = [];
                this.mandal = "";
                this.panchayathis = [];
                this.panchayathi = "";
                return;
            }
            axios.post(route('Address.get_vibhags'), {state: this.state})
                .then(response => {
                    let response_data = response.data;
                    if (response_data.status) {
                        registration.vibhags = response_data.vibhags;
                    } else {
                        toastr.error(response_data.msg);
                    }
                })
                .catch(error => {
                    registration.errors.push(error.response.data.errors);
                });
        },
        getZillas: function () {
            if (!this.vibhag) {
                toastr.error('Select Vibhag');
                this.zillas = [];
                this.zilla = "";
                this.cities = [];
                this.city = "";
                this.revenue_mandals = [];
                this.revenue_mandal = "";
                this.mandals = [];
                this.mandal = "";
                this.panchayathis = [];
                this.panchayathi = "";
                return;
            }
            axios.post(route('Address.get_zillas'), {vibhag: this.vibhag})
                .then(response => {
                    let response_data = response.data;
                    if (response_data.status) {
                        registration.zillas = response_data.zillas;
                    } else {
                        toastr.error(response_data.msg);
                    }
                })
                .catch(error => {
                    registration.errors.push(error.response.data.errors);
                });
        },
        getCities: function () {
            if (!this.zilla) {
                toastr.error('Select Zilla');
                this.cities = [];
                this.city = "";
                this.revenue_mandals = [];
                this.revenue_mandal = "";
                this.mandals = [];
                this.mandal = "";
                this.panchayathis = [];
                this.panchayathi = "";
                return;
            }
            axios.post(route('Address.get_cities'), {zilla: this.zilla})
                .then(response => {
                    let response_data = response.data;
                    if (response_data.status) {
                        registration.cities = response_data.cities;
                    } else {
                        toastr.error(response_data.msg);
                    }
                })
                .catch(error => {
                    registration.errors.push(error.response.data.errors);
                });
        },
        getRevenueMandal: function () {
            if (!this.city) {
                toastr.error('Select City');
                this.revenue_mandals = [];
                this.revenue_mandal = "";
                this.mandals = [];
                this.mandal = "";
                this.panchayathis = [];
                this.panchayathi = "";
                return;
            }
            axios.post(route('Address.get_revenue_mandals'), {city: this.city})
                .then(response => {
                    let response_data = response.data;
                    if (response_data.status) {
                        registration.revenue_mandals = response_data.revenue_mandals;
                    } else {
                        toastr.error(response_data.msg);
                    }
                })
                .catch(error => {
                    registration.errors.push(error.response.data.errors);
                });
        },
        getMandals: function () {
            if (!this.revenue_mandal) {
                toastr.error('Select Revenue Mandal');
                this.mandals = [];
                this.mandal = "";
                this.panchayathis = [];
                this.panchayathi = "";
                return;
            }
            axios.post(route('Address.get_mandals'), {revenue_mandal: this.revenue_mandal})
                .then(response => {
                    let response_data = response.data;
                    if (response_data.status) {
                        registration.mandals = response_data.mandals;
                    } else {
                        toastr.error(response_data.msg);
                    }
                })
                .catch(error => {
                    registration.errors.push(error.response.data.errors);
                });
        },
        getPanchayathis: function () {
            if (!this.mandal) {
                toastr.error('Select Mandal');
                this.panchayathis = [];
                this.panchayathi = "";
                return;
            }
            axios.post(route('Address.get_panchayathis'), {mandal: this.mandal})
                .then(response => {
                    let response_data = response.data;
                    if (response_data.status) {
                        registration.panchayathis = response_data.panchayathis;
                    } else {
                        toastr.error(response_data.msg);
                    }
                })
                .catch(error => {
                    registration.errors.push(error.response.data.errors);
                });
        },
        enroll: function () {
            axios.post(route('Enroll.user'), {
                name: this.name,
                age: this.age,
                phone: this.phone,
                email: this.email,
                profession: this.profession,
                uniform_status: this.uniform_bool_status,
                pant_size: this.pant_size,
                shirt_size: this.shirt_size,
                cap: this.cap,
                belt: this.belt,
                state: this.state,
                vibhag: this.vibhag,
                zilla: this.zilla,
                city: this.city,
                revenue_mandal: this.revenue_mandal,
                mandal: this.mandal,
                panchayathi: this.panchayathi,
                address: this.address,
            })
                .then(response => {
                    let response_data = response.data;
                    if (response_data.status) {
                        toastr.success('Registration Successful');
                        registration.registered = true;
                        registration.reset();
                    } else {
                        toastr.error(response_data.msg);
                    }
                })
                .catch(error => {
                    registration.errors.push(error.response.data.errors);
                });
        },
        reset: function () {
            this.state = '';
            this.name = '';
            this.age = '';
            this.phone = '';
            this.email = '';
            this.profession = '';
            this.uniform_bool_status = true;
            this.uniform_status = '1';
            this.pant_size = '';
            this.shirt_size = '';
            this.cap = false;
            this.belt = false;
            this.address = '';
        }
    },
    watch: {
        uniform_status: function () {
            if (this.uniform_status == '0') {
                this.uniform_bool_status = false;
            } else {
                this.uniform_bool_status = true;
            }
        },
        errors: function () {
            let er = this.errors[0];
            let element = this;
            let limit = 0;
            if (er) {
                for ([key, value] of Object.entries(er)) {
                    if (limit === 0) {
                        toastr.error(value);
                        element.$refs[key].focus();
                        limit++;
                    } else {
                        return false;
                    }
                }
            }
        },
    }
});