	<div class="container">
		<div class="row">
			
			<div class="col s12"><h4>Employee</h4></div>
			<div class="col s6">How to add a row to database</div>
			<div class="col s6">
				<a href="<?php echo base_url('employee'); ?>" class="btn waves-effect waves-light black" >Back
				    
				</a>
			</div>
		</div>
		<div class="row">

			<form class="col s12" action="<?php echo base_url('employee/store'); ?>" method="POST">
			<div class="row">
				<div class="input-field col s6">
				<input placeholder="Placeholder" name="first_name" id="first_name" type="text" class="validate">
				<label for="first_name">First Name</label>
				<small><?php echo form_error('first_name');  ?></small>

				</div>
				<div class="input-field col s6">
				<input id="last_name" type="text" name="last_name" class="validate">
				<label for="last_name">Last Name</label>
				<small><?php echo form_error('last_name');  ?></small>

				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
				<input id="password" type="password" name="password" class="validate">
				<label for="password">Password</label>
				<small><?php echo form_error('password');  ?></small>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
				<input id="email" type="email" class="validate" name="email">
				<label for="email">Email</label>
				<small><?php echo form_error('email');  ?></small>
				</div>
			</div>
			<div class="row">
				 <button class="btn waves-effect waves-light" type="submit" name="action">Submit
					<i class="material-icons right">send</i>
				</button>
			</div>

			</form>


			</div>
			</div>

