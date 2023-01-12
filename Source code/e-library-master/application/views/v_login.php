<div class="container">
	<div class="bs-docs-section">
		<div class="row">
			<div class="col-xs-12">
				<div class="page-header">
					<h1 id="type">Login</h1>
				</div>

				<div class="well col-xs-4 col-xs-offset-4">
					<form class="form-horizontal col-xs-12" method="post" action="">
						<fieldset>
							<div class="form-group label-floating">
							  	<label class="control-label" for="focusedInput2">Email Address</label>
							  	<input class="form-control" id="focusedInput2" type="email" value="<?php echo $email ?>" name="email">
							  	<p class="help-block">Write your email address correctly</p>
							  	
							</div>

							<div class="form-group label-floating">
							  	<label class="control-label" for="focusedInput2">Password</label>
							  	<input class="form-control" id="focusedInput2" type="password" value="<?php echo $pass ?>" name="pass">
							  	<p class="help-block">Write your password correctly</p>
							  	<br/>
							  	<?php echo form_error('pass', '<div class="error fonterror">', '</div>'); ?>
							</div>

							<?php if($gagal!=""){ ?>
                                <label style="color: red">
                                    <?php echo $gagal?>
                                </label>
                            <?php } ?>

                            <br/>
                            <a href="<?php echo base_url(); ?>main/register">Need an account?</a>

							<div class="col-xs-offset-4">
								<input type="submit" value="Login" class="btn btn-raised btn-primary"/>
		                	</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	
	</div>
</div>