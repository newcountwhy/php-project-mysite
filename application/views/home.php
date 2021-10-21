<div class="container">
      <div>
			<?php echo form_open(base_url().'home/upload_picture'); ?>
            <form class="form-inline my-2 my-lg-0">
                <h1>Q&A</h1>
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <div>
                <div>
                <h1>Popular Categories</h1>
                <div class="image-container">
                    <div class="imagerow1">
                        <a href="<?php echo base_url();?>car_reviews"> 
                            <img src="https://www.focus2move.com/wp-content/uploads/2020/08/Tesla-Roadster-2020-1024-03-768x576.jpg.webp" alt="Car image" style="width:180px;height:180px;">
                        </a>
                        <img src="https://fl-thenaturalparent-media.s3.amazonaws.com/uploads/2020/11/inka-nu-kiki_LGE.jpg" alt="Babies&Kids image" style="width:180px;height:180px;">
                        <img src="https://petoutletshop.com/wp-content/uploads/2021/04/pet_products.jpg" alt="Pet products image" style="width:180px;height:180px;">
                    </div>
                    <div class="imagerow2">
                        <img src="http://www.tulipmag.com/wp-content/uploads/2018/08/makeup.jpg" alt="Beauty&Products image" style="width:180px;height:180px;">
                        <img src="https://previews.123rf.com/images/vvvisual/vvvisual1604/vvvisual160400120/55863404-branding-mock-up-kitchen-with-table-and-kitchenware-blank-template-on-simple-background-for-home-res.jpg" alt="Kitchenware image" style="width:180px;height:180px;">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Arduino_ftdi_chip-1.jpg/390px-Arduino_ftdi_chip-1.jpg" alt="electronics image" style="width:180px;height:180px;">
                    </div>
                </div>
                </div>
               
            </div>
			<?php echo form_close(); ?>
	</div>
</div>