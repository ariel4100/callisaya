<?php

namespace App\Http\Controllers;

use App\Provider;
use App\Refer;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ReferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $remitos = Refer::all();
        return view('app.remito.index',compact('remitos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $providers = Provider::all();
        return view('app.remito.create',compact('providers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $remito = new Refer();
        $datetime = Carbon::now()->toDateTimeString();
        $remito->fecha_emision = $datetime;
        $remito->monto_total = $request->monto_total;
        $remito->proveedor_id = $request->proveedor_id;
        $remito->save();
        return redirect()->route('remito.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $remito = Refer::find($id);
        return view('app.remito.show',compact('remito'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $remito = Refer::find($id);
        $proveedor = Provider::all();
        return view('app.remito.edit',compact('remito','proveedor'));
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
        $remito = Refer::find($id);
        $datetime = Carbon::now()->toDateTimeString();
        $remito->fecha_emision = $datetime;
        $remito->monto_total = $request->monto_total;
        $remito->proveedor_id = $request->proveedor_id;
        $remito->save();
        return redirect()->route('remito.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $remito = Refer::find($id);
        $remito->delete();
        return redirect()->route('remito.index');
    }
}
