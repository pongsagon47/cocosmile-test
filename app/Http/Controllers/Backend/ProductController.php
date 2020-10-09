<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\ProductEditRequest;
use Illuminate\Support\Facades\Storage;
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
         $data = Product::query()->paginate(10);
        return view('backend.products.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->ingredient = $request->ingredient;
        $product->subingredient = $request->subingredient;
        $product->description = $request->description;
        $product->image1 = $request->image1->store('uploads','public');

        if (isset($request->image2))
        {
            $product->image2 = $request->image2->store('uploads','public');
        }

        if (isset($request->image3))
        {
            $product->image3 = $request->image3->store('uploads','public');
        }

        $product->save();
        return redirect()->route('product.index')->with('success','บันทึกข้อมูลเรียบร้อย');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Product::find($id);
        return view('backend.products.edit',compact('data'));
    }

    public function deleteOne($id)
    {
        
        $Product = Product::find($id);
        Storage::delete('public/'.$Product->image2);
        $Product->image2 = null;
        $Product->update();
        return redirect()->back()->with('deleted','ลบรูปภาพเรียบร้อย');
    }

    public function deleteTwo($id)
    {
        $Product = Product::find($id);
        Storage::delete('public/'.$Product->image3);
        $Product->image3 = null;
        $Product->update();
        return redirect()->back()->with('deleted','ลบรูปภาพเรียบร้อย');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductEditRequest $request, $id)
    {
        $product = Product::find($id);

        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->ingredient = $request->ingredient;
        $product->subingredient = $request->subingredient;
        $product->description = $request->description;

        if (isset($request->image1))
        {
            Storage::delete('public/'.$product->image1);
            $product->image1 = $request->image1->store('uploads','public');
        }

        if (isset($request->image2))
        {
            Storage::delete('public/'.$product->image2);
            $product->image2 = $request->image2->store('uploads','public');
        }
        if (isset($request->image3))
        {
            Storage::delete('public/'.$product->image3);
            $product->image3 = $request->image3->store('uploads','public');
        }

        $product->update();
        return redirect()->back()->with('success','บันทึกข้อมูลเรียบร้อย');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back()->with('deleted','ลบสินค้าเรียบร้อย');
    }
}
