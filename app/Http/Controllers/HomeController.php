<?php

namespace App\Http\Controllers;

use DB;
use App\Product_Keluar;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // ->select(DB::raw('sum(qty) as qty_keluar'))
        // ->groupBy('product_id')
        $p_keluar = DB::table('product_keluar')
        ->join('products', 'products.id', '=', 'product_keluar.product_id')
        ->select('product_keluar.*', 'products.spesifikasi', DB::raw('sum(qty_keluar) as qty_keluar')) 
        ->groupBy('product_id')
        ->orderBy('qty_keluar', 'desc')
        ->take(5)
        ->get();
        $test = Activity::all();
        dd($test);
        return view('home', compact('p_keluar'));
    }
}
