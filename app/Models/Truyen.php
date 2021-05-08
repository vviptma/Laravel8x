<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truyen extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'tentruyen',
        'slug_truyen',
        'tomtat',
        'danhmuc_id',
        'hinhanh',

    ];
    protected $primaryKey = 'id';
    protected $table = 'truyen';


    public function danhmuctruyen(){
        return $this->belongsTo('App\Models\DanhmucTruyen','danhmuc_id');
    }
}
