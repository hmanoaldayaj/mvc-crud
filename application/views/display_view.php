<!doctype html>
<html lang="en">
    <body>
        
        <h1>items list</h1>
<table class="table table-bordered table-inverse">
            <thead>
                <th class="table-active">id</th>
                <th class="table-active">product name</th>
                <th class="table-active">descripton</th>
                <th class="table-active">rate</th>
                <th class="table-active">price</th>
                <th class="table-active">image</th>
            </thead>
            <?php foreach($product as $item):?>
            <tbody>
                <th><?php echo $item->id?></th>
                <th><?php echo $item->name?></th>
                <th><?php echo $item->description?></th>
                <th><?php echo $item->rate?></th>
                <th><?php echo $item->price?></th>
                <th><?php echo $item->image?></th>
           </tbody>
            <?php endforeach;?>
            
        </table>
    </body>
    
</html>