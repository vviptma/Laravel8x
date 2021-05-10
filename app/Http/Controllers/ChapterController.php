<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Chapter;
use App\Models\Truyen;

class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $truyen = Truyen::orderBy('id','DESC')->get();
        $dschapter = Chapter::with('danhsachtruyen')->orderBy('id', 'DESC')->get();
        return view('admincp.chapter.index')->with(compact('dschapter','truyen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dstruyen = Truyen::orderBy('id', 'DESC')->get();
        return view('admincp.chapter.create')->with(compact('dstruyen'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'tieude' => 'required|unique:chapter|max:255',
                'slug_chapter' => 'required|unique:chapter|max:255',
                'tomtat' => 'required',
                'noidung' => 'required',
                'truyen_id' => 'required',
                'kichhoat' => 'required',
            ],
            [
                'tieude.unique' => 'Tiêu đề đã tồn tại, xin điền tiêu đề khác',
                'tieude.required' => 'Chưa điền tiêu đề',
                'slug_chapter.unique' => 'Hãy điền slug khác',
                'slug_chapter.required' => 'Chưa điền slug',
                'truyen_id.required' => 'required',
                'tomtat.required' => 'Chưa điền tóm tắt',
                'noidung.required' => 'Chưa điền nội dung',
            ]
        );
        //Đưa dữ liệu từ request form vào Models
        $chapter = new Chapter();
        $chapter->truyen_id = $data['truyen_id'];
        $chapter->tieude = $data['tieude'];
        $chapter->slug_chapter = $data['slug_chapter'];
        $chapter->tomtat = $data['tomtat'];
        $chapter->noidung = $data['noidung'];
        $chapter->kichhoat = $data['kichhoat'];

        //Thực hiện lưu
        $chapter->save();
        return redirect()->back()->with('status', 'Thêm chương truyện thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dstruyen = Truyen::orderBy('id','DESC')->get();
        $chapter = Chapter::find($id);
        return view('admincp.chapter.edit')->with(compact('dstruyen','chapter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate(
            [
                'tieude' => 'required|max:255',
                'slug_chapter' => 'required|max:255',
                'tomtat' => 'required',
                'noidung' => 'required',
                'truyen_id' =>'required',
                'kichhoat' => 'required'
            ],
            [
                'tieude.required' => 'Chưa điền tiêu đề',
                'slug_chapter.required' => 'Chưa điền slug',
                'truyen_id.required' => 'required',
                'tomtat.required' => 'Chưa điền tóm tắt',
                'noidung.required' => 'Chưa điền nội dung',
            ]
        );

        //Đưa dữ liệu từ request form vào Models
        $chapter = Chapter::find($id);
        $chapter->truyen_id = $data['truyen_id'];
        $chapter->tieude = $data['tieude'];
        $chapter->slug_chapter = $data['slug_chapter'];
        $chapter->tomtat = $data['tomtat'];
        $chapter->noidung = $data['noidung'];
        $chapter->kichhoat = $data['kichhoat'];

        //Thực hiện lưu
        $chapter->save();
        return redirect()->back()->with('status', 'Cập nhật chương truyện thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Chapter::find($id)->delete();
        return redirect()->back()->with('status', 'Xóa chương truyện thành công!');
    }
}
