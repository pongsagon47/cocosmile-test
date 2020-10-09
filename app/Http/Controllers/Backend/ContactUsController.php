<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ContactUs;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ContactUs::query()->paginate(10);
        return view('backend.contact-us.index',compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contactUs = ContactUs::find($id);
        $contactUs->delete();
        return redirect()->route('contact-us.index')->with('deleted','ลบรายการติดต่อเราเรียบร้อย');
    }
}
