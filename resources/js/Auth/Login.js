let login = new Vue({
    el: '#login',
    data: {
        errors: [],
        user_name: "",
        password: "",
    },
    mounted: function () {

    },
    methods: {
        login: function () {
            this.errors = [];
            axios.post(route('Auth.Login'), {user_name: this.user_name, password: this.password})
                .then(response => {
                    let response_data = response.data;
                    if (response_data.status) {
                        window.location.href = response_data.url;
                    } else {
                        toastr.error(response_data.msg);
                    }
                })
                .catch(error => {
                    login.errors.push(error.response.data.errors);
                })
        }
    },
    watch: {
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