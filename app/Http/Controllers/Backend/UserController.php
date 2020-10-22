<?php

namespace App\Http\Controllers\Backend;


use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class UserController extends Controller
{

     use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
        {
            $this->middleware('auth:admin');
        }
    
    public function index()
    {
        if (Auth::user()->level=='1') {
            return view('user.index',[
            'user' => Admin::paginate(5)
            ]);
        }else{
            return redirect()->route('backend.index')->with('error','Bạn không có quyền truy cập trang này');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.add');
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
            'name' => 'required|unique:users,name',
            'email' =>'required',
            'password' =>'required',
            'password' =>'required'
        ],[
            'name.required' => 'Không được để trống',
            'name.unique' => 'Tên danh mục đã tồn tại.',
            'password.required' => 'Không được để trống',
            'level.required' => 'Không được để trống',
        ]);

        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'level' => $request->level,
        ]);
        return redirect()->route('backend.user-index')->with('success','Thêm mới tài khoản thành công !');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
