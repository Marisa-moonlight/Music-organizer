<!-- Footer -->
<?php  include "header.php" ?>
<style>
.delete{
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 10px;
    float: right;
}
</style>
<?php 
     if(isset($_GET['delete']))
     {
         $song_id= $_GET['delete'];

         // SQL query to delete data from user table where id = $studentid
         $query = "DELETE FROM songs WHERE id = {$song_id}"; 
         $delete_query= mysqli_query($conn, $query);
         header("Location: home.php");
     }
     


              ?>


  <!-- a BACK button to go to the home page -->
  <div>
    <a href="home.php" class="back"> Back </a>
  <div>
  <!-- Footer -->
<?php include "footer.php" ?>