
<DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>SHAMIR R GOAWALA</title>
    </head>
    <body>
	THIS IS BODY OF SHAMIR'S FRONT-END PAGE: 
       <p>Generating a random number between 1 and 10:
            <?php

            echo rand(1, 10);

            ?>




<h3>TRYING TO SYNC BACKEND PHP APP:</h3>
<ol>

<?php
//$myvar=include('./product-service/index.php');
//echo $myvar;


	$json = file_get_contents("http://product-service/index.php");
	$obj = json_decode($json);
	echo $json;

echo "<br><br>";

        $json = file_get_contents("http://product-service/index2.php");
        $obj2 = json_decode($json);
        echo $json;

"<br>"


//	echo $obj;
//	$products = $obj->products;
//	foreach ($products as $product){
//		echo "<li>$obj</li>";
//	}
?>
</ol>
</body>
</html>
