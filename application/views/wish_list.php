<!DOCTYPE html>
<html lang="en">
<head>
    <title>Wish list</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <?php echo form_open('wish_list', array('method'=>'get'))?>
    <h2 class="text-center">wish list</h2>
    <hr>

    

    <div class="row">
        <div class="col-4 form-inline">
            <label for="product_name">product_name:&nbsp;</label>
            <input size='5' id="product_name" type="text" class="form-control" name="keyword" value="<?php echo $keyword; ?>">
        </div>


        <div class="col-2">
            <button type="submit"  class="btn btn-primary" >Search</button>
        </div>


    </div>

    <hr>

    <table class="table table-striped text-center">
        <thead>
        <tr>
            <th>Car name</th>
            <th>Car kinds</th>
            <th>Brands</th>
            <th>Product reviews</th>
        </tr>
        </thead>
        <tbody>
        <?php 
            foreach($records as $row)
                echo "
				<tr>
                <td>$row->car_name</td>
                <td>$row->car_kinds</td>
                <td> $row->brands</td>
                <td>$row->review</td>
                
				</tr>
			";
            ?>
        
        </tbody>
    </table>
</div>

  </body>
</html>
