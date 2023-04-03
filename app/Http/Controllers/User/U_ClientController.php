<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Client; //Elquentエロクアント
use App\Models\User;
use Illuminate\Support\Facades\DB; //QueryBuilderクエリビルダ

class U_ClientController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:users');
    }


    public function index()
    {

        // $clients = Client::select('client_name', 'desease','age', 'carelevel', 'created_at')->get();

        $clients = \Auth::user()->clients;
        // dd($clients);


        return view('user.client.index',
        compact('clients'));


    }

    public function show()
    {

        //
        
    }

}
