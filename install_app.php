<?php
 
if(isset($_POST['submit'])){
// Fetching variables of the form which travels in URL

$address = $_POST['address'];
if( $address !='')
{
// To redirect form on a particular page
header("Location:http://jeronone.co.in/STAGE/apps/app/install.php?shop=$address");
}
}
?>
<html>
 <head>
  <style>
    form {
        
        font-size: 20px;
       text-align:center;
	   margin: 15% 20% 20% 20%;
    }
    input {
         padding: 5px;
    
     }
    p
    {
     text-align:center;
    }
    html {
background: url("http://www.momorialcards.com/images/light_textured_backround.jpg") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
	}
  </style>
 </head>
<body>
 
 <form method="post">
  <h2>INSTALL APP</h2>
 Enter your store Url&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<input id="address" name="address" placeholder='test-store.myshopify.com' type='text' value="" height="100px">
<input id='btn' name="submit" type='submit' value='Submit'>
</form>
</body>
</html>