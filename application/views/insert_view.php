<div clas="container">
    <form method="post" action="form_validation">
        <div class="form-group">
        <lable>enter name</lable>
        <input type="text" name="name" class="form-control">
        <span class="text-danger"><?php echo form_error("name")?></span>
        </div>
         <div class="form-group">
        <lable>enter rate</lable>
        <input type="text" name="rate" class="form-control">
        <span class="text-danger"><?php echo form_error("rate")?></span>
        </div>
         <div class="form-group">
        <lable>enter price</lable>
        <input type="text" name="price" class="form-control">
        <span class="text-danger"><?php echo form_error("price")?></span>
        </div>
         <div class="form-group">
        <lable>enter desc</lable>
        <input type="text" name="description" class="form-control">
        <span class="text-danger"><?php echo form_error("description")?></span>
        </div>
         <div class="form-group">
        
        <input type="submit" name="insert" class="btn btn-info">
        </div>
    </form>
    
</div>