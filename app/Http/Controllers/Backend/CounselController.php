<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Counsel;

class CounselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Counsel::query()->paginate(10);
        return view('backend.counsel.index',compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $counsel = Counsel::find($id);
        $counsel->delete();
        return redirect()->route('counsel.index')->with('deleted','ลบ emil เรียบร้อย');
    }
}
