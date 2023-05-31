<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AssetRequest;
use App\Models\Asset;
use App\Models\TypeAsset;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data_type = TypeAsset::all();
        // dd($item=Asset::with('data_type_assets')->get());

        if(request('search'))
        {
            $item = Asset::where('brand' ,'like','%'.request('search').'%')
                ->orWhere('serial_number' ,'like','%'.request('search').'%')
                ->orWhere('model' ,'like','%'.request('search').'%')
                ->latest()->paginate(5);
        } else {
            $item = Asset::with('data_type_assets')->latest()->paginate(5);
        }

        return view('pages.admin.asset.home',[
            'asset' => $item,
            'typeasset' =>$data_type
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
    public function store(AssetRequest $request)
    {
        // dd($request->all());
        $data = $request->all();
        Asset::create($data);
        return redirect()->route('asset.index');
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
        // dd(Asset::findOrFail($id));
        $data_type = TypeAsset::all();
        $data_asset = Asset::findOrFail($id);

        return view('pages.admin.asset.edit', [
            'asset' => $data_asset,
            'data_type' => $data_type
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AssetRequest $request, $id)
    {
        // dd($request->all());
        $data = $request->all();
        $item = Asset::findOrFail($id);
        $item -> update($data);
        return redirect()->route('asset.index')->with('success', "Data telah diperbarui!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=Asset::findOrFail($id);
        $item->delete();
        return redirect()->route('asset.index')->with('success', "Data telah dihapus!");
    }
}