<?php
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'bookphone');

  //check connection
  if($db === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }


  if (isset($_GET['contact_id'])) {
    
    $contact_id = $_GET['contact_id'];

    $get_contact = "SELECT * FROM Contacts WHERE contact_id = '$contact_id'";

    $get_contact = mysqli_query($db, "SELECT * FROM Contacts WHERE contact_id = '$contact_id'");

    $row = mysqli_fetch_array($get_contact);
  }
?>

<?
/* Updating existing data from database */
    if(isset($_POST['update'])){
      
      $contact_id = $_POST['contact_id'];
      
      $first_name  = mysqli_real_escape_string($db, $_POST['first_name']);
      $middle_name  = mysqli_real_escape_string($db, $_POST['middle_name']);
      $last_name   = mysqli_real_escape_string($db, $_POST['last_name']);
      $cell_phone_number   = mysqli_real_escape_string($db, $_POST['cell_phone_number']);
      
      
      
      /*$sql  = "UPDATE 'Contacts' SET 'first_name'='".$first_name.'",'middle_name'='".$middle_name."','last_name'='".$last_name."', 'cell_phone_number'='".$cell_phone_number.'" WHERE 'contact_id' = '$contact_id'";
      mysqli_query($db, $sql);*/
        // mysql query to Update data
     $query = "UPDATE Contacts SET first_name='$first_name',middle_name='$middle_name',last_name='$last_name',Phone_Number= $cell_phone_number WHERE contact_id = $contact_id";
     
     $result = mysqli_query($db, $query);
     
     if($result)
     {
         echo 'Data Updated';
     }else{
         echo 'Data Not Updated';
     }
      header('location: index.php?Contacts='.$row['Contacts'].'&updated=1'); 

    }
?>
