<?php
session_start();
require __DIR__.'/vendor/autoload.php';
use phpish\shopify;
require __DIR__.'/conf.php';
$shopify = shopify\client($_SESSION['shop'], SHOPIFY_APP_API_KEY, $_SESSION['oauth_token']);
$update=$_GET["update_id"];
//echo $update;
$products = $shopify('GET /admin/products/'.$update.'.json');
  foreach($products as $product)
  {
	  $variant=$products['variants'];
   foreach($variant as $vari)
   {
    $v_price=$vari['price'];
	$v_sku=$vari['sku'];
	$v_id=$vari['id'];
    }
   }
?>
<form enctype="multipart/form-data" action="" method="POST">
<table border="1">
<tr><th COLSPAN=2>PRODUCTS</th></tr>
<tr><th>Product Title</th><td><input type="text" name="title" value="<?php echo $products['title'];?>"/></td></tr>
<tr><th>Vendor</th><td><input type="text" name="vendor" value="<?php echo $products['vendor'];?>"/></td></tr>
<tr><th>Product Type</th><td><input type="text" name="type" value="<?php echo $products['product_type'];?>"/></td></tr>
<!--<tr><th><label>Author</label></th><td><input type="text" name="author"/></td></tr> -->
<tr><th>Price</th><td><input type="text" name="price" value="<?php echo $v_price;?>"/></td></tr>
<tr><th>SKU code</th><td><input type="text" name="sku" value="<?php echo $v_sku;?>"/></td></tr>
</table>
<p>
<button onclick="goBack()">Back</button>
<script>
function goBack() {
    window.history.back();
}
</script>
<input type="reset" name="reset" value="Reset"/>
<input type="submit" name="submit1" value="Submit"/></p>
</form>

<?php
if(isset($_POST['submit1'])) 
{
    $p_title = $_POST['title'];
	//echo $p_title;
	$p_vendor = $_POST['vendor'];
	//echo $p_vendor;
	$p_type = $_POST['type'];
	//echo $p_type;
	$vprice = $_POST['price'];
	//echo $vprice;
	$vsku = $_POST['sku'];
	//echo $vsku;
	
$product = $shopify('PUT /admin/products/'.$update.'.json', array(), array
  (
   'product' => array
   (
    "title" => $p_title,
    "vendor" => $p_vendor,
    "product_type" => $p_type
   )
  ));
   $variant=$shopify('PUT /admin/variants/'.$v_id.'.json', array(), array
   (
  "variant"=> array
   (
	"price"=> $vprice,
	"sku"=> $vsku
  ))
);
  header('location:index.php');
}
?>