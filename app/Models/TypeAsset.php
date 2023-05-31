<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypeAsset extends Model
{
    use SoftDeletes;

    protected $table = 'Type';

    protected $fillable =[
        'nama_type'
    ];

    public function assets()
    {
        return $this->hasMany(Asset::class, 'id_type', 'id');
    }
}
