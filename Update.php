<?php 
    include('edit.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="x-ua-compatible" content="ie=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Update Contact</title>
				<link rel="stylesheet" href="Foundation/css/foundation.css">
			    <link rel="stylesheet" href="Foundation/app.css">
	</head>
	<?php include('assets/TopBar.php'); ?>
<body>
	<form action="" method="post">
	  <div class="grid-container">
	    <div class="grid-x grid-padding-x">
	      <div class="medium-3 cell">
	        <label>Update Firstname
	          <input type="text" name="first_name" value="<?php echo $row['first_name']; ?>" placeholder="firstname">
	        </label>
	      </div>
	      <div class="medium-3 cell">
	        <label>Update Middlename
	          <input type="text" name="middle_name" value="<?php echo $row['middle_name']; ?>" placeholder="middlename">
	        </label>
	      </div>
	      <div class="medium-3 cell">
	        <label>Update Last Name
	          <input type="text" name="last_name" value="<?php echo $row['last_name']; ?>" placeholder="lastname">
	        </label>
	      </div>
	      <div class="medium-3 cell expanded">
	        <label> Update Contact Number
	          <input type="number" name="cell_phone_number" value="<?php echo $row['Phone_Number']; ?>" placeholder="phonenumber">
	        </label>
	      </div>
	    </div>
	  </div>
	  <input type="hidden" name="contact_id" value="<?php echo $row['contact_id'];?>">
	  <button class="button expanded" type="submit" name="update">Update Contact</button>
	</form>
		<!-- Scripts -->
		<script src="Foundation/js/vendor/jquery.js"></script>
	    <script src="Foundation/js/vendor/what-input.js"></script>
	    <script src="Foundation/js/vendor/foundation.js"></script>
	    <script src="Foundation/js/app.js"></script>
</body>		
</html>