<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Uniform;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class MemberController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'age' => ['required'],
            'phone' => ['required', 'digits:10', 'unique:users'],
            'email' => ['nullable', 'email', 'unique:users'],
            'profession' => ['required'],
            'uniform_status' => ['required'],
            'state' => ['required'],
            'vibhag' => ['required'],
            'zilla' => ['required'],
            'city' => ['required'],
            'revenue_mandal' => ['required'],
            'mandal' => ['required'],
            'panchayathi' => ['nullable'],
            'address' => ['nullable'],
        ]);
        /***
         * 1) create user (Done)
         * 2) creat uniform if user dose't have uniform
         * 3) create address
         */
        if (!$request->uniform_status) {
            $request->validate([
                'pant_size' => ['required'],
                'shirt_size' => ['required'],
                'cap' => ['required'],
                'belt' => ['required'],
            ]);
        }

        $user = new User();
        $uniform = new Uniform();
        $address = new Address();

        $user->user_name = $request->phone;
        $user->name = $request->name;
        $user->email = $request->email ?? null;
        $user->phone = $request->phone;
        $user->password = bcrypt(Str::random(60));

        if (!$request->uniform_status) {
            $uniform->pant_size = $request->pant_size ?? null;
            $uniform->shirt_size = $request->shirt_size ?? null;
            $uniform->cap = $request->cap;
            $uniform->belt = $request->belt;
        }

        $address->state_id = $request->state;
        $address->vibhag_id = $request->vibhag;
        $address->zilla_id = $request->zilla;
        $address->city_id = $request->city;
        $address->revenue_mandal_id = $request->revenue_mandal;
        $address->mandal_id = $request->mandal;
        $address->panchayathi_id = $request->panchayathi ?? null;
        $address->address = $request->address ?? null;
        $role = Role::where('name', 'User')->first();
        try {
            DB::transaction(function () use ($request, $user, $uniform, $address, $role) {
                $user->save();
                if (!$request->uniform_status) {
                    $uniform->user_id = $user->id;
                    $uniform->save();
                }
                $user->assignRole($role);
                $address->user_id = $user->id;
                $address->save();
                $user->address_id = $address->id;
                $user->save();
            });
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'msg' => $e->getMessage(),
            ]);
        }

        return \response()->json([
            'status' => true,
        ]);
    }
}
