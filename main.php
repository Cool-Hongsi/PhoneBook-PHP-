<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Phone Book</title>
    <link rel="stylesheet" href="./design.css">
  </head>
  <body>

    <div id="main">

      <header id="header">
        <nav id="navbar">
          <div id="logo">
            <img src="https://farm4.staticflickr.com/3215/2430598256_f973cfa0d6_m.jpg" alt="logo">
          </div>
          <ul>
            <li><a href="#Home">Home</a></li>
            <li><a href="#About">About</a></li>
            <li><a href="#Create">Create</a></li>
            <li><a href="#Read">Read</a></li>
            <li><a href="#Update">Update</a></li>
            <li><a href="#Delete">Delete</a></li>
          </ul>
        </nav>
      </header>

      <section>

        <div id="Homebackground">
          <div id="Home">
            <h2>Welcome to Hong's Phone Book</h2>
          </div>
        </div>

        <div id="Aboutbackgrouond">
          <div id="About">
            <img src="https://farm7.staticflickr.com/6219/6995509901_3b718fcb2e_m.jpg"
            alt="phonebook" id="phonebook">
            <div id="abouttext">
              <h2>About This Application</h2><hr><br>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            </div>
          </div>
        </div>
        <div id="Createbackground">
          <div id="Create">
            <h2>Create Information</h2><hr><br>
            <form id="create" action="create.php" method="post">
              <label for="id">ID : </label>
              <input type="number" name="id" placeholder=" ID"><br><br>
              <label for="firstname">FName : </label>
              <input type="text" name="firstname" placeholder=" FirstName"><br><br>
              <label for="lastname">LName : </label>
              <input type="text" name="lastname" placeholder=" LastName"><br><br>
              <label for="phone">Phone : </label>
              <input type="text" name="phone" placeholder=" Phone Number"><br><br>
              <label for="email">Email : </label>
              <input type="email" name="email" placeholder=" Email"><br><br>
              <input type="submit" value="Create" class="btn">
            </form>
          </div>
        </div>

        <div id="Readbackground">
          <div id="Read">
            <h2>Read Information</h2><hr><br>
            <form id="read" action="read.php" method="post">
              <input type="number" name="id" placeholder=" Search ID"><br><br>
              <input type="submit" value="Read" class="btn">
            </form>
          </div>
        </div>

        <div id="Updatebackground">
          <div id="Update">
            <h2>Update Information</h2><hr><br>
            <form id="update" action="update.php" method="post">
              <label for="id">(Unmodifiable) ID : </label>
              <input type="number" name="id" placeholder=" ID"><br><br>
              <label for="firstname">FName : </label>
              <input type="text" name="firstname" placeholder=" FirstName"><br><br>
              <label for="lastname">LName : </label>
              <input type="text" name="lastname" placeholder=" LastName"><br><br>
              <label for="phone">Phone : </label>
              <input type="text" name="phone" placeholder=" Phone Number"><br><br>
              <label for="email">Email : </label>
              <input type="email" name="email" placeholder=" Email"><br><br>
              <input type="submit" value="Update" class="btn">
            </form>
          </div>
        </div>

        <div id="Deletebackground">
          <div id="Delete">
            <h2>Delete Information</h2><hr><br>
            <form id="delete" action="delete.php" method="post">
              <input type="number" name="id" placeholder=" ID"><br><br>
              <input type="submit" value="Delete" class="btn">
            </form>
          </div>
        </div>

      </section>
    </div>
  </body>
</html>
