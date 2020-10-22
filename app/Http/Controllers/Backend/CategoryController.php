<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Auth;

class CategoryController extends Controller
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
            $category = Category::orderBy('id','DESC')->paginate(5);
            return view('category.index',[
                'cats' => $category
            ]);
    }

    //inRandomOrder() ngẫu nhiên 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
        if (Auth::user()->level=='1') {
            return view('category.add');
        }else{
            return redirect()->route('backend.category-index')->with('error','Bạn không có quyền thực hiện chức năng này');
        }
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|unique:category,name'
        ],[
            'name.required' => 'Không được để trống',
            'name.unique' => 'Tên danh mục đã tồn tại.',
        ]);

        Category::create($request->all());
        return redirect()->route('backend.category-index')->with('success','Thêm mới danh mục thành công !');
    }

    public function edit($id)
    {
        if (Auth::user()->level=='1') {
            $models = Category::find($id);
            return view('category.edit',[
                'model' => $models
            ]);
        }else{
            return redirect()->route('backend.category-index')->with('error','Bạn không có quyền thực hiện chức năng này');
        }
    }

    public function update(Request $request, $id)
    {
        //
        //
        // dd($request->all());
        $models = Category::find($id);
        $this->validate($request,[
            'name' => 'required'
        ],[]);

        $models->update([
            'name' =>$request->name,
            'parent' =>$request->parent,
            'status' =>$request->status
        ]);
        return redirect()->route('backend.category-index')->with('success','Cập nhật '.$models->name .' thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id 
     * @return \Illuminate\Http\Responses
     */
    public function delete($id)
    {
        if (Auth::user()->level=='1') {
            Category::destroy($id);
            return redirect()->route('backend.category-index')->with('success','Xóa thành công !');
        }else{
            return redirect()->route('backend.category-index')->with('error','Bạn không có quyền thực hiện chức năng này');
        }
    }
}
