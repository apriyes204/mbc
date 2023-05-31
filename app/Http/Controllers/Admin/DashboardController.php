<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Asset;
use App\Models\Departemen;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index (Request $request)
    {
        
        return view ('pages.admin.dashboard',[
            'asset_count' => Asset::count(),
            'karyawan_count' => User::count(),
            'depart_count' => Departemen::count()
        ]);
    }
}
