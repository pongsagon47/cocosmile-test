<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Counsel;
use App\Welcome;
use App\Ourproduct;
use App\Product;

class FrontEndContrller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $welcome = Welcome::all();
        $ourProduct = Ourproduct::all();
         return view('frontend.index.index',compact('welcome','ourProduct','products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function article()
    {
        
        return view('frontend.articles.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $counsel = new Counsel();

        $counsel->email = $request->email;
        $counsel->save();

        return redirect()->back();
    }

    public function search()
    {
        return view('frontend.search.index');
    }

    
}
