@extends('Dashboard.Admin.base')

@section('title')
    Admin | Users
@endsection

@section('dashboard.name')
    Users
@endsection

@section('dashboard.header')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('dashboard.style')
    <link rel="stylesheet" href="{{ asset('storage/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endsection

@section('dashboard.content')
    <section id="users">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="state">State</label>
                    <select class="form-control" name="state" id="state" @change="getVibhags" v-model="state"
                            ref="state">
                        <option value="">-- Select State --</option>
                        <option v-for="state in states" :value="state.id" v-text="state.Name"></option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="vibhag">Vibhag</label>
                    <select class="form-control" name="vibhag" id="vibhag" @change="getZillas" v-model="vibhag"
                            ref="vibhag">
                        <option value="">-- Select Vibhag --</option>
                        <option v-for="vibhag in vibhags" :value="vibhag.id" v-text="vibhag.Name"></option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="zilla">Zilla</label>
                    <select class="form-control" name="zilla" id="zilla" @change="getCities" v-model="zilla"
                            ref="zilla">
                        <option value="">-- Select Zilla --</option>
                        <option v-for="zilla in zillas" :value="zilla.id" v-text="zilla.Name"></option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="city">City</label>
                    <select class="form-control" name="city" id="city" @change="getRevenueMandal" v-model="city"
                            ref="city">
                        <option value="">-- Select City --</option>
                        <option v-for="city in cities" :value="city.id" v-text="city.Name"></option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="revenue_mandal">Revenue Mandal</label>
                    <select class="form-control" name="revenue_mandal" id="revenue_mandal" @change="getMandals"
                            v-model="revenue_mandal" ref="revenue_mandal">
                        <option value="">-- Select Revenue Mandal --</option>
                        <option v-for="revenue_mandal in revenue_mandals" :value="revenue_mandal.id"
                                v-text="revenue_mandal.Name"></option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="mandal">Mandal</label>
                    <select class="form-control" name="mandal" id="mandal" @change="getPanchayathis" v-model="mandal"
                            ref="mandal">
                        <option value="">-- Select Mandal --</option>
                        <option v-for="mandal in mandals" :value="mandal.id" v-text="mandal.Name"></option>
                    </select>
                </div>
            </div>
            <div class="col" v-if="panchayathis.length > 0">
                <div class="form-group">
                    <label for="panchayat">Panchayat</label>
                    <select class="form-control" name="panchayat" id="panchayat" v-model="panchayathi"
                            ref="panchayathi">
                        <option value="">-- Select Panchayat --</option>
                        <option v-for="panchayathi in panchayathis" :value="panchayathi.id"
                                v-text="panchayathi.Name"></option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <table id="users_view" class="table table-bordered table-hover"></table>
                        <div class="row py-3">
                            <div class="col">
                                <button class="btn btn-danger float-right" @click="exportUsers">Export as Excel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('dashboard.script')
    <script src="{{ asset('storage/adminlte/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('storage/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>

    <script src="{{ mix('js/admin/user/view.js') }}"></script>
@endsection
