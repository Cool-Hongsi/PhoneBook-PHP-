<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update Success</title>
    <link rel="stylesheet" href="./additionaldesign.css">
  </head>
  <body>
    <h1 id="notice">Your New Information</h1><hr><br>
    <?php
      $conn = mysqli_connect('localhost', 'root', '111111', 'phonebook');

      $ID = $_POST['id'];
      $FName = $_POST['firstname'];
      $LName = $_POST['lastname'];
      $Phone = $_POST['phone'];
      $Email = $_POST['email'];

      // Check presense of data
      $result = mysqli_query($conn, "SELECT * FROM user WHERE ID = '$ID'");
      $number_of_rows = mysqli_num_rows($result);
      if($number_of_rows == 0){ // the data which has same ID does not exist
        echo("There is no existing ID<br><br> Try Agian!<br>");
      }

      // presense o
      else if($number_of_rows > 0){
        $UpdateSQL = "UPDATE user SET FIRSTNAME='$FName', LASTNAME='$LName',
        PHONE='$Phone', EMAIL='$Email' WHERE ID = '$ID'";
        $result = mysqli_query($conn, $UpdateSQL);
        $row = mysqli_fetch_array($result);
        
        echo "<p>(Unmodifiable) ID : ".$ID.'</p>';
        echo "<p>First Name : ".$FName.'</p>';
        echo "<p>Last Name : ".$LName.'</p>';
        echo "<p>Phone : ".$Phone.'</p>';
        echo "<p>Email : ".$Email.'</p>';
      }
      ?>
      <br>
      <a href="main.php"><button type="button" name="Update" class="btn">Update</button></a>
  </body>
</html>
