
 <?php 
session_start();

 require __DIR__.'/vendor/autoload.php';
 use phpish\shopify;

 require __DIR__.'/conf.php';

 $shopify = shopify\client($_SESSION['shop'], SHOPIFY_APP_API_KEY, $_SESSION['oauth_token']);
$pro=$_GET["product_id"];
echo $pro;
 $a=$shopify('DELETE /admin/products/'.$pro.'.json');
 echo "alert('product delete succesfully')";
 //echo "<script type='text/javascript'>alert('$message');</script>";
// header('location:index.php');
 
 ?>