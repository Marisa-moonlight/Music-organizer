<!-- Footer -->
<?php include "header.php"?>

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
.music{
  margin-top: 10px;
}
fieldset{
  width: 500px;
  background-color: white;
}
input{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
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

</style>

<?php
   // checking if the variable is set or not and if set adding the set data value to variable userid
   if(isset($_GET['song_id']))
    {
      $songid = $_GET['song_id']; 
    }
      // SQL query to select all the data from the table where id = $userid
      $query="SELECT * FROM songs WHERE id = $songid ";
      $view_songs= mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($view_songs))
        {
          $id =$row['id'];
            $title = $row['title'];
            $genre = $row['genre'];
            $lyricist = $row['lyricist'];
            $rating = $row['rating'];
        }
 
    //Processing form data when form is submitted
    if(isset($_POST['update'])) 
    {


        
        $title = $_POST['title'];
        $genre = $_POST['genre'];
        $lyricist = $_POST['lyricist'];
        $rating = $_POST['rating'];
      
      // SQL query to update the data in user table where the id = $userid 
      $query = "UPDATE songs SET title = '{$title}' , genre = '{$genre}' , lyricist = '{$lyricist}', rating = '{$rating}' WHERE id = $songid";
      $update_song = mysqli_query($conn, $query);
      echo "<script type='text/javascript'>alert('Song data updated successfully!')</script>";
    }             
?>

<h1 class="title">Update Song Details</h1>
  <div>
    <form action="" method="post" class=music>
      <fieldset>
      <div class="form-group">
        <label for="title" >Song Title</label>
        <input type="text" name="title" class="form-control" value="<?php echo $title  ?>">
      </div>

      <div class="form-group">
        <label for="genre" >Genre</label>
        <input type="text" name="genre"  class="form-control" value="<?php echo $genre  ?>">
      </div>
        
    
      <div class="form-group">
        <label for="lyricist" >Lyricist</label>
        <input type="text" name="lyricist"  class="form-control" value="<?php echo $lyricist  ?>">
      </div>    

      <div class="form-group">
        <label for="rating" >Rating</label>
        <input type="number" name="rating"  class="form-control" value="<?php echo $rating  ?>">
      </div> 

      <div class="form-group">
         <input type="submit"  name="update" class="btn btn-primary mt-2" value="update">
      </div>
      </fieldset>
    </form>    
  </div>

    <!-- a BACK button to go to the home page -->
    <div>
      <a href="home.php" class="back"> Back </a>
    <div>

<!-- Footer -->
<?php include "footer.php" ?>