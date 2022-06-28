	<div class="container">
		<div class="row">
			
			<div class="col s12"><h4>Edit Employee</h4></div>
			<div class="col s6">Edit employee data</div>
			<div class="col s6">
				<a href="<?php echo base_url('employee'); ?>" class="btn waves-effect waves-light black" >Back
				    
				</a>
			</div>
		</div>
		<div class="row">

		
			<form class="col s12" action="<?php echo base_url('employee/UpdateEmp/'.$employee->id); ?>" method="POST">
			<div class="row">
				<div class="input-field col s6">
				<input placeholder="Placeholder" name="first_name" value="<?php echo $employee->first_name; ?>" id="first_name" type="text" class="validate">
				<label for="first_name">First Name</label>
				<small><?php echo form_error('first_name');  ?></small>

				</div>
				<div class="input-field col s6">
				<input id="last_name" type="text" name="last_name" value="<?= $employee->last_name; ?>" class="validate">
				<label for="last_name">Last Name</label>
				<small><?php echo form_error('last_name');  ?></small>

				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
				<input id="password" type="password" value="<?= $employee->password; ?>" name="password" class="validate">
				<label for="password">Password</label>
				<small><?php echo form_error('password');  ?></small>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
				<input id="email" type="email" class="validate" name="email" value="<?= $employee->email; ?>">
				<label for="email">Email</label>
				<small><?php echo form_error('email');  ?></small>
				</div>
			</div>
			<div class="row">
				 <button class="btn waves-effect waves-light" type="submit" name="action">Edit Info
					<i class="material-icons right">edit</i>
				</button>
			</div>

			</form>


			</div>
			</div>

