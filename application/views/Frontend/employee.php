	<div class="container">
		<div class="row">
			
			<div class="col s12"><h4>Employee</h4></div>
			<div class="col s6">Add a row to database</div>
			<div class="col s6"> message here</div>
			<div class="col s6">
				<a href="<?php echo base_url('employee/add'); ?>" class="btn waves-effect waves-light blue" >Add Employee
				    <i class="material-icons right">add</i>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col s12">
			<div class="card-panel">
				
      <table id="datatable1">
        <thead>
          <tr>
              <th>First Name</th>
              <th>Last  Name</th>
              <th>Password</th>
              <th>Email</th>
              <th>Action</th>
          </tr>
        </thead>

        <tbody>
		<tr>
		<?php 
			foreach($employee as $row):?>
            <td><?php 
			echo $row->first_name;
			?></td>
            <td><?php 
			echo $row->last_name;
			?></td>
            <td><?php 
			echo $row->password;
			?></td>
            <td><?php 
			echo $row->email;
			?></td>
			<th><a href="<?php echo base_url('employee/edit/'.$row->id.''); ?>" class="btn waves-effect waves-light black" >
				    <i class="material-icons right">edit</i>
				</a>
			<a href="<?php echo base_url('employee/delete/'.$row->id.''); ?>" class="btn waves-effect waves-light red" ><i class="material-icons right">delete</i>
				</a>	
			</th>
</tr>

				
		<?php	endforeach
		?>
        </tbody>
      </table>
			</div>
			</div>
		</div>

	</div>

