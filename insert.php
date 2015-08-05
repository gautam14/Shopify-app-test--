<?php 
 session_start();

 require __DIR__.'/vendor/autoload.php';
 use phpish\shopify;

 require __DIR__.'/conf.php';

$shopify = shopify\client($_SESSION['shop'], SHOPIFY_APP_API_KEY, $_SESSION['oauth_token']);
?>
<form enctype="multipart/form-data" action="" method="POST">
<table border="1">
<tr><th COLSPAN=2><h1>Products</h1></th></tr>
<tr><th><label>Product Title</label></th><td><input type="text" name="title"/></td></tr>
<tr><th><label>Vendor</label></th><td><input type="text" name="vendor"/></td></tr>
<tr><th><label>Product Type</label></th><td><input type="text" name="type"/></td></tr>
<!--<tr><th><label>Author</label></th><td><input type="text" name="author"/></td></tr> -->
<tr><th><label>Price</label></th><td><input type="text" name="price"/></td></tr>
<tr><th><label>SKU code</label></th><td><input type="text" name="sku"/></td></tr>
<tr><th><label>Image Url</label></th><td><input type="text" name="image"/></td></tr>
</table>
<p><button onclick="goBack()">Back</button>

<script>
function goBack() {
    window.history.back();
}
</script>
<input type="reset" name="reset" value="Reset"/>
<input type="submit" name="submit" value="Submit"/></p>
</form>
<?php
if(isset($_POST['submit'])) {
    
    $pro_title = $_POST['title'];
	echo $pro_title;
	$vendor = $_POST['vendor'];
	echo $vendor;
	$type = $_POST['type'];
	echo $type;
	$price = $_POST['price'];
	echo $price;
	$sku = $_POST['sku'];
	echo $sku;
	$img = $_POST['image'];
	echo $img;
	
	
	//$pro_title = $_POST['title'];
	
$product = $shopify('POST /admin/products.json', array(), array
  (
   'product' => array
   (
    "title" => $pro_title,
    "vendor" => $vendor,
    "product_type" => $type,
	"images" => array
    (
     array
     (
      "src" => $img
      
     )
    ),
    //"author" => 'author',
    "variants" => array
    (
     array
     (
      "price" => $price,
      "sku" => $sku,
     )
    )
	
   )
  ));
  header('location:index.php');
}
// 
  //print_r($product);
  //echo "product added successfully";
 

 ?>