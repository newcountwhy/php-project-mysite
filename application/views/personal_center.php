
<!DOCTYPE html>
<html lang="en">
<head>
    <title>User profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<?php 
    $username   = ($this->session->userdata['username']);
    $email      = ($this->session->userdata['email']);
	$user_id    = ($this->session->userdata['user_id']);
	$description = ($this->session->userdata['description']);
    ?>
<div class="container">
    <div>
	<?php echo form_open('personal_center', array('method'=>'get'))?>
	  <h2 class="center">User profile</h2>       
	  <?php echo $this->session->flashdata('msg'); ?>
    <?php echo form_open(); ?>
    <input type="text" id="user_id" name="user_id" value="<?php echo $user_id; ?>">
    <div>
    <input type="text" id="username" name="username" placeholder="Username" value="<?php echo $username; ?>">
    <small class="error-text"><?php echo form_error('username'); ?></small>
    </div> 
    <div>
    <input type="email" id="email" name="email" placeholder="Enter your email" value="<?php echo $email; ?>">
    <small class="error-text"><?php echo form_error('email'); ?></small>
    </div>
	<div>
	<input type="text" id="description" name="description" placeholder="Enter your description" value="<?php echo $description; ?>">

	</div>
    <div><?php echo form_submit('submit', 'Submit'); ?></div>
    <?php echo form_close(); ?>
				
			
	
</div>
</html>