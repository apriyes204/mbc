<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\karyawanRequest;
use App\Models\Departemen;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $depart_data = Departemen::all();
        // dd($items=User::with('depart_data')->get());
       if(request('search'))
       {
            $items=User::where('name', 'like', '%'.request('search').'%')
                ->orWhere('nik' ,'like','%'.request('search').'%')
                ->latest()->paginate(5);
       } else {
            $items=User::with('depart_data')->latest()->paginate(5);
       }

        return view ('pages.admin.karyawan.home', [
            'items' => $items,
            'depart_data' => $depart_data,
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
    public function store(karyawanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(User $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_departemen=Departemen::all();
        $data_karyawan=User::with('depart_data')->findOrFail($id);
        return view('pages.admin.karyawan.edit',[
            'data_karyawan' => $data_karyawan,
            'data_departemen' => $data_departemen,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(karyawanRequest $request, $id)
    {
        // dd($request->all());
        $data = $request->all();
        $item = User::findOrFail($id);
        $item -> update($data);
        // dd(User::findOrFail($id) -> update($data));
        return redirect()->route('karyawan.index')->with('success', "Data telah diperbarui!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$item=Asset::findOrFail($id);
        // $item->delete();
        // return redirect()->route('asset.index');

        $item = User::findOrFail($id);
        $item -> delete();
        return redirect()->route('karyawan.index')->with('success', "Data telah terhapus!");
    }
}
