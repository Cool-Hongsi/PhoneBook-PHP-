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

      // 데이터 존재 여부 확인
      $result = mysqli_query($conn, "SELECT * FROM user WHERE ID = '$ID'");
      $number_of_rows = mysqli_num_rows($result);
      if($number_of_rows == 0){ // 같은 ID 값을 가지는 데이터가 0개다.. 데이터가 없다..
        echo("There is no existing ID<br><br> Try Agian!<br>");
      }

      // 데이터 존재 o
      else if($number_of_rows > 0){
        $UpdateSQL = "UPDATE user SET FIRSTNAME='$FName', LASTNAME='$LName',
        PHONE='$Phone', EMAIL='$Email' WHERE ID = '$ID'";
        $result = mysqli_query($conn, $UpdateSQL);
        $row = mysqli_fetch_array($result);
        // 입력 받은 값을 변수에 넣고 출력 $ID = $_POST['id']
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
