<?php

namespace App\Http\Controllers\Backend;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
use Auth;

class BannerController extends Controller
{
    public function __construct()
        {
            $this->middleware('auth:admin');
        }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            return view('banner.index',[
                'banner' => Banner::orderBy('id','DESC')->paginate(5)
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->level=='1') {
            return view('banner.add');
        }else{
            return redirect()->route('backend.banner-index')->with('error','Bạn không có quyền thực hiện chức năng này. ');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->offsetUnset('_token','file');

     
        // Up file
        $image = '';
        if ($request->has('file')) {
            $file = $request->file;
            $file->move(base_path('/uploads/banner'),$file->getClientOriginalName());
            $image = $file->getClientOriginalName();
        }

        $request->merge(['image'=>$image]);

        $this->validate($request,[
              'name' =>'required|unique:banner,name',
              'image' =>'required'
        ],[
              'name.required' => 'Không được để trống',
              'name.unique' => 'Tên đã tồn tại trong CSDL. Vui lòng nhập tên khác !',
        ]);


        if(Banner::create([
            'name' => $request->name,
            'image' => $image,
            'status' => $request->status,
        ])){
            return redirect()->route('backend.banner-index')->with('success','Thêm mới banner thành công');
        }else{
            return redirect()->back()->with('success','Lỗi! Vui lòng thử lại.');
        }
        
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::user()->level=='1') {
            $model = Banner::find($id);

            return view('banner.edit',[
                'model' => $model
            ]);
        }else{
            return redirect()->route('backend.banner-index')->with('error','Bạn không có quyền thực hiện chức năng này');
        }
        
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
        $model = Banner::find($id);

        $request->offsetUnset('_token','file');

        $this->validate($request,[
            'name' =>  'required',
        ],[]);

        $image = $model->image;
        if ($request->has('file')) {
            $file = $request->file;
            $file->move(base_path('/uploads/banner'),$file->getClientOriginalName());
            $image = $file->getClientOriginalName();
        }

        $model->update([
            'name' => $request->name,
            'image' => $image,
            'status' => $request->status
        ]);

        return redirect()->route('backend.banner-index')->with('success','Cập nhật' .$model->name. 'thành công !' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        if (Auth::user()->level=='1') {
            Banner::destroy($id);
            return redirect()->route('backend.banner-index')->with('success','Xóa thành công !');
        }else{
            return redirect()->route('backend.banner-index')->with('error','Bạn không có quyền thực hiện chức năng này');
        }
    }
}
