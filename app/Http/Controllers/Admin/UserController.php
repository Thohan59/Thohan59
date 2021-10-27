<?php

namespace App\Http\Controllers\Admin;

use App\Exports\UsersExport;
use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Mandal;
use App\Models\Panchayathi;
use App\Models\RevenueMandal;
use App\Models\State;
use App\Models\User;
use App\Models\Vibhag;
use App\Models\Zilla;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('Dashboard.Admin.User.view');
    }

    public function getUsers(Request $request)
    {
        $request->validate([
            'state' => ['nullable'],
            'vibhag' => ['nullable'],
            'zilla' => ['nullable'],
            'city' => ['nullable'],
            'revenue_mandal' => ['nullable'],
            'mandal' => ['nullable'],
            'panchayathi' => ['nullable'],
        ]);
        $filter = false;
        $name = '';
        if ($request->panchayathi) {
            $filter = true;
            $object = Panchayathi::with('users')->find($request->panchayathi);
            $name = 'Panchayathi';
        } else if ($request->mandal) {
            $filter = true;
            $object = Mandal::with('users')->find($request->mandal);
            $name = 'Mandal';
        } else if ($request->revenue_mandal) {
            $filter = true;
            $object = RevenueMandal::with('users')->find($request->revenue_mandal);
            $name = 'Revenue Mandal';
        } else if ($request->city) {
            $filter = true;
            $object = City::with('users')->find($request->city);
            $name = 'City';

        } else if ($request->zilla) {
            $filter = true;
            $object = Zilla::with('users')->find($request->zilla);
            $name = 'Zilla';
        } else if ($request->vibhag) {
            $filter = true;
            $object = Vibhag::with('users')->find($request->vibhag);
            $name = 'Vibhag';
        } else if ($request->state) {
            $filter = true;
            $object = State::with('users')->find($request->state);
            $name = 'State';
        }

        if ($filter) {
            if (!$object) {
                return \response()->json([
                    'status' => false,
                    'msg' => "${name} Not Found",
                ]);
            }
            $users = $object->users;
        } else {
            $users = User::has('address')->with('uniform', 'address')->get();
        }

        return \response()->json([
            'status' => true,
            'users' => $users ?? array(),
        ]);
    }

    public function export(Request $request)
    {
        $request->validate([
            'state' => ['nullable'],
            'vibhag' => ['nullable'],
            'zilla' => ['nullable'],
            'city' => ['nullable'],
            'revenue_mandal' => ['nullable'],
            'mandal' => ['nullable'],
            'panchayathi' => ['nullable'],
        ]);
        $filter = false;
        $name = '';
        if ($request->panchayathi) {
            $filter = true;
            $object = Panchayathi::with('users')->find($request->panchayathi);
            $name = 'Panchayathi';
        } else if ($request->mandal) {
            $filter = true;
            $object = Mandal::with('users')->find($request->mandal);
            $name = 'Mandal';
        } else if ($request->revenue_mandal) {
            $filter = true;
            $object = RevenueMandal::with('users')->find($request->revenue_mandal);
            $name = 'Revenue Mandal';
        } else if ($request->city) {
            $filter = true;
            $object = City::with('users')->find($request->city);
            $name = 'City';
        } else if ($request->zilla) {
            $filter = true;
            $object = Zilla::with('users')->find($request->zilla);
            $name = 'Zilla';
        } else if ($request->vibhag) {
            $filter = true;
            $object = Vibhag::with('users')->find($request->vibhag);
            $name = 'Vibhag';
        } else if ($request->state) {
            $filter = true;
            $object = State::with('users')->find($request->state);
            $name = 'State';
        }

        if ($filter) {
            if (!$object) {
                return \response()->json([
                    'status' => false,
                    'msg' => "${name} Not Found",
                ]);
            }
            $users = $object->users;
        } else {
            $users = User::has('address')->with('uniform', 'address')->get();
        }

        $date = Carbon::now()->format('YmdHmi');
        $filename = "Users.xlsx";
        if (\Storage::exists($filename)) {
            \Storage::delete($filename);
        }
        $store = Excel::store(new UsersExport($users), "excel/${filename}");
        $url = \route('Admin.Users.export.download', $filename);
        return \response()->json([
            'status' => true,
            'url' => $url,
        ]);
    }

    public function download($name)
    {
        $path = "excel/${name}";
        $local = Storage::disk('local')->exists($path);
        if ($local) {
            return response()->file(Storage::disk('local')->path($path), ['source' => 'local']);
        }
        return abort(404);
    }
}
