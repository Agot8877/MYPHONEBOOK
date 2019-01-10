<?php include('assets/session.php'); ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhoneBook | Home</title>
    <link rel="stylesheet" href="Foundation/css/foundation.css">
  </head>
  <body>
<!--TopBar menu -->
<? include('assets/TopBar.php'); ?>
<!-- Table Displays the added Contacts -->
<table>
  <thead>
    <tr>
      <th width="200">Contact ID</th>
      <th width="200">First Name</th>
      <th width="200">Middle Name</th>
      <th width="200">Last Name</th>
      <th width="200">Phone Number</th>
      <th width="200">Operation</th>
    </tr>
  </thead>
  <tbody>
    <tr>
  <?php
    $user_id = $_SESSION['username'];
    $conn = mysqli_connect("localhost", "root", "", "bookphone");
      // Check connection
      if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
      } 
      $sql = "SELECT contact_id, first_name, middle_name, last_name, Phone_Number FROM Contacts where username= '$user_id'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
       // output data of each row
       while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["contact_id"]. "</td><td>" . $row["first_name"] . "</td>
        <td>". $row["middle_name"]. "</td>
        <td>". $row["last_name"]. "</td>
        <td>". $row["Phone_Number"]. "</td>";
          ?>
        <td> <a name='edit' href='Update.php?contact_id=<?php echo $row["contact_id"];?>' class='button hollow warning'>Edit</a>
        <a href='delete.php?contact_id=<?php echo $row["contact_id"];?>' class='button hollow alert'>Delete</a></td></tr>
    <?php }
    echo "</table>";
    } else { echo "0 results"; }
    $conn->close();
  ?>
</table>
  <!--Floating Button -->
    <a type="button" href="insert_contact.php" class="button hollow success"  style="position: absolute;right: 2%;bottom: 3%">Add Contacts</a>


    <script src="Foundation/js/vendor/jquery.js"></script>
    <script src="Foundation/js/vendor/what-input.js"></script>
    <script src="Foundation/js/vendor/foundation.js"></script>
    <script src="Foundation/js/app.js"></script>
  </body>
</html>
