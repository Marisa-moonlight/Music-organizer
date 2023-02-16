<!-- Header -->
<?php  include 'header.php'?>
<style>
* {
  box-sizing: border-box;
  margin: 0;
}

body{
  background-image: url(images/music.jpg);
}

.title{
  padding-top: 14px;
  border: #4E545C solid 5px;
  text-align: center;
  background-color: #8D9797;
  height: 80px;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 80%;
  margin-top: 20px;
  border: 1px solid #4E545C;
  background-color: white;
}

 td, th {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even){
  background-color: #f2f2f2;
}

thead {
background-color: cyan;
}

.back{
  margin-top: 50px;
  background-color: purple;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    border-radius: 10px;
    margin-left: 720px;
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

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

</style>
<div>
<h1 class="title" >Songs Organizer</h1>
<div class="topnav">
<a class="active" href="create.php"> Add a new Song</a>
<a href="http://localhost:8081/music-table/index.php">Index</a>
<a href="./home.php">Home</a>
<a href="./info.php">Website Info</a>
</div>
  <div>
    <table>
      <thead>
        <tr>
            <th  scope="col">ID</th>
            <th  scope="col">Title</th>
            <th  scope="col">Genre</th>
            <th  scope="col">Lyricist</th>
            <th  scope="col">Rating</th>
        </tr>  
      </thead>
        <tbody>
          <tr>
               
            <?php
              //  first we check using 'isset() function if the variable is set or not'
              //Processing form data when form is submitted
              if (isset($_GET['song_id'])) {
                  $song_id = $_GET['song_id']; 

                  // SQL query to fetch the data where id=$userid & storing data in view_user 
                  $query="SELECT * FROM songs WHERE id = {$song_id} ";  
                  $view_songs= mysqli_query($conn, $query);            

                  while($row = mysqli_fetch_assoc($view_songs))
                  {              
                    $id=   $row['id'];    
                    $title = $row['title'];        
                    $genre = $row['genre'];         
                    $lyricist = $row['lyricist'];  
                    $rating = $row['rating'];     

                        echo "<tr >";
                        echo " <th scope='row' >{$id}</th>";
                        echo " <td > {$title}</td>";
                        echo " <td > {$genre}</td>";
                        echo " <td >{$lyricist} </td>";
                        echo " <td >{$rating} </td>"; 
                        echo " </tr> ";
                  }
                }
            ?>
          </tr>  
        </tbody>
    </table>
  </div>

   <!-- a BACK Button to go to pervious page -->
  <div>
    <a href="home.php" class="back"> Back </a>
  <div>

<!-- Footer -->
<?php include "footer.php" ?>