<form method="post">
    <div style="text-align: center">
        EDIT PRODUCT
    </div>
    <div class="form-group">
        <label >Name</label>
        <input type="text" class="form-control" value="<?php echo $products->name ?>" name="name">
    </div>
    <div class="form-group">
        <label >Type</label>
        <input type="text" class="form-control" value="<?php echo $products->type ?>" name="type">
    </div>
    <div class="form-group">
        <label >Amount</label>
        <input type="text" class="form-control" value="<?php echo $products->amount ?>" name="amount">
    </div>
    <div class="form-group">
        <label >Price</label>
        <input type="text" class="form-control" value="<?php echo $products->price ?>" name="price">
    </div>
    <div class="form-group">
        <label >Date</label>
        <input type="date" class="form-control" value="<?php echo $products->date ?>" name="date">
    </div>
    <div class="form-group">
        <label>Description</label>
        <input type="text" class="form-control" value="<?php echo $products->description ?>" name="description">
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
</form>