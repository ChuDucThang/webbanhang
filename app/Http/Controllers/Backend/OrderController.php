<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Orders;
use App\Models\Order_detail;
use DB;

class OrderController extends Controller
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
        return view('orders.index',[
            'order' => Orders::paginate(10)
        ]);
    }

    public function edit($id)
    {
        $order = Orders::where('id',$id)->first();

        return view('orders.detail',compact('order'));

        // $order_detail = DB::table('oder_detail')
        //             ->join('products', 'product.id', '=', 'oder_detail.product_id')
        //             ->groupBy('oder_detail.id')
        //             ->where('order_id',$id)
        //             ->get();

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $order = Orders::find($id);
        $order->status = 2;
        $order->save();
        return redirect()->route('backend.order-index')->with('success','Xác nhận đơn hàng thành công !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Orders::where('id',$id)->first();

        if ($order->status == 2) {
            return redirect()->route('backend.order-index')->with('success','Đơn hàng đã được xác nhận , không thể hủy.');
        }else{
            $order = Orders::find($id);

            $order->delete();
            return redirect()->route('backend.order-index')->with('success','Hủy đơn hàng '. $id .' thành công !');
        }
    }
}
