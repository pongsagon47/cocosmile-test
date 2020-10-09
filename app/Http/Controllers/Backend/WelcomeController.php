<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Welcome;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $welcome = [];
        $oWelcome = Welcome::get();
        if ($oWelcome->isNotEmpty()) {
            $welcome = $oWelcome;
        }
        return view('backend.welcome.index',compact('welcome'));
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
            $welcome = Welcome::find($request->id);

            $welcome->title = $request->title;
            $welcome->subtitle = $request->subtitle;

            $welcome->update();

            return redirect()->route('welcome.index')->with('success','บันทึกข้อมูลเรียบร้อย');
        }
        else
        {
            $welcome = new Welcome();

            $welcome->title = $request->title;
            $welcome->subtitle = $request->subtitle;

            $welcome->save();

            return redirect()->route('welcome.index')->with('success','บันทึกข้อมูลเรียบร้อย');
        }
    }
}
