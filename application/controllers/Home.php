<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	 
	 public function __construct()
	 {
		 parent::__construct();
		 //Do your magic here

		 $this->load->library('cart');
	 }
	 

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('template/header_view');
		$this->load->view('home_view');
		$this->load->view('template/footer_view');
	}

	public function loginRegister()
	{
		$this->load->view('template/header_view');
		$this->load->view('login_view');
		$this->load->view('template/footer_view');
	}

	public function lostPassword()
	{
		$this->load->view('template/header_view');
		$this->load->view('lost_password_view');
		$this->load->view('template/footer_view');
	}

	public function myAccount()
	{
		$this->load->view('template/header_view');
		$this->load->view('my_account_view');
		$this->load->view('template/footer_view');
	}

	public function wishlist()
	{
		$this->load->view('template/header_view');
		$this->load->view('wishlist_view');
		$this->load->view('template/footer_view');
	}

	public function shoppingCart()
	{
		$this->load->view('template/header_view');
		$this->load->view('shopping_cart_view');
		$this->load->view('template/footer_view');
	}

	public function checkout()
	{ 
		$data['contents'] = $this->cart->contents();

		$this->load->view('template/header_view');
		$this->load->view('checkout_view',$data);
		$this->load->view('template/footer_view');
	}

	public function shop()
	{ 
		$ch = curl_init('http://localhost/iot-api/api/v1/get-products');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);
		curl_close($ch);
		$response = json_decode($response);

		$data['products'] = $response->data;

		$this->load->view('template/header_view');
		$this->load->view('shop_view',$data);
		$this->load->view('template/footer_view');
	}

	public function addTocart($product_id)
	{
		$url_response = $this->commonCurl('http://localhost/iot-api/api/v1/get-single-products/'.$product_id);

		$product = $url_response->data[0];
		
		// $this->cart
		// $this->cart->contents() as $items

		$cartArray = array(
			'id'      => $product->id,
			'qty'     => 1,
			'price'   => $product->sales_price,
			'name'    => $product->name,
			'image' => $product->image,
			'options' => array('Size' => '', 'Color' => '')
	    );
	
	    $this->cart->insert($cartArray);



		print_r($cartArray);
	}

	public function retrieveCart()
	{
	   
     $html = '';
	 $total = 0;
	 $quantity = count($this->cart->contents());
	 foreach ($this->cart->contents() as $items) {
		
		$html .= '<ul><li class="single-cart-item">
			<div class="cart-img">
				<a href="'.base_url('single-product').'"><img src="http://localhost/iot-backend/storage/items/'.$items["image"].'" alt=""></a>
			</div>
			<div class="cart-content">
				<h5 class="product-name"><a href="'.base_url('single-product').'">'.$items["name"].'</a></h5>
				<span class="cart-price">1 × KSH'.$items["price"].'</span>
			</div>
			<div class="cart-remove">
				<a title="Remove" href="#"><i class="fa fa-times"></i></a>
			</div>
		</li></ul>';

		$total += $items["price"];
	 }

	 $html .= '<p class="cart-subtotal"><strong>Subtotal:</strong> <span class="float-right">KSH '.$total.'</span></p> 
	 <p class="cart-btn">
		 <a href="'.base_url('cart').'">View cart</a>
		 <a href="'.base_url('checkout').'">Checkout</a>
	 </p>';

	  $data['quantity'] = $quantity;
	  $data['html'] = $html;
	  $data['cartTotal'] = $total;

	  print json_encode($data);

	}

	public function faq()
	{
		$this->load->view('template/header_view');
		$this->load->view('faq_view');
		$this->load->view('template/footer_view');
	}

	public function aboutUs()
	{
		$this->load->view('template/header_view');
		$this->load->view('about_us_view');
		$this->load->view('template/footer_view');
	}

	public function contactUs()
	{
		$this->load->view('template/header_view');
		$this->load->view('contact_us_view');
		$this->load->view('template/footer_view');
	}

	public function portfolio()
	{
		$this->load->view('template/header_view');
		$this->load->view('portfolio_view');
		$this->load->view('template/footer_view');
	}

	public function blog()
	{
		$this->load->view('template/header_view');
		$this->load->view('blog_view');
		$this->load->view('template/footer_view');
	}
	
	public function singleProduct()
	{
		$this->load->view('template/header_view');
		$this->load->view('single_product_view');
		$this->load->view('template/footer_view');
	}




	public function commonCurl($url)
	{
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);
		curl_close($ch);
		$response = json_decode($response);

		return $response;
	}

}
