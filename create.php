<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create Success</title>
    <link rel="stylesheet" href="./additionaldesign.css">
  </head>
  <body>
    <h1 id="notice">Remember your ID in order to manage your information</h1><hr><br>
    <?php
      $conn = mysqli_connect('localhost', 'root', '111111', 'phonebook');

      // Check duplication
      $ID = $_POST['id'];
      $result = mysqli_query($conn, "SELECT * FROM user WHERE ID = '$ID'");
      $number_of_rows = mysqli_num_rows($result);
      if($number_of_rows > 0){ // the data which has same ID exists
        echo("There is already existing ID<br><br> Try Agian!<br>");
      }

      // duplication x
      else{
        $InsertSQL = "INSERT INTO user (ID, FIRSTNAME, LASTNAME, PHONE, EMAIL) VALUES
        ('{$_POST['id']}', '{$_POST['firstname']}', '{$_POST['lastname']}', '{$_POST['phone']}', '{$_POST['email']}')";
        $result = mysqli_query($conn, $InsertSQL);
        $row = mysqli_fetch_array($result);
        
        print("<p>ID : {$_POST['id']}</p>");
        print("<p>First Name : {$_POST['firstname']}</p>");
        print("<p>Last Name : {$_POST['lastname']}</p>");
        print("<p>Phone : {$_POST['phone']}</p>");
        print("<p>Email : {$_POST['email']}</p>");
      }
    ?>
    <br>
    <a href="main.php"><button type="button" name="Back" class="btn">Back</button></a>
  </body>
</html>
