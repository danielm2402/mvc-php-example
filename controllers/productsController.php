<?php
class productsController
{

	public function __construct()
	{
		require_once "models/product.php";
	}

	public function index()
	{
		$products = new Product();
		$data["products"] = $products->get_products();
		require_once "views/products/listProducts.php";
	}
}
