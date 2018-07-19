<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Read Success</title>
    <link rel="stylesheet" href="./additionaldesign.css">
  </head>
  <body>
    <h1 id="notice">Your Information</h1><hr><br>
    <?php
      $conn = mysqli_connect('localhost', 'root', '111111', 'phonebook');

      // Check presense of data
      $ID = $_POST['id'];
      $result = mysqli_query($conn, "SELECT * FROM user WHERE ID = '$ID'");
      $number_of_rows = mysqli_num_rows($result);
      if($number_of_rows == 0){ // the data which has same ID does not exist
        echo("There is no existing ID<br><br> Try Agian!<br>");
      }

      // presense o
      else if($number_of_rows > 0){
        $SelectSQL = "SELECT * FROM user WHERE ID = {$_POST['id']}";
        $result = mysqli_query($conn, $SelectSQL);
        $row = mysqli_fetch_array($result);
        
        echo "<p>ID : ".$row['ID'].'</p>';
        echo "<p>First Name : ".$row['FIRSTNAME'].'</p>';
        echo "<p>Last Name : ".$row['LASTNAME'].'</p>';
        echo "<p>Phone : ".$row['PHONE'].'</p>';
        echo "<p>Email : ".$row['EMAIL'].'</p>';
        echo "<p>Registration : ".$row['REGISTRATION'].'</p>';
      }
      ?>
      <br>
      <a href="main.php"><button type="button" name="Back" class="btn">Back</button></a>
  </body>
</html>
