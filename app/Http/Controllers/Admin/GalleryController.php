<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class GalleryController extends Controller
{
    public function fotoProfile(Request $request)
    {
        $request->validate([
            'image' => 'required|file|mimes:png,jpeg,jpg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = time().'.'.$file->getClientOriginalExtension();
            $imageDirectory = ('backend/assets/img/');
            $path = $file->storeAs($imageDirectory, $imageName, 'public');
            // $imagePath = str_replace('public/', '', $path);

            $user = $request->user();
            $user->foto = $path;
            $user->save();

            return redirect()->back()->with('success', 'Gambar berhasil diupload!');
        }

        return redirect()->back()->with('error', 'Terjadi kesalahan saat mengupload gambar.');
    
    }
}
