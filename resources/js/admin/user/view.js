let users = new Vue({
    el: '#users',
    data: {
        errors: [],
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
    },
    mounted: function () {
        this.getStates();
        this.getUsers();
    },
    methods: {
        getUsers: function () {
            this.errors = [];
            axios.post(route('Admin.Users.all'), {
                state: this.state,
                vibhag: this.vibhag,
                zilla: this.zilla,
                city: this.city,
                revenue_mandal: this.revenue_mandal,
                mandal: this.mandal,
                panchayathi: this.panchayathi
            }).then(response => {
                let response_data = response.data;
                if (response_data.status) {
                    if ($.fn.DataTable.isDataTable('#users_view')) {
                        $('#users_view').DataTable().destroy();
                    }
                    const users = response.data.users;
                    var dataSet = [];
                    let sl = 0;
                    users.forEach(user => {
                        sl++;
                        var url = '#';
                        let shirt = false;
                        let pant = false;
                        let cap = false;
                        let belt = false;
                        if (user.uniform) {
                            shirt = user.uniform.shirt_size ?? false;
                            pant = user.uniform.pant_size ?? false;
                            cap = user.uniform.cap;
                            belt = user.uniform.belt;
                        }
                        dataSet.push(
                            [sl, `<a href="${url}">${user.user_name}</a>`, `<a href="${url}">${user.name}</a>`, !shirt ? '<span class="btn  btn-danger">NA</span>' : `<span class="btn  btn-success">${shirt}</span>`, !pant ? '<span class="btn  btn-danger">NA</span>' : `<span class="btn  btn-success">${pant}</span>`, cap ? '<span class="btn  btn-success">1</span>' : '<span class="btn  btn-danger">NA</span>', belt ? '<span class="btn btn-success ">1</span>' : '<span class="btn btn-danger">NA</span>', `<div class="btn-group"><a href="${url}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a><button class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button></div>`]);
                    });
                    $('#users_view').DataTable({
                        data: dataSet,
                        // "autoWidth": false,
                        columns: [
                            {title: "Sl.NO"},
                            {title: 'User Name'},
                            {title: 'Name'},
                            {title: 'Shirt'},
                            {title: 'Pant'},
                            {title: 'Cap'},
                            {title: 'Belt'},
                            {title: "Actions"},
                        ]
                    });
                } else {
                    toastr.error(response_data.msg);
                }
            })
                .catch(error => {
                    users.errors.push(error.response.data.errors);
                });
        },
        exportUsers: function () {
            this.errors = [];
            axios.post(route('Admin.Users.export'), {
                state: this.state,
                vibhag: this.vibhag,
                zilla: this.zilla,
                city: this.city,
                revenue_mandal: this.revenue_mandal,
                mandal: this.mandal,
                panchayathi: this.panchayathi
            }).then(response => {
                let response_data = response.data;
                if (response_data.status) {
                    window.open(response_data.url, '_blank');
                } else {
                    toastr.error(response_data.msg);
                }
            })
                .catch(error => {
                    users.errors.push(error.response.data.errors);
                });
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
                        users.states = response_data.states;
                        users.state = response_data.states[0].id;
                        users.getVibhags();
                    } else {
                        toastr.error(response_data.msg);
                    }
                })
                .catch(error => {
                    users.errors.push(error.response.data.errors);
                });
        },
        getVibhags: function () {
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
            this.vibhags = [];
            this.vibhag = "";
            if (!this.state) {
                toastr.error('Select State');
                return;
            }
            axios.post(route('Address.get_vibhags'), {state: this.state})
                .then(response => {
                    let response_data = response.data;
                    if (response_data.status) {
                        users.vibhags = response_data.vibhags;
                        users.vibhag = response_data.vibhags[0].id;
                        users.getZillas();
                    } else {
                        toastr.error(response_data.msg);
                    }
                })
                .catch(error => {
                    users.errors.push(error.response.data.errors);
                });
        },
        getZillas: function () {
            this.cities = [];
            this.city = "";
            this.revenue_mandals = [];
            this.revenue_mandal = "";
            this.mandals = [];
            this.mandal = "";
            this.panchayathis = [];
            this.panchayathi = "";
            this.zillas = [];
            this.zilla = "";
            if (!this.vibhag) {
                toastr.error('Select Vibhag');
                return;
            }
            axios.post(route('Address.get_zillas'), {vibhag: this.vibhag})
                .then(response => {
                    let response_data = response.data;
                    if (response_data.status) {
                        users.zillas = response_data.zillas;
                    } else {
                        toastr.error(response_data.msg);
                    }
                })
                .catch(error => {
                    users.errors.push(error.response.data.errors);
                });
        },
        getCities: function () {
            this.revenue_mandals = [];
            this.revenue_mandal = "";
            this.mandals = [];
            this.mandal = "";
            this.panchayathis = [];
            this.panchayathi = "";
            this.cities = [];
            this.city = "";
            if (!this.zilla) {
                toastr.error('Select Zilla');
                return;
            }
            axios.post(route('Address.get_cities'), {zilla: this.zilla})
                .then(response => {
                    let response_data = response.data;
                    if (response_data.status) {
                        users.cities = response_data.cities;
                    } else {
                        toastr.error(response_data.msg);
                    }
                })
                .catch(error => {
                    users.errors.push(error.response.data.errors);
                });
        },
        getRevenueMandal: function () {
            this.mandals = [];
            this.mandal = "";
            this.panchayathis = [];
            this.panchayathi = "";
            this.revenue_mandals = [];
            this.revenue_mandal = "";
            if (!this.city) {
                toastr.error('Select City');
                return;
            }
            axios.post(route('Address.get_revenue_mandals'), {city: this.city})
                .then(response => {
                    let response_data = response.data;
                    if (response_data.status) {
                        users.revenue_mandals = response_data.revenue_mandals;
                    } else {
                        toastr.error(response_data.msg);
                    }
                })
                .catch(error => {
                    users.errors.push(error.response.data.errors);
                });
        },
        getMandals: function () {
            this.panchayathis = [];
            this.panchayathi = "";
            this.mandals = [];
            this.mandal = "";
            if (!this.revenue_mandal) {
                toastr.error('Select Revenue Mandal');
                return;
            }
            axios.post(route('Address.get_mandals'), {revenue_mandal: this.revenue_mandal})
                .then(response => {
                    let response_data = response.data;
                    if (response_data.status) {
                        users.mandals = response_data.mandals;
                    } else {
                        toastr.error(response_data.msg);
                    }
                })
                .catch(error => {
                    users.errors.push(error.response.data.errors);
                });
        },
        getPanchayathis: function () {
            this.panchayathis = [];
            this.panchayathi = "";
            if (!this.mandal) {
                toastr.error('Select Mandal');
                return;
            }
            axios.post(route('Address.get_panchayathis'), {mandal: this.mandal})
                .then(response => {
                    let response_data = response.data;
                    if (response_data.status) {
                        users.panchayathis = response_data.panchayathis;
                    } else {
                        toastr.error(response_data.msg);
                    }
                })
                .catch(error => {
                    users.errors.push(error.response.data.errors);
                });
        },
    },
    watch: {
        zilla: function () {
            if (this.zilla) {
                this.getUsers();
            }
        },
        city: function () {
            if (this.city) {
                this.getUsers();
            }
        },
        revenue_mandal: function () {
            if (this.revenue_mandal) {
                this.getUsers();
            }
        },
        mandal: function () {
            if (this.mandal) {
                this.getUsers();
            }
        },
        panchayathi: function () {
            if (this.panchayathi) {
                this.getUsers();
            }
        },
        errors: function () {
            let er = this.errors[0];
            let element = this;
            let limit = 0;
            $.each(er, function (key, value) {
                if (limit === 0) {
                    toastr.error(value[0]);
                    element.$refs[key].focus();
                    limit++;
                } else {
                    return false;
                }
            });
        },
    }
});