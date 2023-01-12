	<div class="container">
		<div class="bs-docs-section">
			<div class="row">
				<div class="col-xs-12">
					<div class="page-header">
						<h1 id="type">Admin</h1>
					</div>
				</div>
			</div>

			<div class="well col-xs-10 col-xs-offset-1">
				<form class="form-horizontal" method="post" action="">
					<fieldset>
						<legend>Create User</legend>

						<div class="form-group">
						    <label for="inputName" class="col-xs-1 control-label">Name</label>
						    <div class="col-xs-10">
						    	<input type="text" class="form-control" name="name" id="inputName" placeholder="Enter your name here">
						    </div>
						</div>

						<div class="form-group">
						    <label for="inputName" class="col-xs-1 control-label">Address</label>
						    <div class="col-xs-10">
						    	<textarea class="form-control" name="address" placeholder="Enter your address here"></textarea>
						    </div>
						</div>

						<div class="form-group">
						    <label for="inputEmail" class="col-xs-1 control-label">Email</label>
						    <div class="col-xs-10">
						    	<input type="email" name="email" class="form-control" id="inputEmail" placeholder=" Enter your mail here">
						    </div>
						</div>

						<div class="form-group">
						    <label for="inputPassword" class="col-xs-1 control-label">Password</label>
						    <div class="col-xs-10">
						    	<input type="password" name="password" class="form-control" id="inputPassword" placeholder="Enter your password here">
						    </div>
						</div>

						<div class="form-group">
						    <label for="inputDate" class="col-xs-1 control-label">Birthday</label>
						    <div class="col-xs-3">
						    	<input type="date" name="birthday" class="form-control" id="inputDate">
						    </div>
						</div>

						<div class="form-group">
						    <label for="inputPassword" class="col-xs-1 control-label">Level</label>
						    <div class="col-xs-10">
						    	<input type="text" name="level" class="form-control" id="inputLevel" placeholder="Enter level here">
						    </div>
						</div>

						<div class="col-xs-offset-10">
                  			<input type="submit" value="Submit" class="btn btn-primary"/>
                		</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>