<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 header">
			<h1>Student Management System</h1>
		</div>
	</div>
	<div class="row">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<ul class="nav navbar-nav">
						<li class="active"><a href="<?php echo base_url('Boots'); ?>">Home</a></li>
						<li><a href="<?php echo base_url('Boots/view_courses'); ?>">Student Courses</a></li>
						<li><a href="<?php echo base_url('Boots/view_students'); ?>">View Students</a></li>
					</ul>
				</div>
			</nav>
	</div>
		<div class="col-md-12 contents">
			<p class="lead">View Student</p>
			<div class="col-md-10">
			</div>
			<div class="col-md-2">
				<div class="">
					<a href="add_student" class="btn btn-primary btn-s">New Student</a>
				</div>
			</div>
			<table class="table table-striped table-hover table-condensed table-responsive">
				<thead>
					<tr>
						<th>ID NO.</th>
						<th>LAST NAME</th>
						<th>FIRST NAME</th>
						<th>MIDDLE NAME</th>
						<th>COURSE</th>
						<th>SEX</th>
						<th>ACTION</th>
					</tr>
				</thead>
				<tbody>
				<?php
				foreach($students as $s){
					echo '	<tr>	
								<td>'.$s['idno'].'</td>
								<td>'.$s['lastname'].'</td>
								<td>'.$s['firstname'].'</td>
								<td>'.$s['middlename'].'</td>
								<td>'.$s['course'].'</td>
								<td>'.$s['sex'].'</td>
								<td>
									<a href="'.base_url('students/profile/'.$s['idno']).'">View</a> |
									<a href="'.base_url('students/edit_student'.$s['idno']).'">Edit</a> |
									<a href="'.base_url('Boots/delete_record/'.$s['idno'].'').'" class="delete">Delete</a>
								</td>
							</tr>
							';
				
				}
				?>
				</tbody>
			</table>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 text-center footer">
			Copyright &copy; 2017.
		</div>
	</div>
</div>





