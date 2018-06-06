<?php
	header('Content-type: application/json');
	class Product {
		public $id = "";
		public $title = "";
		public $description = "";
		public $url = "";
	}

    $dataSource = "http://smart2.icoolshow.net/products/wp-json/wp/v2/posts/";
    $data = file_get_contents($dataSource);

    $productInput = json_decode($data, true);
	
	$productOutputList = array();
	
	foreach($productInput as $item){
		$newProduct = new Product();
		$newProduct->id=$item['id'];
		$newProduct->title=$item['title']['rendered'];
		$newProduct->description=$item['excerpt']['rendered'];
		$newProduct->url=$item['guid']['rendered'];
		$productOutputList[] = $newProduct;
	}
	
    echo json_encode($productOutputList);
?>