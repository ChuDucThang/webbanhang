<?php

namespace App\Http\Controllers\Backend;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;

class NewController extends Controller
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
        return view('new.index',[
            'news' => News::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('new.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|unique:news,title',
            'content' => 'required'
        ],[
            'title.required' => 'Không được để trống.',
            'title.unique' => 'Tên tiêu đã tồn tại. Vui lòng nhập lại.',
        ]);


        $image = '';
        if ($request->has('file')) {
            $file = $request->file;
            $file->move(base_path('/uploads/news'),$file->getClientOriginalName());
            $image = $file->getClientOriginalName();
        }

        News::create([
            'title' => $request->title,
            'image' => $image,
            'description' => $request->description,
            'content' => $request->content,
            'status' => $request->status,
            'created_at' => $request->created_at
        ]);

        return redirect()->route('backend.new-index')->with('success','Thêm mới tin tức thành công !');

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
        $news = News::find($id);
        return view('new.edit',[
            'news' => $news
        ]);
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
        $news = News::find($id);
        $this->validate($request,[
            'title' => 'required'
        ],[
            'title.required' => 'Không được để trống .'
        ]);


        $image = $news->image;
        if ($request->has('file')) {
            $file = $request->file;
            $file->move(base_path('/uploads/news'),$file->getClientOriginalName());
            $image = $file->getClientOriginalName();
        }

        $news->update([
            'title' => $request->title,
            'image' => $image,
            'description' => $request->description,
            'content' => $request->content,
            'status' => $request->status,
            'created_at' => $request->created_at
        ]);

        return redirect()->route('backend.new-index')->with('success','Sửa tin tức thành công !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        News::destroy($id);
        return redirect()->back()->with('success','Xóa tin tức thành công !');
    }
}
