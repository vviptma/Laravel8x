<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Theloai;

class TheloaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dstheloai = Theloai::orderBy('id', 'DESC')->get();
        return view('admincp.theloai.index')->with(compact( 'dstheloai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dstheloai = Theloai::orderBy('id', 'DESC')->get();
        return view('admincp.theloai.create')->with(compact( 'dstheloai'));
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
                'tentheloai' => 'required|unique:theloai|max:255',
                'slug_theloai' => 'required|unique:theloai|max:255',
                'tomtat' => 'required',
                'kichhoat' => 'required'
            ],
            [
                'tentheloai.unique' => 'Tên thể loại đã có, xin điền tên khác',
                'tentheloai.required' => 'Chưa điền tên thể loại',
                'slug_theloai.unique' => 'Hãy điền slug thể loại khác',
                'slug_theloai.required' => 'Chưa điền slug thể loại',
                'tomtat.required' => 'Chưa điền tóm tắt thể loại',
            ]
        );
        //Đưa dữ liệu từ request form vào Models
        $theloai = new Theloai();
        $theloai->tentheloai = $data['tentheloai'];
        $theloai->slug_theloai = $data['slug_theloai'];
        $theloai->tomtat = $data['tomtat'];
        $theloai->kichhoat = $data['kichhoat'];

        //Thực hiện lưu
        $theloai->save();
        return redirect()->back()->with('status', 'Thêm thể loại thành công');
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
        $theloai = Theloai::find($id);
        return view('admincp.theloai.edit')->with(compact('theloai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate(
            [
                'tentheloai' => 'required|max:255',
                'slug_theloai' => 'required|max:255',
                'tomtat' => 'required',
                'kichhoat' => 'required',
            ],
            [
                'tentheloai.required' => 'Chưa điền tên thể loại',
                'slug_theloai.required' => 'Chưa điền slug thể loại',
                'tomtat.required' => 'Chưa điền tóm tắt thể loại',
            ]
        );
        //Gán dữ liệu
        $theloai = Theloai::find($id);
        $theloai->tentheloai = $data['tentheloai'];
        $theloai->slug_theloai = $data['slug_theloai'];
        $theloai->tomtat = $data['tomtat'];
        $theloai->kichhoat = $data['kichhoat'];

        //Thực hiện lưu
        $theloai->save();
        return redirect()->back()->with('status', 'Cập nhật thể loại truyện thành công');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Theloai::find($id)->delete();
        return redirect()->back()->with('status', 'Xóa thể loại truyện thành công!');
    }
}
