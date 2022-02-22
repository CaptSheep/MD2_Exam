<form method="post">
    <div class="form-group">
        <label >Name</label>
        <input type="text" class="form-control" value="<?php echo $products->name ?>">
    </div>
    <div class="form-group">
        <label >Type</label>
        <input type="text" class="form-control" value="<?php echo $products->type ?>">
    </div>
    <div class="form-group">
        <label >Price</label>
        <input type="text" class="form-control" value="<?php echo $products->price ?>">
    </div>
    <div class="form-group">
        <label >Amount</label>
        <input type="text" class="form-control" value="<?php echo $products->amount ?>">
    </div>
    <div class="form-group">
        <label >Date</label>
        <input type="date" class="form-control" value="<?php echo $products->date ?>">
    </div>
    <div class="form-group">
        <label>Description</label>
        <input type="text" class="form-control" value="<?php echo $products->description ?>">
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
</form>