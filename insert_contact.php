<?php 
    include('add_contacts.php');
?>
<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Contact</title>
    <link rel="stylesheet" href="Foundation/css/foundation.css">
    <link rel="stylesheet" href="Foundation/app.css">
  </head>
  <?php include('assets/TopBar.php'); ?>
  	
  
<body>
	<form method="post">
	  <div class="grid-container">
	    <div class="grid-x grid-padding-x">
	      <div class="medium-3 cell">
	        <label>Input Firstname
	          <input type="text" name="first_name" placeholder="firstname" required="">
	        </label>
	      </div>
	      <div class="medium-3 cell">
	        <label>Input Middlename
	          <input type="text" name="middle_name" placeholder="middlename" required="">
	        </label>
	      </div>
	      <div class="medium-3 cell">
	        <label>Input Last Name
	          <input type="text" name="last_name" placeholder="lastname" required="">
	        </label>
	      </div>
	      <div class="medium-3 cell expanded">
	        <label> Input Contact Number
	          <input type="number" name="cell_phone_number" placeholder="phonenumber" required="">
	        </label>
	      </div>
	    </div>
	  </div>
	  <button class="button expanded" type="submit" name="submit">Save Contact</button>
	</form>
	<!-- Scripts -->
	<script src="Foundation/js/vendor/jquery.js"></script>
    <script src="Foundation/js/vendor/what-input.js"></script>
    <script src="Foundation/js/vendor/foundation.js"></script>
    <script src="Foundation/js/app.js"></script>
</body>	
</html>