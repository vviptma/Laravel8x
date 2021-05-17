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
        $dstruyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->get();
        return view('pages.home')->with(compact('dsdanhmuc','dstruyen'));
    }

    public function showInfoDanhMuc($slug_danhmuc){
        $dsdanhmuc = DanhmucTruyen::orderBy('id','ASC')->where('kichhoat',0)->get();
        $info_danhmuc = DanhmucTruyen::where('slug_danhmuc',$slug_danhmuc)->where('kichhoat',0)->first();
        $dstruyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->where('danhmuc_id',$info_danhmuc->id)->get();
        return view('pages.danhmuc')->with(compact('dsdanhmuc','dstruyen','info_danhmuc'));
    }

    public function showInfoTruyen($slug_truyen){
        $dsdanhmuc = DanhmucTruyen::orderBy('id','ASC')->where('kichhoat',0)->get();
        $info_truyen = Truyen::where('slug_truyen',$slug_truyen)->where('kichhoat',0)->first();
        $dstruyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->get();
        return view('pages.truyen')->with(compact('dsdanhmuc','dstruyen','info_truyen'));
    }

    public function showInfoChapter($slug_chapter){
        $dsdanhmuc = DanhmucTruyen::orderBy('id','ASC')->where('kichhoat',0)->get();
        $info_chapter = Chapter::where('slug_chapter',$slug_chapter)->where('kichhoat',0)->first();
        $dstruyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->get();
        return view('pages.chapter')->with(compact('dsdanhmuc','dstruyen','info_chapter'));
    }
}
