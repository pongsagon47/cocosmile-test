<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Carbon\Carbon;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
         return view('frontend.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $product = Product::find($id);

        $query_relate_product = Product::where('updated_at', '<=', Carbon::now())
            ->orderBy('updated_at', 'desc');
        $product_ids = [$id];

        $relateProducts = $query_relate_product->whereNotIn('id',$product_ids)->limit(3)->get();

        return view('frontend.products.detail',compact('product','relateProducts'));
    }
}
