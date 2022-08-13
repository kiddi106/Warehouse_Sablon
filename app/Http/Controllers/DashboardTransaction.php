<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Transaction;
use PDF;

class DashboardTransaction extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaction = Transaction::all();
        return view('dashboard.transaction.index', [
            'transaction' => $transaction
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.transaction.create', [
            'posts' => Post::all(),
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $count = $request->count;
        $post = $request->post_id;
        $postan = Post::where('id' , $post)->first();
        $price = $postan->price * $count;
        $validatedData = $request->validate([
            'post_id' => 'required',
            'count' => 'required',
            'unit' => 'required',
            'customer' => 'required|max:255',
            
        ]);
        $kurangi = $postan->count - $count;
        
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['price'] = $price;
        Transaction::create($validatedData);
        
        $postan->update(['count' => $kurangi]);

        return redirect('/dashboard/transaction')->with('success','New Transaction Has Been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        return view('dashboard.transaction.modal', [
            'tf' => $transaction
        ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tf = Transaction::find($id);
        $post = Post::find($tf->post_id);
        $tambah = $tf->count + $post->count;
        $post->update(['count'=>$tambah]);
        Transaction::destroy($id);

        return redirect('/dashboard/transaction')->with('success','Project Has Been Deleted!');
    }

    public function downloadpdf(Transaction $transaction)
    {
        return view('dashboard.invoices.index', compact('transaction'));
        
        // dd($transaction);
        // $pdf = app('dompdf.wrapper');
        // $pdf->loadView('dashboard.invoices.index', compact('transaction'));
        // $pdf->setPaper('A4', 'potrait');
        // $pdf->setOptions(['defaultFont' => 'sans-serif']);
        // return $pdf->download('invoice.pdf');
    }
}
