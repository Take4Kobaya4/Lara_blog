<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    // 保存したいもの
    protected $fillable = ['name', 'extension', 'path'];

    public function imageable(){
        return $this->morphTo();
    }
}
