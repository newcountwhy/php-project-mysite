<div class="container">
      <div class="col-4 offset-4">
		    <form method="post" action="reg/reg">
				<h2 class="text-center">Register</h2>      
					<div class="form-group">
                        <lable>Username</label>
						<input type="text" class="form-control" placeholder="Username" required="required" name="username">
					</div>
					<?php echo $error; ?>
					</div>
					<div class="form-group">
                        <label>Password</label>
						<input type="password" class="form-control" placeholder="Password" required="required" name="password" >
					</div>
                    <div class="form-group">
                        <label>Email</label>
						<input type="email" class="form-control" placeholder="Email" required="required" name="email" >
					</div>
					
				
                    <div class="form-group">
                        <label>Confirm password</label>
						<input type="password" class="form-control" placeholder="password" required="required" name="password1">
					</div>
					<div class="form-group">
					    <label>description</label>
						<input type="text" class="form-control" placeholder="description" required="required" name="description">
					
					</div>
					<div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block" name="reg_user">Register now</button>
					</div>
					<p>
					    Already a member?<a href="<?php echo base_url();?>login"> Sign in </a>
					</p> 
			
	</div>
</div>