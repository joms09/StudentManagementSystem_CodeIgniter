<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 header">
			<h1>Student Management System</h1>
		</div>
	</div>
	<div class="row">
		<nav class="navbar navbar-inverse">
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
			<p class="lead">View Courses</p>
			<div class="col-md-10">
			</div>
			<div class="col-md-2">
				<div class="">
					<a href="new_course" class="btn btn-primary btn-s">Add Course</a>
				</div>
			</div>
			<table class="table table-striped table-hover table-condensed table-responsive">
				<thead>
					<tr>
						<th>ID NO.</th>
						<th>NAME</th>
						<th>DESCRIPTION</th>
					</tr>
				</thead>
				<tbody>
				<?php
				foreach($courses as $s){
					echo '	<tr>	
								<td>'.$s['id'].'</td>
								<td>'.$s['name'].'</td>
								<td>'.$s['description'].'</td>
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





