<!-- Header -->
<?php  include "header.php" ?>
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
  if(isset($_POST['create']))
    {
        
        $title = $_POST['title'];
        $genre = $_POST['genre'];
        $lyricist = $_POST['lyricist'];
        $rating = $_POST['rating'];
      
        // SQL query to insert user data into the users table
        $query= "INSERT INTO songs(title, genre, lyricist, rating) VALUES('{$title}','{$genre}','{$lyricist}','{$rating}')";
        $add_songs = mysqli_query($conn,$query);
      
        // displaying proper message for the user to see whether the query executed perfectly or not 
          if (!$add_songs) {
              echo "something went wrong ". mysqli_error($conn);
          }

          else { echo "<script type='text/javascript'>alert('Song added successfully!')</script>";
              }         
    }
?>

<h1 class="title">Add Song details </h1>
  <div>
    <form action="" method="post" class="music">
      <fieldset>
      <div class="form-group">
        <label for="title">Song Title</label>
        <input type="text" name="title"  class="form-control">
      </div>

      <div class="form-group">
        <label for="genre" class="form-label">Genre</label>
        <input type="text" name="genre"  class="form-control">
      </div>   

      <div class="form-group">
        <label for="lyricist" class="form-label">Lyricist</label>
        <input type="text" name="lyricist"  class="form-control">
      </div> 

      <div class="form-group">
        <label for="rating" class="form-label">rating</label>
        <input type="number" name="rating"  class="form-control">
      </div> 

      <div class="form-group">
        <input type="submit"  name="create" class="btn btn-primary mt-2" value="submit">
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