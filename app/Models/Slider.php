<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    public function media()
    {
        return $this->morphOne('App\Models\Media', 'table')->where('deleted_at', null)->orderBy('id', 'DESC');
    }
}
