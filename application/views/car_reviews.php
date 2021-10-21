<div >
      <div>
      
      <?php echo form_open(base_url().'wish_list'); ?>
				<h2 >Cars reviews list</h2>
                
                <div>
                    <label>Car's relevant information:&nbsp;</label>
                    <input size='5' id="product_name" type="text" class="form-control" name="keyword" value="<?php echo $keyword; ?>">
                </div>
                 
					
                <div>
                <label> Cars reviews sort by:&nbsp;</label>
                
                </div>

                <div class="col-2">
                    <button type="submit"  class="btn btn-primary" >Search</button>
                </div>

                <form >
                
                    <?php 
                    
                    foreach ($records as $row)
                    //<div style="background-color:grey;">
                   echo"
                   
                    <p>Brands:  $row->brands</p>
                    <p>Car kinds: $row->car_kinds</p>
                    <p>Car name: $row->carname</p>
                    <p>Review:  $row->review</p>
                    <p>Publisher  $row->username</p>
                    <p>Published time: $row->published_time</p>
                    <p>Favorites: $row->favorites_number</p>
                    
                    
                    <button>ADD TO WISH LIST</button>
                    <hr/>
                    <hr/>
                   
                    ";
                    
                    ?>   
                    
                
                </form>
			<?php echo form_close(); ?>
	</div>
</div>