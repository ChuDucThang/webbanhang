<?php

namespace App\Http\Controllers;

use View;
use Auth;
use Mail;
use Session;
use App\Models\Category;
use App\Models\Product;
use App\Models\Admin;
use App\Models\Orders;
use App\Models\Order_detail;
use App\Models\User;
use App\Models\News;
use App\Models\Banner;
use App\Helper\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class FrontendController extends Controller
{
    
	public function __construct(Cart $cart){
        $cats = Category::where('status',1)->get();
        $ban = Banner::where('status',1)->inRandomOrder()->get();
        
        View::share([
            'cats' => $cats,
            'ban' => $ban,
            'cart' => $cart
         ]);
        
    }
    

    public function home(Cart $cart){
    	// sản phẩm
    	$product_hot = Product::where('status',1)->inRandomOrder()->limit(8)->get();
    	$product_sale = Product::where(['status' => 1, 'type' => 2])->limit(8)->get();
    	$product_pc = Product::where(['category_id' => 1, 'status' => 1])->limit(8)->get();
    	$product_sd = Product::where(['category_id' => 2, 'status' => 1])->limit(8)->get();

    	// tin tức
    	$new = News::where('status',1)->inRandomOrder()->get();
    	$new_i = News::where('status',1)->limit(3)->get();
    	return view('home.main',compact(
            // 'pro',
    		'product_hot',
    		'product_sale',
    		'product_pc',
    		'product_sd',
    		'new',
    		'new_i',
            'cart'
    	));
    }

    public function product($id,Cart $cart){
        $cat_name = Category::find($id);
        $product_cat = Product::where('category_id',$id)->where('status',1)->paginate(6);
        return view('product.view',compact('product_cat','cat_name','cart'));
        // $cat = Category::where('name',$name)->first();
        // print_r($cat);
        //     if($cat){
        //         $products = Product::where(['status' => 1,'category_id' => $cat->id])->orderBy('id','DESC')->paginate(9);
        //         return view('product.view',[
        //             'products' => $products,
        //             'cats' => $cat
        //         ]);
        //     }
        //     else{
        //         return view('error',[
        //             'message' => 'Không tìm thấy danh mục sản phẩm !'
        //         ]);
        //     }
    }

    public function product_master(Cart $cart){
        $product = Product::where('status',1)->paginate(9);
        $product_care = Product::where('status',1)->inRandomOrder()->limit(3)->get();
        return view('product.view_master',compact('product','product_care','cart'));
    }


    public function product_hp(Cart $cart){
        $product_hot = Product::where('status',1)->inRandomOrder()->paginate(6);
        return view('product.view_hot',compact('product_hot','cart'));
    }

    public function product_hs(Cart $cart){
        $product_sale = Product::where(['status' => 1,'type' => 2])->paginate(6);
        return view('product.view_sale',compact('product_sale','cart'));
    }

    public function product_detail($id, Cart $cart){
        $product_detail = Product::where('id',$id)->first();
        // echo "<pre>";
        // print_r($product_detail->category_id);
        // echo "</pre>";

        $cat_name = Category::where('status',1)->where('id',$product_detail->category_id)->first();
        if ($product_detail) {
            $otherProduct = Product::where('category_id',$product_detail->category_id)->where('id','<>',$product_detail->id)->limit(4)->get();
            return view('product.view-detail',compact('product_detail','otherProduct','cat_name','cart'));
        }else{
            return view('error',[
                     'message' => 'Không tìm thấy sản phẩm nào !'
                 ]);

        }
    }

    public function news(Cart $cart){
        $new =  News::where('status',1)->limit(4)->get();
        $count = News::count();
        $new2 =  News::where('status',1)->inRandomOrder()->limit(3)->get();
    	return view('news.view',compact('new','new2','cart','count'));
    }

    public function news_detail($id, Cart $cart){
        $new2 =  News::where('status',1)->inRandomOrder()->limit(3)->get();
        $news_detail = News::where(['id' => $id,'status' => 1])->first();
        return view('news.view-detail',compact('news_detail','new2','cart'));
    }


    public function intro(Cart $cart){
        return view('intro',compact('cart'));
    }

    public function contact(Cart $cart){
        return view('contact',compact('cart'));
    }


    public function post_contact(Request $request){
          if (Auth::user()) {
               $data = ['name'=>$request->name,'mess'=>$request->mess];
                Mail::send('emails.blanks',$data, function ($message){//
                $user = Auth::user();
                $message->from($user->email,$user->username);
                $message->to('alientk95@gmail.com','Quản trị')->subject('Phản hồi từ web');

           }); 
           echo "<script>
                alert('Cảm ơn bạn đã gửi mail. Chúng tôi sẽ liên lạc với bạn sớm nhất có thể.'); window.location ='".url('/').
                "'</script>";
           }else{
            echo "<script>
                alert('Gửi mail không thành công'); window.location ='".url('/').
                "'</script>";
           }
    }


    public function search(Request $request, Cart $cart){

        $product  = Product::where('status',1)->where('name','like','%'.$request->key.'%')->orWhere('price',$request->key)->get();
        return view('search',compact('product','cart'));
    }



    public function add_cart($id, Cart $cart)
        {
            $product = Product::find($id)->toArray();
            // Lưu thông tin sản phẩm vào giỏ Session
            $cart->add($product);

            //dd(session('cart'));
           echo "<script>
                alert(' Thêm sản phẩm thành công!'); window.location ='".url('/').
                "'</script>";
        }

     public function view_cart(Cart $cart){
             return view('cart',[
                'cart' => $cart
             ]);
        }
   
    public function delete($id, Cart $cart){
            $cart->delete_cart($id);

            return redirect()->route('view-cart')->with('success','Xóa sản phẩm thành công');
        }

    public function update_cart(Cart $cart,Request $request){
            $cart->update_cart($request->id,$request->quantity);
            return redirect()->route('view-cart')->with('success','Cập nhật thành công');

        }

    public function clear_cart(Cart $cart){
            $cart->clear_cart();
            return redirect()->route('view-cart')->with('success','Xóa giỏ hàng thành công');
        }

    public function order(Cart $cart){
        if (Auth::guest()) {
            return redirect()->route('frontend.login');
        }else{
            return view('order',[
                'cart' => $cart
            ]);
        }
    }

    public function post_order(Cart $cart, Request $request){
        $orders = Orders::create([
            'order_note' => $request->order_note,
            'amount' => $cart->total(),
            'status' => 1,
            'username' => $request->username,
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'created_at' => date('Y-m-d H:i:s'),
            'user_id' => Auth::user()->id,
        ]);
        foreach($cart->items as $item){
            Order_detail::create([
                'order_id' => $orders->id,
                'product_id' => $item['id'],
                'quantity' => $item['quantity'],
                'price' => $item['price']
            ]);
         }
        Session(['cart'=>[]]);
        echo "<script>
                alert('Bạn đã đặt hàng thành công!'); window.location ='".url('/').
                "'</script>";

        // return redirect()->route('view-cart')->with('success','Đặt hàng thành công.');
    }


    public function cus_order(Cart $cart){
        $id = Auth::user()->id;
        return view('cus-order',[
            'cus_order' => Orders::where(['user_id' => $id])->get()
        ]);
    }

    public function order_detail($id){
        return view('order-detail',[
            'order_detail' => Orders::find($id)
        ]);
    }


     public function register(Cart $cart){
        return view('customer.register',compact('cart'));
    }

     public function post_register(Request $request){
        
        $this->validate($request,[
            'name' => 'required',
            'full_name' => 'required',
            'email' => 'required',
            'phone'=>'required|numeric',
            'address'=>'required',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password|min:6'
        ],[
            'name.required' => 'Tên không được để trống',
            'full_name.required' => 'Tên đầy không được để trống',
            'email.required' => 'Email không được để trống',
            'phone.required' => 'Số điện thoại không được để trống',
            'address.required' => 'Địa chỉ không được để trống',
            'password.required' => 'Mật khẩu không được để trống',
            'password_confirmation.same' => 'Mật khẩu không trùng khớp.'
        ]);

        User::create([
            'name' => $request->name,
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'password' => bcrypt($request->password),
            'gender' => $request->gender,
            
        ]);

        return redirect()->route('frontend.register')->with('success','Tạo tài khoản thành công ! Mời bạn đăng nhập.');
    }

    public function login(Cart $cart){
        return view('customer.login',compact('cart'));
    }
    public function post_login(Request $request){
            $this->validate($request,[
                'email' =>'required',
                'password' =>'required'
            ],[
                'email.required'=>'Email không đươc để trống !',
                'password.required'=>'Mật khẩu không được để trống !'
            ]);

            if(Auth::attempt($request->only('email','password'))){
                echo "<script>
                alert('Đăng nhập thành công'); window.location ='".url('/').
                "'</script>";
                // return redirect()->route('frontend.home');
            }else{
                return redirect()->route('frontend.login')->with('success','Tài khoản hoặc mật khẩu không đúng');
            }
    }

    public function logout(){
            Auth::logout();
            return redirect()->route('frontend.home');
        }

}
