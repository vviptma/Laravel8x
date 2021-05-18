<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use Illuminate\Http\Request;
use App\Models\DanhmucTruyen;
use App\Models\Truyen;

class IndexController extends Controller
{
    public function home(){
        $dsdanhmuc = DanhmucTruyen::orderBy('id','ASC')->where('kichhoat',0)->get();
        $dstruyendecu = Truyen::orderBy('id','DESC')->where('kichhoat',0)->simplePaginate(6);
        $dstruyenmoi = Truyen::orderBy('id','DESC')->where('kichhoat',0)->limit(4)->get()   ;
        return view('pages.home')->with(compact('dsdanhmuc','dstruyenmoi','dstruyendecu'));
    }

    public function showInfoDanhMuc($slug_danhmuc){
        $dsdanhmuc = DanhmucTruyen::orderBy('id','ASC')->where('kichhoat',0)->get();
        $info_danhmuc = DanhmucTruyen::where('slug_danhmuc',$slug_danhmuc)->where('kichhoat',0)->first();
        $dstruyen = Truyen::orderBy('id','DESC')->where('danhmuc_id',$info_danhmuc->id)->where('kichhoat',0)->get();
        return view('pages.danhmuc')->with(compact('dsdanhmuc','dstruyen','info_danhmuc'));
    }

    public function showInfoTruyen($slug_truyen){
        $dsdanhmuc = DanhmucTruyen::orderBy('id','ASC')->where('kichhoat',0)->get();
        $info_truyen = Truyen::with('danhmuctruyen')->where('slug_truyen',$slug_truyen)->where('kichhoat',0)->first();
        $dsnewchapter = Chapter::with('danhsachtruyen')->orderBy('id','DESC')->where('truyen_id',$info_truyen->id)->where('kichhoat',0)->limit(5)->get();
        $dsallchapter = Chapter::with('danhsachtruyen')->orderBy('id','ASC')->where('truyen_id',$info_truyen->id)->where('kichhoat',0)->simplePaginate(2);
        $cungdanhmuc = Truyen::with('danhmuctruyen')->where('danhmuc_id',$info_truyen->danhmuctruyen->id)->whereNotIn('id',[$info_truyen->id])->get();
        return view('pages.truyen')->with(compact('dsdanhmuc','dsnewchapter','info_truyen','dsallchapter','cungdanhmuc'));
    }

    public function showInfoChapter($slug_chapter){
        $dsdanhmuc = DanhmucTruyen::orderBy('id','ASC')->where('kichhoat',0)->get();
        $info_chapter = Chapter::where('slug_chapter',$slug_chapter)->where('kichhoat',0)->first();
        $dstruyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->get();
        return view('pages.chapter')->with(compact('dsdanhmuc','dstruyen','info_chapter'));
    }
}
