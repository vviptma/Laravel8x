<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\DanhmucTruyen;
use App\Models\Truyen;

class TruyenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $danhmuc = DanhmucTruyen::orderBy('id','DESC')->get();
        $dstruyen = Truyen::with('danhmuctruyen')->orderBy('id', 'DESC')->get();;
        return view('admincp.truyen.index')->with(compact('dstruyen','danhmuc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $danhmuc = DanhmucTruyen::orderBy('id','DESC')->get();
        return view('admincp.truyen.create')->with(compact('danhmuc'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'tentruyen' => 'required|unique:truyen|max:255',
                'slug_truyen' => 'required|unique:truyen|max:255',
                'hinhanh' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
                'tomtat' => 'required',
                'danhmuc' =>'required',
                'kichhoat' => 'required'
            ],
            [
                'tentruyen.unique' => 'Tên truyện đã có, xin điền tên khác',
                'tentruyen.required' => 'Chưa điền tên truyện',
                'slug_truyen.unique' => 'Hãy điền slug truyện khác',
                'slug_truyen.required' => 'Chưa điền slug truyện',
                'tomtat.required' => 'Chưa điền tóm tắt truyện',
                'hinhanh.required' => 'Chưa chọn hình ảnh truyện',
            ]
        );
        //Đưa dữ liệu từ request form vào Models
        $truyen = new Truyen();
        $truyen->tentruyen = $data['tentruyen'];
        $truyen->slug_truyen = $data['slug_truyen'];
        $truyen->tomtat = $data['tomtat'];
        $truyen->danhmuc_id = $data['danhmuc'];
        $truyen->kichhoat = $data['kichhoat'];

        //Xử lý thêm hình ảnh vào folder
        $path = 'public/uploads/truyen/';
        //Lấy request hình ảnh
        $get_image = $request->hinhanh;

        //Lấy tên hình ảnh bao gồm đuôi mở rộng
        $get_name_image = $get_image->getClientOriginalName();
        //Lay ten hinh anh tách đuôi .mở rộng
        $name_image = current(explode('.',$get_name_image));
        //Tạo một tên mới
        $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();

        //Lưu hình ảnh vào folder $path
        $get_image->move($path,$new_image);
        $data['product_image'] = $new_image;
        //Truyền vào biến hình ảnh của Models
        $truyen->hinhanh = $new_image;

        //Thực hiện lưu
        $truyen->save();
        return redirect()->back()->with('status', 'Thêm truyện thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $danhmuc = DanhmucTruyen::orderBy('id','DESC')->get();
        $truyen = Truyen::find($id);
        return view('admincp.truyen.edit')->with(compact('truyen','danhmuc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate(
            [
                'tentruyen' => 'required|max:255',
                'slug_truyen' => 'required|max:255',
                'tomtat' => 'required',
                'danhmuc' =>'required',
                'kichhoat' => 'required'
            ],
            [
                'tentruyen.required' => 'Chưa điền tên truyện',
                'slug_truyen.required' => 'Chưa điền slug truyện',
                'tomtat.required' => 'Chưa điền tóm tắt truyện',
            ]
        );
        //Đưa dữ liệu từ request form vào Models
        $truyen = Truyen::find($id);
        $truyen->tentruyen = $data['tentruyen'];
        $truyen->slug_truyen = $data['slug_truyen'];
        $truyen->tomtat = $data['tomtat'];
        $truyen->danhmuc_id = $data['danhmuc'];
        $truyen->kichhoat = $data['kichhoat'];

        //Lấy request hình ảnh
        $get_image = $request->hinhanh;

        //Nếu có request cập nhật hinh
        if($get_image){

            //Xử lý thêm hình ảnh vào folder
            $path = 'public/uploads/truyen/'.$truyen->hinhanh;
            if(file_exists($path)){
                unlink($path);
            }
            $path = 'public/uploads/truyen/';
            //Lấy tên hình ảnh bao gồm đuôi mở rộng
            $get_name_image = $get_image->getClientOriginalName();
            //Lay ten hinh anh tách đuôi .mở rộng
            $name_image = current(explode('.',$get_name_image));
            //Tạo một tên mới
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();

            //Lưu hình ảnh vào folder $path
            $get_image->move($path,$new_image);
            $data['product_image'] = $new_image;
            //Truyền vào biến hình ảnh của Models
            $truyen->hinhanh = $new_image;
        }
        //Thực hiện lưu
        $truyen->save();
        return redirect()->back()->with('status', 'Thêm truyện thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $truyen = Truyen::find($id);
        $path = 'public/uploads/truyen/'.$truyen->hinhanh;
        if(file_exists($path)){
            unlink($path);
        }
        Truyen::find($id)->delete();
        return redirect()->back()->with('status', 'Xóa truyện thành công!');
    }
}
