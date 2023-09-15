<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainData extends Model
{
    use HasFactory;

    protected $fillable = ['description'];

    public function MapData()
    {
        return $this->hasMany(MapData::class);
    }
}
