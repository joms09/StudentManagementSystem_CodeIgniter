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
			<p class="lead">Student Profile</p>
			<div>
				<div class="form-group">
					<img src="<?php echo base_url('assets/images/koala.jpg'); ?>" alt="Picture" height="250" />
				</div>
				<div class="form-group">
					<label for="idno">ID no: <?php echo $student[0]['idno']; ?> </label>
				</div>
				<div class="form-group">
					<label for="idno">Last Name: <?php echo $student[0]['lname']; ?> </label>
				</div>
				<div class="form-group">
					<label for="idno">First Name: <?php echo $student[0]['fname']; ?> </label>
				</div>
				<div class="form-group">
					<label for="idno">Middle Name: <?php echo $student[0]['mname']; ?> </label>
				</div>
				<div class="form-group">
					<label for="idno">Course: <?php echo $student[0]['course']; ?> </label>
				</div>
				<div class="form-group">
					<label for="idno">Sex: <?php echo $student[0]['sex']; ?> </label>
				</div>
			</div>
		</div>
</div>
	<div class="row">
		<div class="col-md-12 text-center footer">
			Copyright &copy; 2017.
		</div>
	</div>
</div>