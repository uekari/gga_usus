<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Client; //Elquentエロクアント
use App\Models\User;
use App\Models\Doctor;
use App\Models\Caremanager;
use Illuminate\Support\Facades\DB; //QueryBuilderクエリビルダ

class U_ClientController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:users');
    }


    public function index()
    {

        $clients = \Auth::user()->clients;
        // dd($clients);
        $doctors = Doctor::where('id',\Auth::user()->id)->get();
        // dd($doctors);
        $caremanagers = Caremanager::where('id',\Auth::user()->id)->get();
        // dd($caremanagers);

        return view('user.client.index',
        compact('clients','doctors','caremanagers'));


    }

    public function show()
    {

        //

    }

}
