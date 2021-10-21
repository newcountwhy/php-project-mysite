<!DOCTYPE html>
<html lang="en">
<head>
    <title>My review list</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <?php echo form_open('my_review', array('method'=>'get'))?>
    <h2 class="text-center"> reviewed lists</h2>
    <hr>

    

    <div class="row">
        <div class="col-4 form-inline">
            <label for="product_name">product_name:&nbsp;</label>
            <input size='5' id="product_name" type="text" class="form-control" name="keyword" value="<?php echo $keyword; ?>">
        </div>

        <div class="col-4 form-inline">
            <div class="form-group">
                <label for="number_sort"> favorite_level sort by:&nbsp;</label>
                <select name="sort_by" id="number_sort" class="form-control" >
                    <option <?php echo $sort_by ?> value="asc">Ascending</option>
                    <option <?php echo $sort_by ?>  value="desc">Descending</option>
                </select>
            </div>
        </div>

        <div class="col-2">
            <button type="submit"  class="btn btn-primary" >Search</button>
        </div>


    </div>

    <hr>

    <table class="table table-striped text-center">
        <thead>
        <tr>
            <th>Product name</th>
            <th>Product brand</th>
            <th>Product details</th>
            <th>Product reviews</th>
            <th>Favorite level</th>
        </tr>
        </thead>
        <tbody>
        <?php 
            foreach($records as $row)
                echo "
				<tr>
                <td>$row->product_name</td>
                <td>$row->product_brand</td>
                <td> $row->product_details</td>
                <td>$row->product_reviews</td>
                <td> $row->favorite_level</td>
				</tr>
			";
            ?>
        
        </tbody>
    </table>
</div>

  </body>
</html>
