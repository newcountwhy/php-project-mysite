<div class="container">
      <div class="col-4 offset-4">
			<?php echo form_open(base_url().'write_review'); ?>
				<h2 class="text-center">write review</h2>       
                
                <p>Click this button to upload relevant picture</p>
                <a href="https://infs3202-5f6dbbea.uqcloud.net/m3/upload">
                    
                    <botton>Click me</button>
                </a>
               
                <form method ="post" action="write_review/add_review">
                    <h4>Input details of product</h4>     
                    <div class="form-group">
                        <lable>Your username:</label>
						<input type="name" class="form-control" placeholder="username" required="required" name="username">
					</div> 
					<div class="form-group">
                        <lable>Product Name:</label>
						<input type="name" class="form-control" placeholder="product_name" required="required" name="product_name">
					</div>
                          
					<div class="form-group">
                        <lable>Brand of product</label>
						<input type="name" class="form-control" placeholder="product_brand" required="required" name="product_brand">
					</div>
                          
					<div class="form-group">
                        <lable>Product details</label>
						<input type="text" class="form-control" placeholder="product_details" required="required" name="product_details">
					</div>
                    <div class="form-group">
                        <lable>write review</label>
						<input type="text" class="form-control" placeholder="product_reviews" required="required" name="product_reviews">
					</div>
                    <div class="form-group">
                        <lable>favorite level</label>
						<input type="text" class="form-control" placeholder="favorite_level" required="required" name="favorite_level">
					</div>
                    
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block">Submit</button>
					</div>
                </form>

					 
			<?php echo form_close(); ?>
	</div>
</div>