<?php include "process_form.php" ?>

<?php create(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
<div class="container">
	
	<div class="col-sm-6">
		<h1 class="text-center">Form</h1>
		<form action="form.php" method="post">
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" class="form-control">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" class="form-control">
			</div>
			<div class="checkbox">
				<label>
					<input type="hidden" name="age" value="0">
					<input type="checkbox" name="age" value="1"> Are you 18 or older?
				</label>
			</div>
		<input class="btn btn-primary" type="submit" name="submit">
		</form>
	</div>
	
	
</div>
</body>
</html>