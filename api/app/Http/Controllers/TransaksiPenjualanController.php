<?php

namespace App\Http\Controllers;

use App\Models\transaksi_penjualan;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class TransaksiPenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksi = transaksi_penjualan::all();
        $data['success'] = true;
        $data['message'] = 'Data transaksi';
        $data['result'] = $transaksi;
        return response()->json($data,Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate =$request->validate([
            'tanggal_transaksi'=>'required',
            'nama_transaksi' =>'required',
            'total_transaksi' =>'required'
        ]);
        $result = transaksi_penjualan::create($validate);
        if($result){
            $data['success'] = true;
            $data['message'] = "Data transaksi berhasil disimpan";
            $data['result'] = $result;
            return response()->json($data,Response::HTTP_CREATED);
    }
}

    /**
     * Display the specified resource.
     */
    public function show(transaksi_penjualan $transaksi_penjualan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(transaksi_penjualan $transaksi_penjualan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, transaksi_penjualan $transaksi_penjualan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(transaksi_penjualan $transaksi_penjualan)
    {
        //
    }
}
