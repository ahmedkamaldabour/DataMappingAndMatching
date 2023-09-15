<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MapData extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'main_data_id' , 'reason'];

    public function MainData()
    {
        return $this->belongsTo(MainData::class);
    }
}
