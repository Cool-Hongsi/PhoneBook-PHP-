<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Delete Success</title>
    <link rel="stylesheet" href="./additionaldesign.css">
  </head>
  <body>
    <h1 id="notice">Delete Information</h1><hr><br>
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
        $DeleteSQL = "DELETE FROM user WHERE ID = {$_POST['id']}";
        $result = mysqli_query($conn, $DeleteSQL);
        $row = mysqli_fetch_array($result);

        print("<p>ID : {$_POST['id']} (Deleted Successfully)</p>");
      }
      ?>
      <br>
      <a href="main.php"><button type="button" name="Back" class="btn">Back</button></a>
  </body>
</html>
