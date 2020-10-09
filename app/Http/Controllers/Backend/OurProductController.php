<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ourproduct;
use Illuminate\Support\Facades\Storage;

class OurProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ourProduct = [];
        $oOurProductt = Ourproduct::get();
        if ($oOurProductt->isNotEmpty()) {
            $ourProduct = $oOurProductt;
        }
        return view('backend.our-product.index', compact('ourProduct'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!empty($request->id))
        {
            $this->validate($request,[
                'image' => 'mimes:jpeg,png|max:1024|nullable',
            ]);
            $ourProduct = Ourproduct::find($request->id);

            $ourProduct->title = $request->title;
            $ourProduct->description = $request->description;


            if (isset($request->image)){

                Storage::delete('public/'.$ourProduct->image);
                $ourProduct->image= $request->image->store('uploads','public');
            }

            $ourProduct->update();
            return redirect()->route('our-product.index')->with('success','บันทึกข้อมูลเรียบร้อย');

        }
        else
        {
             $this->validate($request,[
                'image' => 'mimes:jpeg,png|max:1024|nullable',
            ]);

            $ourProduct = new Ourproduct();

            $ourProduct->title = $request->title;
            $ourProduct->description = $request->description;
            if (isset($request->image)){
               $ourProduct->image = $request->image->store('uploads','public');
            }

            

            $ourProduct->save();
            return redirect()->route('our-product.index')->with('success','บันทึกข้อมูลเรียบร้อย');
        }
    }

    public function delete($id)
    {
        $ourProduct = Ourproduct::find($id);
        Storage::delete('public/'.$ourProduct->image);
        $ourProduct->image= null;
        $ourProduct->update();
        return redirect()->route('our-product.index')->with('delete','ลบรูปภาพเรียบร้อย');
    }
}
