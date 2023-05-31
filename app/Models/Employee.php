<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    
    protected $table = 'karyawan';

    use SoftDeletes;

    protected $fillable = [
        'nik',
        'user_id',
        'nama',
        'posisi',
        'depart_id',
        'status',
        'no_telp',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function departemen()
    {
        return $this->belongsTo(Departemen::class, 'depart_id', 'id');
    }

}
