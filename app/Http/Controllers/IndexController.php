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
    public function home()
    {
        $dstheloai = Theloai::orderBy('id', 'ASC')->where('kichhoat', 0)->get();
        $dsdanhmuc = DanhmucTruyen::orderBy('id', 'ASC')->where('kichhoat', 0)->get();
        $dstruyendecu = Truyen::orderBy('id', 'DESC')->where('kichhoat', 0)->simplePaginate(6);
        $dstruyenmoi = Truyen::orderBy('id', 'DESC')->where('kichhoat', 0)->limit(4)->get();
        return view('pages.home')->with(compact('dsdanhmuc', 'dstruyenmoi', 'dstruyendecu', 'dstheloai'));
    }

    public function showInfoDanhMuc($slug_danhmuc)
    {
        $dstheloai = Theloai::orderBy('id', 'ASC')->where('kichhoat', 0)->get();
        $dsdanhmuc = DanhmucTruyen::orderBy('id', 'ASC')->where('kichhoat', 0)->get();
        $info_danhmuc = DanhmucTruyen::where('slug_danhmuc', $slug_danhmuc)->where('kichhoat', 0)->first();
        $dstruyen = Truyen::orderBy('id', 'DESC')->where('danhmuc_id', $info_danhmuc->id)->where('kichhoat', 0)->get();
        return view('pages.danhmuc')->with(compact('dsdanhmuc', 'dstruyen', 'info_danhmuc', 'dstheloai'));
    }

    public function showInfoTheLoai($slug_theloai)
    {
        $dsdanhmuc = DanhmucTruyen::orderBy('id', 'ASC')->where('kichhoat', 0)->get();
        $dstheloai = Theloai::orderBy('id', 'ASC')->where('kichhoat', 0)->get();
        $info_theloai = Theloai::where('slug_theloai', $slug_theloai)->where('kichhoat', 0)->first();
        $dstruyen = Truyen::orderBy('id', 'DESC')->where('theloai_id', $info_theloai->id)->where('kichhoat', 0)->get();
        return view('pages.theloai')->with(compact('dsdanhmuc', 'dstheloai', 'dstruyen', 'info_theloai'));
    }

    public function showInfoTruyen($slug_truyen)
    {
        $dstheloai = Theloai::orderBy('id', 'ASC')->where('kichhoat', 0)->get();
        $dsdanhmuc = DanhmucTruyen::orderBy('id', 'ASC')->where('kichhoat', 0)->get();
        $info_truyen = Truyen::with('danhmuctruyen')->where('slug_truyen', $slug_truyen)->where('kichhoat', 0)->first();
        $dsnewchapter = Chapter::with('danhsachtruyen')->orderBy('id', 'DESC')->where('truyen_id', $info_truyen->id)->where('kichhoat', 0)->limit(5)->get();
        $first_chapter = Chapter::with('danhsachtruyen')->orderBy('id', 'ASC')->where('truyen_id', $info_truyen->id)->where('kichhoat', 0)->first();
        $lasted_chapter = Chapter::with('danhsachtruyen')->orderBy('id', 'DESC')->where('truyen_id', $info_truyen->id)->where('kichhoat', 0)->first();
        $dsallchapter = Chapter::with('danhsachtruyen')->orderBy('id', 'ASC')->where('truyen_id', $info_truyen->id)->where('kichhoat', 0)->simplePaginate(2);
        $cungdanhmuc = Truyen::with('danhmuctruyen')->where('danhmuc_id', $info_truyen->danhmuctruyen->id)->whereNotIn('id', [$info_truyen->id])->get();
        return view('pages.truyen')->with(compact('dsdanhmuc', 'dsnewchapter', 'info_truyen', 'dsallchapter', 'cungdanhmuc', 'first_chapter', 'dstheloai','lasted_chapter'));
    }

    public function showInfoChapter($slug_chapter)
    {
        $dstheloai = Theloai::orderBy('id', 'ASC')->where('kichhoat', 0)->get();
        $dsdanhmuc = DanhmucTruyen::orderBy('id', 'ASC')->where('kichhoat', 0)->get();
        $info_truyen = Chapter::where('slug_chapter', $slug_chapter)->first();
        $truyen_breadcrumb = Truyen::with('danhmuctruyen', 'theloai')->where('id', $info_truyen->truyen_id)->first();
        $info_chapter = Chapter::with('danhsachtruyen')->where('slug_chapter', $slug_chapter)->where('kichhoat', 0)->first();
        $dsallchapter = Chapter::with('danhsachtruyen')->orderBy('id', 'ASC')->where('truyen_id', $info_chapter->truyen_id)->where('kichhoat', 0)->get();
        $prechapter = Chapter::where('truyen_id', $info_chapter->truyen_id)->where('id', '<', $info_chapter->id)->max('slug_chapter');
        $nextchapter = Chapter::where('truyen_id', $info_chapter->truyen_id)->where('id', '>', $info_chapter->id)->min('slug_chapter');
        return view('pages.chapter')->with(compact('dsdanhmuc', 'info_chapter', 'dsallchapter', 'prechapter', 'nextchapter', 'dstheloai', 'info_truyen', 'truyen_breadcrumb'));
    }

    public function showTimKiem(Request $request)
    {
        $data = $request->all();
        if (asset($data['tukhoa'])) {
            $search = $data['tukhoa'];
        }
        $dstheloai = Theloai::orderBy('id', 'ASC')->where('kichhoat', 0)->get();
        $dsdanhmuc = DanhmucTruyen::orderBy('id', 'ASC')->where('kichhoat', 0)->get();
        $dstruyen = Truyen::with('danhmuctruyen', 'theloai')
            ->orderBy('id', 'ASC')
            ->where('tentruyen', 'LIKE', '%' . $search . '%')
            ->orWhere('tacgia', 'LIKE', '%' . $search . '%')
            ->orWhere('tomtat', 'LIKE', '%' . $search . '%')
            ->get();

        return view('pages.timkiem')->with(compact('dsdanhmuc', 'dstheloai', 'dstruyen', 'search'));
    }

    public function timkiemajax(Request $request)
    {

        $data = $request->all();
        $dstruyen = Truyen::where('kichhoat', 0)->where('tentruyen', 'LIKE', '%' . $data['tukhoa'] . '%')->get();
        $count = count($dstruyen);
        if ($count != 0):?>
            <ul class="dropdown-menu" style="display: block">
                <?php foreach ($dstruyen as $key => $truyen) : ?>
                    <li class="li_timkiem_ajax">
                        <a href="<?php echo(asset('/truyen/' . $truyen->slug_truyen)); ?>" title="" type="button"
                           class="list-group-item list-group-item-action text-dark">
                            <img class="mr-2" src="<?php echo(asset('public/uploads/truyen/' . $truyen->hinhanh)); ?>"
                                 height="auto"
                                 width="50" alt="">
                            <span class="text-success"><?php echo $truyen->tentruyen ?></span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else : ?>
            <ul class="dropdown-menu" style="display: block">
                <li><span class="text-danger m-3">Không có kết quả tìm kiếm</span></li>
            </ul>
        <?php endif; ?><?php
    }

    public function tag($tag)
    {
        //SEO
        //$info = Info::find(1);
        $title = 'Tìm kiếm tags';
        $tags = 'Tìm kiếm tags';
        $meta_desc = 'Tìm kiếm tags';
        $meta_keywords = 'Tìm kiếm tags';
        $url_canonical = \URL::current();
        //$og_image = url('public/uploads/logo/'.$info->logo);
        //$link_icon = url('public/uploads/logo/'.$info->logo);
        //END SEO
        $slide_truyen = Truyen::with('danhmuctruyen', 'theloai')->orderBy('id', 'DESC')->where('kichhoat', '0')->take(8)->get();
        $dstheloai = Theloai::orderBy('id', 'DESC')->where('kichhoat', 0)->get();
        $dsdanhmuc = DanhmucTruyen::orderBy('id', 'DESC')->where('kichhoat', 0)->get();
        $tags = explode("-", $tag);

        $dstruyen = Truyen::with('danhmuctruyen', 'theloai')->where(
            function ($query) use ($tags) {
                for ($i = 0; $i < count($tags); $i++) {
                    $query->orwhere('tags', 'LIKE', '%' . $tags[$i] . '%');
                }
            })->get();

        return view('pages.tag')->with(compact('dstruyen', 'dstheloai', 'dsdanhmuc', 'slide_truyen', 'url_canonical', 'meta_keywords', 'tags', 'meta_desc', 'title', 'tag'));
    }
}
