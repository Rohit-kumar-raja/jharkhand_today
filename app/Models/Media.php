<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Media extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];
    protected $table = "media";

    public function getUrl(){
        if($this->type)
        {
          $directory = strtolower(last(explode('\\', $this->table_type)))."/".$this->type;
        }else
        {
          $directory = strtolower(last(explode('\\', $this->table_type)));
        }
        return Storage::disk('public')->url($directory.'/'.$this->file_name);
    }

     /**
     * Boot method
    **/
    protected static function boot()
    {
        parent::boot();
        self::creating(function ($model) {

        });

        self::updating(function ($model) {
        });

        self::deleted(function ($model) {
          if (!empty($model->path)) {
            $model->deleteFile($model->path);
          }
        });
    }
}



