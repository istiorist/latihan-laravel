<?php

namespace App\Http\Controllers;
use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pasien::all();
        return view('data_pasien.index', ['data' => $data]); 
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response; 
     */

    public function create()
    {
    //     $data['store'] = 'Input';
    //     $data['pasien'] = new Pasien();
    //     $data['action'] = url('data_pasien');
    //     return view ('data_pasien.create', $data);
        return view ('data_pasien.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Pasien(); 
        $data->nik =$request->input('nik');
        $data->nama =$request->input('nama');
        $data->alamat =$request->input('alamat');
        $data->hp =$request->input('hp');
        $data->save();
        return redirect('/data_pasien');
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
    public function edit(Pasien $pasien)
    {
        $data['store'] = 'Ubah';
        $data['pasien'] = $pasien;
        $data['action'] = url('data_pasien' . '/' . $pasien->nik);
        return view('data_pasien.create', $data);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pasien $pasien)
    {
        $data->nik =$request->input('nik');
        $data->nama =$request->input('nama');
        $data->alamat =$request->input('alamat');
        $data->hp =$request->input('hp');
        $data->save();
        return redirect('/data_pasien');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
