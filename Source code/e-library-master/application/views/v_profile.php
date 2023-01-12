	<div class="container">
		<div class="bs-docs-section">
			<div class="row">
				<div class="col-xs-12">
					<div class="page-header">
						<h1 id="type">User</h1>
					</div>
				</div>
			</div>

			<div class="panel panel-primary">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Profile</h3>
			  	</div>
			  	<div class="panel-body">
			  		<div class="row">
				    	<div class="col-xs-3">
						    <div class="list-group">
						    	<div class="list-group-item">
						            <div class="row-picture col-xs-1">
						                <img class="circle " src="http://localmarketingplus.ca/wp-content/uploads/2015/02/blue-head.jpg" alt="icon" style="width: 200px; height: 200px;">
						            </div>
						            
					            </div>
					        </div>
					    </div>

					    <div class="col-xs-9">
						    <div class="list-group">
						    	<div class="list-group-item">
						    		<div class="col-xs-12">
						            	<div class="col-xs-3">
						                	<h4 class="list-group-item-text">User Code :</h4>
						                </div>
						                <div class="col-xs-9">
						                	<h4 class="list-group-item-text"><?php echo $cd_user ?></h4>
						                </div>
						            </div>
						            <div class="col-xs-12">
						            	<div class="col-xs-3">
						                	<h4 class="list-group-item-text">Name :</h4>
						                </div>
						                <div class="col-xs-9">
						                	<h4 class="list-group-item-text"><?php echo $name ?></h4>
						                </div>
						            </div>
						            <div class="col-xs-12">
						            	<div class="col-xs-3">
						                	<h4 class="list-group-item-text">Address :</h4>
						                </div>
						                <div class="col-xs-9">
						                	<h4 class="list-group-item-text"><?php echo $address ?></h4>
						                </div>
						            </div>
						            <div class="col-xs-12">
						            	<div class="col-xs-3">
						                	<h4 class="list-group-item-text">Birthday :</h4>
						                </div>
						                <div class="col-xs-9">
						                	<h4 class="list-group-item-text"><?php echo $birthday ?></h4>
						                </div>
						            </div>
						            <div class="col-xs-12">
						            	<div class="col-xs-3">
						                	<h4 class="list-group-item-text">Register Date :</h4>
						                </div>
						                <div class="col-xs-9">
						                	<h4 class="list-group-item-text"><?php echo $regisdate ?></h4>
						                </div>
						            </div>
						            <div class="col-xs-12">
						            	<div class="col-xs-3">
						                	<h4 class="list-group-item-text">Email :</h4>
						                </div>
						                <div class="col-xs-9">
						                	<h4 class="list-group-item-text"><?php echo $email ?></h4>
						                </div>
						            </div>
						            <div class="col-xs-offset-10">
						            	<a href="<?php base_url(); ?>update">
                  							<button type="submit" class="btn btn-raised btn-primary">Update</button>
                  						</a>
                					</div>
					            </div>
					        </div>
					    </div>
					</div>
			  	</div>
			</div>
		</div>
	</div>