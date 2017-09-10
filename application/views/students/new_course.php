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
		<div class="col-md-2">
		</div>
		<div class="col-md-8 contents">
			<p class="lead">Add New Course</p>
			<form role="form" class="" method="post">
				
				<div class="text-danger">
				<?php
				if( isset($errors) ){
					echo $errors;
				}
				?>
				</div>
				
				<div class="form-group">
					<label for="idno">ID No.:</label>
					<input type="text" class="form-control" id="id" name="id" />
				</div>
				<div class="form-group">
					<label for="lname">Name:</label>
					<input type="text" class="form-control" id="name" name="name" />
				</div>	
				<div class="form-group">
					<label for="fname">Description:</label>
					<input type="text" class="form-control" id="description" name="description" />
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">
						Save <span class="glyphicon glyphicon-save"></span> 
					</button>
				</div>
			</form>
	
			<hr />
			<!--
			<form role="form" class="form-horizontal">
				<div class="form-group">
					<label for="idno" class="control-label col-md-2">ID No.:</label>
					<div class="col-md-10">
						<input type="text" class="form-control" id="idno" name="idno" />
					</div>
				</div>
				<div class="form-group">
					<label for="lname" class="control-label col-md-2">Last Name:</label>
					<div class="col-md-10">
						<input type="text" class="form-control" id="lname" name="lname" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-offset-2">
						<button type="submit" class="btn btn-primary">
						Save <span class="glyphicon glyphicon-save"></span> 
						</button>				
					</div>				

				</div>
			</form>-->	
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 text-center footer">
			Copyright &copy; 2017.
		</div>
	</div>
</div>

<?php
if( isset($saved) && $saved==TRUE ){
?>
<script type="text/javascript">
	alert("The new student record was successfully saved!");
	location.href = '<?php echo base_url('Boots/view_courses'); ?>';
</script>
<?php
}

?>




