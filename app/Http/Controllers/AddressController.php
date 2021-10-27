<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Mandal;
use App\Models\RevenueMandal;
use App\Models\State;
use App\Models\Vibhag;
use App\Models\Zilla;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function getStates(Request $request)
    {
        $states = State::where('Status', true)->get();
        return \response()->json([
            'status' => true,
            'states' => $states,
        ]);
    }

    public function getVibhags(Request $request)
    {
        $request->validate([
            'state' => ['required'],
        ]);

        $state = State::with('vibhags')->find($request->state);
        if (!$state) {
            return \response()->json([
                'status' => false,
                'msg' => 'State not Found',
            ]);
        }

        return \response()->json([
            'status' => true,
            'vibhags' => $state->vibhags,
        ]);
    }

    public function getZillas(Request $request)
    {
        $request->validate([
            'vibhag' => ['required'],
        ]);

        $vibhag = Vibhag::with('zillas')->find($request->vibhag);
        if (!$vibhag) {
            return \response()->json([
                'status' => false,
                'msg' => 'Vibhag not Found',
            ]);
        }

        return \response()->json([
            'status' => true,
            'zillas' => $vibhag->zillas,
        ]);
    }

    public function getCities(Request $request)
    {
        $request->validate([
            'zilla' => ['required'],
        ]);

        $zilla = Zilla::with('cities')->find($request->zilla);
        if (!$zilla) {
            return \response()->json([
                'status' => false,
                'msg' => 'Zilla not Found',
            ]);
        }

        return \response()->json([
            'status' => true,
            'cities' => $zilla->cities,
        ]);
    }

    public function getRevenueMandal(Request $request)
    {
        $request->validate([
            'city' => ['required'],
        ]);

        $city = City::with('revenueMandals')->find($request->city);
        if (!$city) {
            return \response()->json([
                'status' => false,
                'msg' => 'City not Found',
            ]);
        }

        return \response()->json([
            'status' => true,
            'revenue_mandals' => $city->revenueMandals,
        ]);

    }

    public function getMandals(Request $request)
    {
        $request->validate([
            'revenue_mandal' => ['required'],
        ]);

        $revenueMandal = RevenueMandal::with('mandals')->find($request->revenue_mandal);
        if (!$revenueMandal) {
            return \response()->json([
                'status' => false,
                'msg' => 'Revenue Mandal not Found',
            ]);
        }

        return \response()->json([
            'status' => true,
            'mandals' => $revenueMandal->mandals,
        ]);
    }

    public function getPanchayathis(Request $request)
    {
        $request->validate([
            'mandal' => ['required'],
        ]);

        $mandal = Mandal::with('panchayathis')->find($request->mandal);
        if (!$mandal) {
            return \response()->json([
                'status' => false,
                'msg' => 'Mandal not Found',
            ]);
        }

        return \response()->json([
            'status' => true,
            'panchayathis' => $mandal->panchayathis,
        ]);
    }
}
