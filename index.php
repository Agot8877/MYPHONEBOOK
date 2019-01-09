<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhoneBook | Home</title>
    <link rel="stylesheet" href="Foundation/css/foundation.css">
    <link rel="stylesheet" href="Foundation/app.css">
  </head>
  <body>
<!--TopBar menu -->
<div class="grid x"> 
  <!--Menu Text Phonebook -->
  <div class="top-bar" id="responsive-menu">
    <div class="top-bar-left">
      <ul class="dropdown menu" data-dropdown-menu>
        <li class="menu-text">PhoneBook</li>
          <ul class="menu">
            <!--Search  -->
            
            <li><form action="search.php" method="GET">
                    <input type="text" name="query" />
                    <input type="submit" value="Search" />
                </form>
            </li>
          </ul>
      </ul>
    </div>
    <!--Username Display -->
    <div class="top-bar-right">
      <ul class="menu">
        <li><?php  if (isset($_SESSION['username'])) : ?>
          <p style="color: black;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        </li>
        <!--Logout Button -->
        <li><a class="alert button hollow" type="button" href="index.php?logout='1'" style="color: black; border-radius:10px; ">logout</a>
          <?php endif ?>
        </li>
      </ul>
    </div>
  </div>
</div>
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
    $conn = mysqli_connect("localhost", "root", "", "bookphone");
      // Check connection
      if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
      } 
      $sql = "SELECT contact_id, first_name, middle_name, last_name, Phone_Number FROM Contacts";
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
