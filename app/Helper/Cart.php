<?php 
	namespace App\Helper;

	/**
	 * summary
	 */
	class Cart 
	{
	    /**
	     * thuộc tính $items lưu trữ các thông tin sản phẩm
	     */
	    public $items;

	    public function __construct()
	    {
	        $this->items = session('cart'); //_trước khi qua hàm add sẽ qua hàm này, và items có dữ liệu rồi
	    }

	    public function add($data,$quantity=1){
	    	 //dd($data);
	    	if(isset($this->items[$data['id']])){
	    		$this->items[$data['id']]['quantity'] += 1;
	    	}
	    	else{
	    		$this->items[$data['id']] = $data;
	    		$this->items[$data['id']]['quantity'] = $quantity;
	    	}
	    	// dd($this->items);
	    	//Session trong laravel
	    	session([
	    		'cart'=>$this->items //add thêm thôi
	    	]);
	    }

	    public function delete_cart($id){
	    	//dd($this->items[$id]);
	    	if($this->items[$id]){
	    		unset($this->items[$id]);
	    		session(['cart'=>$this->items]);
	    		return true;
	    	}else{
	    		return false;
	    	}
	    }

	    public function update_cart($id,$quantity){
	    	$quantity = is_numeric($quantity) ? $quantity : 1;
	    	$quantity = $quantity > 0 ? ceil($quantity) : 1;
	    	if(isset($this->items[$id])){
	    		$this->items[$id]['quantity'] = $quantity;
	    		session(['cart' => $this->items]);
	    		
	    		// dd($this->items[$id]);
	    	}
	    }

	    public function clear_cart(){
	    	session(['cart'=>[]]);
	    }

	    //Hàm tính tổng tiền tất cả sản phẩm trong giỏ hàng

	    public function total(){
	    	$sum = 0;

	    	if ($this->items){
	    		foreach($this->items as $item){
	    			if ($item['price_sale'] > 0) {
	    				$sum = $sum+($item['quantity']*$item['price_sale']);	
	    			}else{
	    				$sum = $sum+($item['quantity']*$item['price']);	
	    			}
	    		}
	    	}
	    		return $sum;
	    }


	    public function count_cart(){
	    	$sum  = 0;
	    	if ($this->items) {
	    		foreach ($this->items as $item) {
	    			$sum = $sum + $item['quantity'];
	    		}
	    	}
	    	return $sum;

	    }
	   
	    
	}		
	
?>