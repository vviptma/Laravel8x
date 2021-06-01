<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truyen extends Model
{
    use HasFactory;

    protected $fillable = [
        'tentruyen',
        'tacgia',
        'slug_truyen',
        'tomtat',
        'danhmuc_id',
        'theloai_id',
        'hinhanh',
    ];
    protected $primaryKey = 'id';
    protected $table = 'truyen';


    public function danhmuctruyen(){
        return $this->belongsTo('App\Models\DanhmucTruyen','danhmuc_id', 'id');

    }

    public function chapter(){
        return $this->hasMany('App\Models\Chapter');
    }

    public function theloai(){
        return $this->belongsTo('App\Models\Theloai','theloai_id', 'id');

    }
}
