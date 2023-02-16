<!-- Header -->
<?php include "header.php" ?>

<style>
* {
  box-sizing: border-box;
  margin: 0;
}

body{
  background-image: url(images/music.jpg);
  background-repeat: no-repeat;
  background-size: cover;
}
.container{
    text-align: center;
}
.submit{
    background-color: cyan;
      padding: 15px 25px;
      font-size: 24px;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      border: none;
      border-radius: 15px;
      cursor: pointer;
      border-radius: 10px;
      box-shadow: 0 9px #999;
      margin-bottom: 25px; 
}
.submit:hover {
background-color: darkcyan;  
}
.submit:active {
  background-color: darkcyan;
  box-shadow: 0 5px #777;
  transform: translateY(4px);
}
.container1{
    margin-top: 320px;
}
.link{
  color: white;
  text-align: center;
}
.link1{
    background-color: gold;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      width: 300px;
      height: 50px;
}
.welcome{
  color: white;
}
.description{
  color: white;
}
</style>

<!-- body -->
<div class="container">
    <h1 class="welcome"> Welcome, Lets Create a PHP CRUD Music Organizer!</h1>
        <p class="description">
            We are going to use PHP and MySQL to create a CRUD Music Organizer (Create, Read, Update, Delete) Application.
        </p>
  <div class="container1">
    <form action="home.php" method="post">
        <div >
            <input type="submit" class="submit" value="LETS DO IT!">
        </div>
    </form>
  </div>
</div>

<!-- Footer -->
<?php include "footer.php" ?>