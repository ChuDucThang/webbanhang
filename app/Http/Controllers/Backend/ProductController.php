<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Auth;

class ProductController extends Controller
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
        return view('product.index',[
            'product' => Product::orderBy('id','DESC')->paginate(8),
            'cats' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create',[
            'cats' => Category::all()
        ]);
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
            'name' => 'required|unique:product,name',
            'description' => 'required',
            'price' => 'required',
            'category_id' => 'required'
        ],[
            'name.required' => 'Không được để trống .',
            'name.unique' => 'Tên sản phẩm đã tồn tại. Vui lòng nhập lại.',
            'price.required' => 'Không được để trống'
        ]);


        $image = '';
        if ($request->has('file')) {
            $file = $request->file;
            $file->move(base_path('uploads/product'),$file->getClientOriginalName());
            $image = $file->getClientOriginalName();
        }

        Product::create([
            'name' => $request->name,
            'image' => $image,
            'description' => $request->description,
            'price' => $request->price,
            'price_sale' => $request->price_sale,
            'type' => $request->type,
            'status' => $request->status,
            'created_at' => $request->created_at,
            'category_id' => $request->category_id
        ]);

        return redirect()->route('backend.product-index')->with('success','Thêm mới sản phẩm thành công !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('product.show',[
            'cats' => Category::all(),
            'pro' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
            return view('product.edit',[
            'cats' => Category::all(),
            'pro' => $product
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
        $product = Product::find($id);
        $this->validate($request,[
            'name' => 'required'
        ],[]);


        $image = $product->image;
        if($request->has('file')){
            $file = $request->file;
            $file->move(base_path('/uploads/product'),$file->getClientOriginalName());
            $image = $file->getClientOriginalName();
        }


        $product->update([
            'name' => $request->name,
            'image' => $image,
            'description' => $request->description,
            'price' => $request->price,
            'price_sale' => $request->price_sale,
            'type' => $request->type,
            'status' => $request->status,
            'created_at' => $request->created_at,
            'category_id' => $request->category_id
        ]);

        return redirect()->route('backend.product-index')->with('success','Sửa '.$product->name.' thành công');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Product::destroy($id);
        return redirect()->back()->with('success', 'Xóa sản phẩm thành công !');
    }
}
