<?php

$products = simplexml_load_file('product.xml');

if(isset($_GET['id'])){
    $p_id = $_GET['id'];
    $i = 0;
    $index = 0;




    foreach($products->product as $product){
        if($id == $p_id){
        $index = $i;
        break;
        }
        
        $i++;
    }

        
    unset($products->product[$index]);
    file_put_contents('product.xml',$products->asXML());
    header("location:ind.php");
}    



?>