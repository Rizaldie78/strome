<?php

namespace App\Http\Controllers;

use App\Models\table;
use Illuminate\Http\Request;

class tablecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table=table::all();
        return view('table',['table'=>$table]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $table = table::all();
        return view ('formtable',['table'=>$table]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'ukuran' => 'required',
            'harga' => 'required',
        ]);

        $input= $request->all();
        table::create($input);

        return redirect ('datatable')
                ->with('succes','data game created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $table =table::findOrFail($id);
        return view('table_show',['table' => $table]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $table = table::findOrFail($id);
        return view('edittable',['table'=>$table]);
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
        $table = table::findOrFail($id);
        $table->id= $request->id;
        $table->nama= $request->nama;
        $table->ukuran= $request->ukuran;
        $table->harga= $request->harga;
        $table->save();
        return redirect('datatable');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $table = table::findOrFail($id);
        $table->delete();

        return redirect('datatable')
        ->with('succes',' data game berhasil di hapus');
    }
}
