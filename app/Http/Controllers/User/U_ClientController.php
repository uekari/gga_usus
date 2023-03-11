<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Client; //Elquentエロクアント
use Illuminate\Support\Facades\DB; //QueryBuilderクエリビルダ

class U_ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
    {
        $this->middleware('auth:users');
    }


    public function index()
    {

        $clients = Client::select('client_name', 'desease','age', 'carelevel', 'created_at')->get();

        return view('user.client.index',

        compact('clients'));


    }
}
