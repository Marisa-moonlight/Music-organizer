<style>
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

<p>This website is used for organizing and editing your favorite music play
        list. This website uses a PHP system that allows the user to interact with
        the music organizing system, from editing to deleting to viewing your
        listed music items. When you first start the website you start by
        pressing the let's go button in order to get started. Next, you press the
        button that says add music, there you will, be able to type in the title of
        you song you want add, next type in the genre, then author of the song,
        then last your rating on the song you typed in. Then press the submit
        button, then repeat again to add another song. Once your done adding
        your songs you can press the back button to go back to your music list
        and see the songs you've added. If you made a mistake when adding in
        one of your songs, you can press the edit button to edit the title, genre,
        author, and rating. If you want to view a song you can press the view
        button to view the song you've added to the list. If you want to delete a
        song, you can press the delete button to delete the song off your music
        list.</p>