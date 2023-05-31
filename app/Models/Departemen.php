<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Departemen extends Model
{
    use SoftDeletes;

    protected $table ='departemen';

    protected $fillable = [
        'nama_departemen'
    ];
    
    public function karyawan()
    {
        // return $this->hasMany(User::class, 'departemen_id', 'id');
        return $this->hasMany(User::class, 'departemen_id', 'id');
    }

}