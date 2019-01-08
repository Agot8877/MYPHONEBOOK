<?php
$cell_phone_number_err="";

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'bookphone');

//check connection
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// adding contact
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $first_name = $_POST['first_name'];
  $middle_name = $_POST['middle_name'];
  $last_name = $_POST['last_name'];
  $cell_phone_number = $_POST["cell_phone_number"];

  if(empty(trim($cell_phone_number)) ){
            $cell_phone_number_err = "Please enter a Cell Phone Number";
        } else{
            
            $cell_phone_number = mysqli_real_escape_string($db,$cell_phone_number);

      $query = "SELECT * FROM Contacts WHERE Phone_Number='".$cell_phone_number."'";
      
            $result = mysqli_query($db,$query);
            $row = mysqli_fetch_array($result,MYsqlI_ASSOC);
            
            $count = mysqli_num_rows($result);

            if($count == 1) {
                $cell_phone_number_err = "This cellphone number is already taken.";
            }else {
                
                $cell_phone_number = trim($_POST["cell_phone_number"]);
            }
            
    }
    if(empty($cell_phone_number_err)){
            $query = "INSERT INTO Contacts (first_name,middle_name,last_name,Phone_Number) VALUES 
            ('$first_name','$middle_name','$last_name','$cell_phone_number')";

            if (mysqli_query($db, $query)) {
                header("location:insert_contact.php?contact_added=1");
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($db);
            }

        }else{
      header("location: insert_contact.php?taken_cellnum=1");
    }
        
        mysqli_close($db);

  }
?>
