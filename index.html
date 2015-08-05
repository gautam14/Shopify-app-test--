<?php 

 session_start();

 require __DIR__.'/vendor/autoload.php';
 use phpish\shopify;
 require __DIR__.'/conf.php';
 $shopify = shopify\client($_SESSION['shop'], SHOPIFY_APP_API_KEY, $_SESSION['oauth_token']);
 try
 {
	 /*
	 $collections= $shopify('GET /admin/custom_collections.json');
	 echo "<table>";
	 foreach($collections as $collectio)
	 {
		echo "<td>".$collectio['title']."</td>";
		
	 }
	 echo "</table>"; 
	
	 $assets=$shopify('GET /admin/themes/31045445/assets.json');
	 echo "<table border=1>";
	 echo "<tr>List of Assets</tr>";
	 echo "<th>Key Name</th><th>Url</th>";
	 foreach($assets as $asset)
	 {
		  echo "<tr>";
		 echo "<td>".$asset['key']."</td>";
		 echo "<td>".$asset['public_url']."</td>";
		  echo "</tr>";
	 }
	 echo "</table>";
	  */
  $products = $shopify('GET /admin/products.json');
  //echo "<pre>";
  //print_r($products);
  echo "<table border=1>";
  echo "<tr><th colspan=8>LIST OF PRODUCTS</th></tr>";
  echo "<th>Title</th><th>Vendor</th><th>Product Type</th><th>Price</th><th>Variant_id</th><th>SKU</th><th colspan=2>Action</th>";
  
  foreach($products as $product)
  {
   echo "<tr>";
   echo "<td>".$product['title']."</td>";
   echo "<td>".$product['vendor']."</td>";
   echo "<td>".$product['product_type']."</td>";
   
   $variants=$product['variants'];
   foreach($variants as $variant)
   {
    echo "<td>". $variant['price']."</td>";
    echo "<td>". $variant['id']."</td>";
	echo "<td>". $variant['sku']."</td>";
   }
   echo "<td><a href='delete_products.php?product_id=".$product['id']."'><img src='https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRy06zI5J6XiqL5mNgjf8qz-8g22olH9RhJylh-YXIXfJm11WAh1g' width='20'/></a></td>";
   echo "<td><a href='update.php?update_id=".$product['id']."&title=".$product['title']."'><img src='https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcTgxi-RazvoBgnyeQgbbaPZwFKfSGOARkOAdRjOFYM3RYc1iLmEOQ' width='20'/></a></td>";
   echo "</tr>";
  }
echo '</table>';
echo "<br>";
echo "<a href='insert.php'><img src='data:image/jpeg;base64,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' width='70'></a>";
//echo '<a href="insert.php"><input type="submit" name="submit" value="Create New" /></a>';
 }
 catch (shopify\ApiException $e)
 {
  # HTTP status code was >= 400 or response contained the key 'errors'
  echo $e;
  print_r($e->getRequest());
  print_r($e->getResponse());
 }
 catch (shopify\CurlException $e)
 {
  # cURL error
  echo $e;
  print_r($e->getRequest());
  print_r($e->getResponse());
 }