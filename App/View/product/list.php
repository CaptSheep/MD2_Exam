<a href="index.php?page=product-create">Create Product</a>
<div class="container">
<table border="1" style="text-align: center">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Type</th>
        <th>Price</th>
        <th>Amount</th>
        <th>Date</th>
        <th>Description</th>
        <th colspan="4">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($products as $key=> $product):?>
        <tr>
            <td><?php echo $key + 1?></td>
            <td><?php echo $product->name?></td>
            <td><?php echo $product->type?></td>
            <td><?php echo $product->price?></td>
            <td><?php echo $product->amount?></td>
            <td><?php echo $product->date?></td>
            <td><?php echo $product->description?></td>
            <td>
                <a href="index.php?page=product-detail&id=<?php echo $product->id?>"> Detail</a>
                <a onclick="return confirm('Are you sure?')"><a href="index.php?page=product-delete&id=<?php echo $product->id ?>">Delete</a></a>
                <a href="index.php?page=product-edit&id=<?php echo $product->id ?>">Edit</a>
            </td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>
</div>