<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LogisticOrder;
use Illuminate\Support\Facades\Storage;

class LogisticOderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logisticOrder = [];
        $ologisticOrder = LogisticOrder::get();
        if ($ologisticOrder->isNotEmpty()) {
            $logisticOrder = $ologisticOrder;
        }
        return view('backend.logistic-order.index', compact('logisticOrder'));
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
            $logisticOrder = LogisticOrder::find($request->id);

            $logisticOrder->introduction = $request->introduction;
            $logisticOrder->article = $request->article;
         


            if (isset($request->image)){

                Storage::delete('public/'.$logisticOrder->image);
                $logisticOrder->image= $request->image->store('uploads','public');
            }

            $logisticOrder->update();
            return redirect()->route('logistic-order.index')->with('success','บันทึกข้อมูลเรียบร้อย');

        }
        else
        {
             $this->validate($request,[
                'image' => 'mimes:jpeg,png|max:1024|nullable',
            ]);

            $logisticOrder = new LogisticOrder();

            $logisticOrder->introduction = $request->introduction;
            $logisticOrder->article = $request->article;

            if (isset($request->image)){
                $logisticOrder->image = $request->image->store('uploads','public');
            }
            

            $logisticOrder->save();
            return redirect()->route('logistic-order.index')->with('success','บันทึกข้อมูลเรียบร้อย');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $logisticOrder = LogisticOrder::find($id);
        Storage::delete('public/'.$logisticOrder->image);
        $logisticOrder->image= null;
        $logisticOrder->update();
        return redirect()->route('logistic-order.index')->with('delete','ลบรูปภาพเรียบร้อย');
    }
}
