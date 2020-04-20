<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //mengambil data dari tabel player
        $data = DB::table('tblplayer')->get();
        //lalu untuk kirim ke view
        return view('index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //panggil terlebih dulu view create
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //insert data kedalam tabel player
        DB::table('tblplayer')->insert([
            'nickname' => $request->nickname,
            'game' => $request->game,
            'umur' => $request->umur,
            'jenis_kelamin' => $request->jenis_kelamin,
            'negara' => $request->negara,
        ]);
        return redirect('/data');
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
        //ambil data player berdasarkan id yang dipilih
        $data = DB::table('tblplayer')->where('id',$id)->get();
        //lalu passing data player yang didapat ke view edit.blade.php
        return view ('edit',['data'=>$data]);
        return redirect('/data');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('tblplayer')->where('id',$request->id)->update([
            'nickname'=>$request->nickname,
            'game'=>$request->game,
            'umur'=>$request->umur,
            'jenis_kelamin' => $request->jenis_kelamin,
            'negara'=>$request->negara,
        ]);
        return redirect('/data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //menghapus data yang dipilih
        DB::table('tblplayer')->where('id',$id)->delete();
        return redirect('/data');
    }
}
