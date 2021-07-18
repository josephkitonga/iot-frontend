<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->view('template/header_view');
		$this->load->view('checkout_view');
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
		echo $product_id;
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

}
