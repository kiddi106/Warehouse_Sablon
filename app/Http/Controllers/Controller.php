<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use DateTime;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $tf = DB::table('transactions as a')
                ->join('posts as b', 'a.post_id', '=', 'b.id')
                ->join('users as c', 'a.user_id', '=','c.id')
                ->select('a.*','b.title','c.name')
                ->get();
        
        return view('dashboard.index',[
            'post' => Post::all(),
            'tf' => $tf,
            'user' => User::all(),
            'category' =>Category::all(),

        ]
    );
    }
    public function updateReport()
    {
        $hariIni = new DateTime();

        $all = DB::table('posts as a')
                ->join('categories as b', 'a.category_id', '=','b.id')
                ->join('users as c', 'a.user_id' ,'=', 'c.id')
                ->where('a.created_at','LIKE', $hariIni->format('%Y-m-d%'))
                ->select('a.*','b.name','c.username')
                ->get();
                // dd($all);
        
        $tf = DB::table('transactions as a')
                ->join('posts as b', 'a.post_id', '=','b.id')
                ->join('users as c', 'a.user_id' ,'=', 'c.id')
                ->where('a.created_at','LIKE', $hariIni->format('%Y-m-d%'))
                ->select('a.*','b.title','c.username')
                ->get();
                // dd($all);
        
        
        return view('dashboard.report',[
            'all' => $all,
            'tf' => $tf
        ]);
    }
}
