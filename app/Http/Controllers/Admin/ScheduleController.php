<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Schedule;
use Illuminate\Support\Facades\DB; //QueryBuilderクエリビルダ
use App\Models\Client;
use App\Models\User;


class ScheduleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');

    }

    public function index(Request $request)
    {
        $schedules = Schedule::with('client:id,client_name,client_name2','user:id,name')
        ->orderBy('date','desc')
        ->where(function ($query) {
            // 検索機能
            if ($search = request('search')) {
                $query->where('title', 'LIKE', "%{$search}%")->orWhere('date','LIKE',"%{$search}%");
                }
            })->paginate(5);

      return view('admin.schedule.index',compact('schedules'));
    }


    public function create(Client $client, User $user)
    {
        $users  = User::select('id','name')->get();
    //    dd($users);
        return view('admin.schedule.create',compact('client','users'));
    }


    public function store(Request $request, Client $client)
    {
        // バリデーション
        $validator = Validator::make($request->all(), [
            'title' => 'required | max:191',
            'date' => 'required',
        ]);
        // バリデーション:エラー
        if ($validator->fails()) {
            return redirect()
                ->route('admin.schedule.create',$client->id)
                ->withInput()
                ->withErrors($validator);
        }


        $schedule = new Schedule;
        $schedule-> client_id = $client -> id;
        $schedule-> user_id = $request-> user_id;
        $schedule-> title = $request-> title;
        $schedule-> date = $request-> date;
        // dd($schedule);
        $schedule->save();

        return redirect()->route('admin.schedule.index',$client->id);
    }


    public function show($id)
    {
        $schedule = Schedule::find($id);
        return view('admin.schedule.show', compact('schedule'));
    }


    public function edit($id, User $user)
    {
        $users  = User::select('id','name')->get();
        $schedule = Schedule::find($id);
        return view('admin.schedule.edit', compact('schedule','users'));
    }


    public function update(Request $request, $id)
    {
        //バリデーション
        $validator = Validator::make($request->all(), [
            'title' => 'required | max:191',
            'date' => 'required',
        ]);
        //バリデーション:エラー
        if ($validator->fails()) {
            return redirect()
                ->route('admin.schedule.edit', $id)
                ->withInput()
                ->withErrors($validator);
        }
        //データ更新処理
        $result = Schedule::find($id)->update($request->all());

            return redirect()->route('admin.schedule.index');
    }


    public function destroy($id)
    {
        //
    }
}
