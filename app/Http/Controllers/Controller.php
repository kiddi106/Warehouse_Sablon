<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\DummyData;
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
                ->where('a.updated_at','LIKE', $hariIni->format('%Y-m-d%'))
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

    public function updateInbound()
    {
        $hariIni = new DateTime();
        $created = DB::table('posts as a')
                ->join('categories as b', 'a.category_id', '=','b.id')
                ->join('users as c', 'a.user_id' ,'=', 'c.id')
                ->where('a.created_at','LIKE', $hariIni->format('%Y-m-d%'))
                ->select('a.*','b.name','c.username')
                ->get();
        $post = Post::first();
        $dummy = DummyData::all();
        $any = false;
        // foreach ($dummy as $key => $value) {
        //     if ($value->category_id !== $value->post->category_id) {
        //         $any = true;
        //         $jenis = 'category';
        //         $awal = $value->category->name;
        //         $perbedaan['category'] = $value->post->category_id;
        //     }
        //     elseif ($value->title !== $value->post->title) {
        //         $any = true;
        //         $jenis = 'title';
        //         $awal = $value->title;
        //         $perbedaan['title'] = $value->post->title;
        //     }
        //     elseif ($value->count < $value->post->count) {
        //         $any = true;
        //         $awal = $value->count;
        //         $jenis = 'count';
        //         $perbedaan['count'] = $value->post->count;
        //     }
        //     elseif ($value->price !== $value->post->price) {
        //         $any = true;
        //         $awal = $value->price;
        //         $jenis = 'price';
        //         $perbedaan['price'] = $value->post->price;
        //     }
            
            
        // }
        
        return view('dashboard.inbound', [
            'dummy' => $dummy,
            'post' => $post,
            'create' => $created,
            // 'updated' => $perbedaan,
            // 'jenis' => $jenis,
            // 'awal' =>$awal
        ]);
    }
}
