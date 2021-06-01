<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Theloai;
use Illuminate\Http\Request;
use App\Models\DanhmucTruyen;
use App\Models\Truyen;
use function PHPUnit\Framework\isEmpty;

class IndexController extends Controller
{
    public function home(){
        $dstheloai = Theloai::orderBy('id','ASC')->where('kichhoat',0)->get();
        $dsdanhmuc = DanhmucTruyen::orderBy('id','ASC')->where('kichhoat',0)->get();
        $dstruyendecu = Truyen::orderBy('id','DESC')->where('kichhoat',0)->simplePaginate(6);
        $dstruyenmoi = Truyen::orderBy('id','DESC')->where('kichhoat',0)->limit(4)->get()   ;
        return view('pages.home')->with(compact('dsdanhmuc','dstruyenmoi','dstruyendecu','dstheloai'));
    }

    public function showInfoDanhMuc($slug_danhmuc){
        $dstheloai = Theloai::orderBy('id','ASC')->where('kichhoat',0)->get();
        $dsdanhmuc = DanhmucTruyen::orderBy('id','ASC')->where('kichhoat',0)->get();
        $info_danhmuc = DanhmucTruyen::where('slug_danhmuc',$slug_danhmuc)->where('kichhoat',0)->first();
        $dstruyen = Truyen::orderBy('id','DESC')->where('danhmuc_id',$info_danhmuc->id)->where('kichhoat',0)->get();
        return view('pages.danhmuc')->with(compact('dsdanhmuc','dstruyen','info_danhmuc','dstheloai'));
    }

    public function showInfoTheLoai($slug_theloai){
        $dsdanhmuc = DanhmucTruyen::orderBy('id','ASC')->where('kichhoat',0)->get();
        $dstheloai = Theloai::orderBy('id','ASC')->where('kichhoat',0)->get();
        $info_theloai = Theloai::where('slug_theloai',$slug_theloai)->where('kichhoat',0)->first();
        $dstruyen = Truyen::orderBy('id','DESC')->where('theloai_id',$info_theloai->id)->where('kichhoat',0)->get();
        return view('pages.theloai')->with(compact('dsdanhmuc','dstheloai','dstruyen','info_theloai'));
    }

    public function showInfoTruyen($slug_truyen){
        $dstheloai = Theloai::orderBy('id','ASC')->where('kichhoat',0)->get();
        $dsdanhmuc = DanhmucTruyen::orderBy('id','ASC')->where('kichhoat',0)->get();
        $info_truyen = Truyen::with('danhmuctruyen')->where('slug_truyen',$slug_truyen)->where('kichhoat',0)->first();
        $dsnewchapter = Chapter::with('danhsachtruyen')->orderBy('id','DESC')->where('truyen_id',$info_truyen->id)->where('kichhoat',0)->limit(5)->get();
        $first_chapter = Chapter::with('danhsachtruyen')->orderBy('id','ASC')->where('truyen_id',$info_truyen->id)->where('kichhoat',0)->first();
        $dsallchapter = Chapter::with('danhsachtruyen')->orderBy('id','ASC')->where('truyen_id',$info_truyen->id)->where('kichhoat',0)->simplePaginate(2);
        $cungdanhmuc = Truyen::with('danhmuctruyen')->where('danhmuc_id',$info_truyen->danhmuctruyen->id)->whereNotIn('id',[$info_truyen->id])->get();
        return view('pages.truyen')->with(compact('dsdanhmuc','dsnewchapter','info_truyen','dsallchapter','cungdanhmuc','first_chapter','dstheloai'));
    }

    public function showInfoChapter($slug_chapter){
        $dstheloai = Theloai::orderBy('id','ASC')->where('kichhoat',0)->get();
        $dsdanhmuc = DanhmucTruyen::orderBy('id','ASC')->where('kichhoat',0)->get();
        $info_truyen = Chapter::where('slug_chapter',$slug_chapter)->first();
        $truyen_breadcrumb = Truyen::with('danhmuctruyen','theloai')->where('id',$info_truyen->truyen_id)->first();
        $info_chapter = Chapter::with('danhsachtruyen')->where('slug_chapter',$slug_chapter)->where('kichhoat',0)->first();
        $dsallchapter = Chapter::with('danhsachtruyen')->orderBy('id','ASC')->where('truyen_id',$info_chapter->truyen_id)->where('kichhoat',0)->get();
        $prechapter = Chapter::where('truyen_id',$info_chapter->truyen_id)->where('id','<',$info_chapter->id)->max('slug_chapter');
        $nextchapter = Chapter::where('truyen_id',$info_chapter->truyen_id)->where('id','>',$info_chapter->id)->min('slug_chapter');
        return view('pages.chapter')->with(compact('dsdanhmuc','info_chapter','dsallchapter','prechapter','nextchapter','dstheloai','info_truyen','truyen_breadcrumb'));
    }

    public function showTimKiem(){
        if (asset($_GET['search'])){
            $search = $_GET['search'];
        }
        $dstheloai = Theloai::orderBy('id','ASC')->where('kichhoat',0)->get();
        $dsdanhmuc = DanhmucTruyen::orderBy('id','ASC')->where('kichhoat',0)->get();
        $dstruyen = Truyen::with('danhmuctruyen','theloai')
            ->orderBy('id','ASC')
            ->where('tentruyen','LIKE','%'.$search.'%')
            ->orWhere('tacgia','LIKE','%'.$search.'%')
            ->orWhere('tomtat','LIKE','%'.$search.'%')
            ->get();

        return view('pages.timkiem')->with(compact('dsdanhmuc','dstheloai','dstruyen','search'));
    }
}
