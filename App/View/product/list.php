<a href="index.php?page=product-create" class="btn btn-primary" >Create Product</a>
<div class="container">
<table border="1" style="text-align: center">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th colspan="4">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($products as $key=> $product):?>
        <tr>
            <td><?php echo $key + 1?></td>
            <td><?php echo $product->name?></td>
            <td><?php echo $product->price?></td>
            <td>
                <a href="index.php?page=product-detail&id=<?php echo $product->id?>" class="btn btn-success"> Detail</a>
                <a onclick="return confirm('Are you sure?')" href="index.php?page=product-delete&id=<?php echo $product->id ?>" class="btn btn-danger">Delete</a>
                <a href="index.php?page=product-edit&id=<?php echo $product->id ?>" class="btn btn-info">Edit</a>
            </td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>
</div>