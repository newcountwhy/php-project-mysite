
<hr/>
<hr/>
<div class="container">
    <div class="row form-group">
    <form action="<?php echo base_url('upload/do_upload'); ?>" enctype="multipart/form-data" class="dropzone" id="upload-image" method="POST">
        <?php echo $error;?>
		<div class="form-group">
            <p>You can drag and drop image to upload/choose image->click "open"</p>
            <p>when you drag image to choose file button(the button change from grey to white), you image will be upload. Otherwise, the image will be showd in a new page</p>
            <input type="file" name="userfile" size="20" value="upload"/> 
        </div>
        <hr/>
        <hr/>
        <p>If you upload picture successful, you will go to write review page directly</p>
		<hr/>
        <hr/>
        <div class="form-group">
            <input type="submit" value="upload" background="grey"/>
        </div>
    </form>
    <form action="upload/watermark" method="post">
    <p>If you want manipulate image before upload the image, you can click "manipulate image button"<p>
    <div class="form-group">
						<button type="submit" class="btn btn-primary btn-block">manipulate image</button>
					</div>
    </form>
    
   
    </div>
</div>
<script type="text/javascript">
	Dropzone.options.imageUpload = 
	{
        maxFilesize:1,
        acceptedFiles: ".jpeg,.jpg,.png,.gif"
    };
</script>
<?php echo form_close(); ?>
<h3></h3>
<div class="main"> </div>
