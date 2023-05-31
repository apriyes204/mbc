<?php

namespace App\Http\Controllers\Admin;

use id;
use App\Models\Departemen;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DepartemenRequest;

class DepartemenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd($items=Departemen::with('karyawan')->get());
        if(request('search'))
        {
            $items = Departemen::
                where('nama_departemen','like','%'.request('search').'%')
                ->latest()->get();
        } else {
            $items = Departemen::all();
            // $items = Departemen::lates()->get();
        }

        return view ('pages.admin.departemen.home', [
            'items' => $items,
        ]);
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
    public function store(DepartemenRequest $request)
    {
        $data = $request->all();
        Departemen::create($data);
        return redirect()->route('departemen.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Departemen  $departemen
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Departemen  $departemen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_karyawan = User::all();
        $data_depart = Departemen::findOrFail($id);

        return view('pages.admin.departemen.edit', [
            'departemen' => $data_depart,
            'karyawan' => $data_karyawan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Departemen  $departemen
     * @return \Illuminate\Http\Response
     */
    public function update(DepartemenRequest $request, $id)
    {
        $data = $request->all();
        $item = Departemen::findOrFail($id);
        $item -> update($data);
        return redirect()->route('departemen.index')->with('success', "Data telah diperbarui!");
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Departemen  $departemen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=Departemen::findOrFail($id);
        $item->delete();
        return redirect()->route('departemen.index')->with('success', "Data telah dihapus!");
    }
}
