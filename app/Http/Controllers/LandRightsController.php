<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandRights;

class LandRightsController extends Controller
{
    public function index()
    {
        // Logic to fetch all land rights records
        $landRights = LandRights::all();

        return view('landrights.index', compact('landRights'));
    }
    public function create()
    {
        return view('landrights');

    }
    public function store()
    {
        $landRights = new Landrights();

        $landRights-> transferorname  = request('transferorname');
        $landRights-> mstatus = request('mstatus');
        $landRights-> transferoromang = request('transferoromang');
        $landRights-> transferortelephone = request('transferortelephone');
        $landRights-> transferoraddress = request('transferoraddress');
        $landRights-> transferorvillage = request('transferorvillage');
        $landRights-> transferordistrict = request('transferordistrict');
        $landRights-> transferordate = request('transferordate');
        $landRights-> plotlocation = request('plotlocation');
        $landRights-> presentuse = request('presentuse');
        $landRights-> leaseduration= request('leaseduration');
        $landRights-> transfereename = request('transfereename');
        $landRights-> transfereeomang = request('transfereeomang');
        $landRights-> transfereedob = request('transfereedob');
        $landRights-> transfereetelephone = request('transfereetelephone');
        $landRights-> transfereeaddress = request('transfereeaddress');
        $landRights-> transfereevillage = request('transfereevillage');
        $landRights-> transfereedistrict = request('transfereedistrict');
        $landRights-> transfereedate = request('transfereedate');

        $landRights->save();
        
        return redirect('/');

    }
    

}
