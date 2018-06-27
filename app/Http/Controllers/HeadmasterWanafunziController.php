<?php

namespace App\Http\Controllers;

use App\Http\Requests\WanafunziRequest;
use Request;
use App\Wanafunzi;
use App\User;

class HeadmasterWanafunziController extends Controller
{


     
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wanafunzishow=Wanafunzi::latest()->get();
        return view('pages.wanafunzishow')->withWanafunzishow($wanafunzishow);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
           'school'=>User::find(1)
        ];
        return view('pages.wanafunzi',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WanafunziRequest $request)
    {
        $request=Request::all();
        Wanafunzi::create($request);
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $showid=Wanafunzi::findOrFail($id);
        return view('page.showdent')->withShowid($showid);
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
        //
    }
}
