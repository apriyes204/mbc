<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Asset extends Model
{
    use SoftDeletes;

    protected $table = 'asset';

    protected $fillable = [
        'label_code',
        'id_type',
        'brand',
        'model',
        'serial_number',
        'buy_of_date',
        'harga',
        'spesifikasi',
    ];

    public function data_type_assets()
    {
        return $this->belongsTo(TypeAsset::class, 'id_type', 'id');
    }
}
