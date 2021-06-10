<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truyen extends Model
{
    use HasFactory;

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'tentruyen',
        'tags',
        'tacgia',
        'slug_truyen',
        'tomtat',
        'danhmuc_id',
        'theloai_id',
        'hinhanh',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $table = 'truyen';


    public function danhmuctruyen()
    {
        return $this->belongsTo('App\Models\DanhmucTruyen', 'danhmuc_id', 'id');

    }

    public function chapter()
    {
        return $this->hasMany('App\Models\Chapter');
    }

    public function theloai()
    {
        return $this->belongsTo('App\Models\Theloai', 'theloai_id', 'id');

    }

    public function thuocnhieudanhmuctruyen()
    {
        return $this->belongsToMany(DanhmucTruyen::class, 'thuocdanh', 'truyen_id', 'danhmuc_id');
    }

    public function thuocnhieutheloaitruyen()
    {
        return $this->belongsToMany(Theloai::class, 'thuocloai', 'truyen_id', 'theloai_id');
    }
}
