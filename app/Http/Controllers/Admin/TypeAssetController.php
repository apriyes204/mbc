<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\DB;
use App\Models\TypeAsset;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TypeAssetRequest;

class TypeAssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // dd ($item=TypeAsset::with('assets')->get());
        if(request('search'))
        {
            $item = TypeAsset::where('nama_type','like','%'.request('search').'%')
                ->latest()->paginate(5);
        } else {
            $item = TypeAsset::latest()->paginate(5);
        }

        return view('pages.admin.typeasset.home', [
            'items' => $item,
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
    public function store(TypeAssetRequest $request)
    {
        $data = $request->all();
        TypeAsset::create($data);
        return redirect()->route('type.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TypeAsset  $TypeAsset
     * @return \Illuminate\Http\Response
     */
    public function show(TypeAssetRequest $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TypeAsset  $TypeAsset
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd(Asset::findOrFail($id));
        $type_asset = TypeAsset::findOrFail($id);

        return view('pages.admin.typeasset.edit', [
            'data_type' => $type_asset,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TypeAsset  $TypeAsset
     * @return \Illuminate\Http\Response
     */
    public function update(TypeAssetRequest $request, $id)
    {
        //->with('success', "Data telah diperbarui!")
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TypeAsset  $TypeAsset
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = TypeAsset::findOrFail($id);
        $item->delete();
        return redirect()->route('type.index')->with('success', "Data telah dihapus!");
    }

}
