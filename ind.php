<?php
    $products = simplexml_load_file('product.xml');
   
?>

<a href="newProduct.php">Add new product</a>
    <table border =1>
    <tr>
        <th>ID</th>    
        <th>Name</th>
        <th>Price</th>
        <th>Action</th>
    </tr>

    <?php
    foreach($products->product as $product){ 
        $id = $product['id'];
        $name = $product->name;
        $price = $product->price;
        ?>

            <tr>
                <td><?php  echo $id; ?></td>
                <td> <?php  echo $name; ?></td>
                <td> <?php  echo $price;?></td>
                <td>
                    <a href="delete.php?id=<?php echo $id; ?>">Remove</a>
                </td>
                <td> 
                    <a href="newproduct.php?id=<?php echo $id; ?>&action=edit">Edit</a>
                </td>
                
            </tr>
       
       <?php }




?>





</table>

