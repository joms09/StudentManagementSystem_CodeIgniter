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
						<li><a href="">Student Courses</a></li>
						<li><a href="">View Students</a></li>
					</ul>
				</div>
			</nav>
	</div>
		<div class="col-md-12 contents">
			<p class="lead">View Student</p>
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
									<a href="">Edit</a> |
									<a href="" class="delete">Delete</a>
								</td>
							</tr>
							';
				}
				?>
				 </tbody>
			</table>
			<div class="">
				<a href="Boots/add_student" class="btn btn-primary btn-s">New Student</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 text-center footer">
			Copyright &copy; 2017. Star Na Si Van Damme Stallone.
		</div>
	</div>
</div>





