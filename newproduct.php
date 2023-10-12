
<?php
    $products = simplexml_load_file('product.xml');

    function setValue($name){
        if(isset($_GET[$name])){
            echo $_GET[$name];
        }
    }

    if(isset($_GET['submit'])){
        echo "<h1>"."Add new product"."</h1>";
    }
    elseif ($_GET['action'] =='edit') {
        echo'<h1> Edit details</h1>';
    }else{
        echo "<h1>"."Update Product"."</h1>";
    }
   
    
    if(isset($_GET['submit'])){
        if(file_exists('product.xml')){
            //update product
            $products = simplexml_load_file('product.xml');
            $product = $products -> addChild('product');
            $product-> addAttribute('id',$_GET['product_id']);
            $product-> addChild('name',$_GET['product_name']);
            $product-> addChild('price',$_GET['product_price']);

            file_put_contents('product.xml',$products->asXML());
            header("location:ind.php");

        }
    }

    // if(isset($_GET['action']==edit)){
    //     //edit product
    // }
    
?>



<form action="newProduct.php" method = "GET">
    <label for="id">product id</label>
    <input type="text" name = "product_id" value = "<?php setValue("product_id")?>">
    <br><br>

    <label for="id">product name</label>
    <input type="text" name = "product_name" value = "<?php setValue("product_name")?>">
    <br><br>

    <label for="id">product price</label>
    <input type="number" name = "product_price" value = "<?php setValue("product_price")?>">
    <br><br>

    <input type="submit" value = "add product" name ="submit" >
</form>