<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Fakultas::all();
        return response()->json($data);
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
        $data = [
            'kode_fakultas' => $request->input('kode_fakultas'),
            'fakultas' => $request->input('fakultas')
        ];

        Fakultas::create($data);
        return response([
            'status' => 'Success',
            'message' => 'Data Tersimpan'
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'kode_fakultas' => $request->input('kode_fakultas'),
            'fakultas' => $request->input('fakultas')
        ];

        $datas = Fakultas::findOrFail($id);
        $datas->update($data);
        return response([
            'status' => 'Success',
            'message' => 'Data Tersimpan'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Fakultas::findOrFail($id);
        $data->delete();
        return response([
            'status' => 'Success',
            'message' => 'Data Terhapus'
        ], 200);
    }
}
