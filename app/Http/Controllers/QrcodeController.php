<?php

namespace App\Http\Controllers;

use App\Models\Qrcode as ModelsQrcode;
use BaconQrCode\Encoder\QrCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QrcodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qrcodes = ModelsQrcode::get();
        return view('qrcodes.index', compact('qrcodes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $qrcode = new ModelsQrcode();
        $qrcode->productname = $request->productname;
        $qrcode->amount = $request->amount;
        $qrcode->producturl = $request->producturl;
        // $qrcode->user_id = Auth::user();

        $qrcode->save();

        return back()->with("success","Qrcode geneated successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        ModelsQrcode::destroy($id);

        return back()->with('success',"News deteted scucessfully !");
    }

    public function viewmore($id)
    {
        $qrcode = ModelsQrcode::find($id);
        return view("qrcodes.viewMore", compact("qrcode"));

    }
}
