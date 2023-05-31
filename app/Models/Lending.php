<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lending extends Model
{
    use SoftDeletes;

    protected $table = 'peminjaman';

    protected $fillable = [
        'karyawan_id',
        'item_pinjam',
        'ket',
        'tgl_pinjam',
        'tgl_balik',
        'tujuan_pinjam'
    ];

    protected $casts = [
        'item_pinjam' => 'array'
    ];

    public function karyawan()
    {
        return $this->belongsTo(User::class, 'karyawan_id', 'id');
    }

}
