<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>Arthur Carson Portfolio</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
  <div class="left-side">
  <header class="headerContainer">
    <img class="headerContent headerImage" src="./media/ArthurCarson.jpg" alt="Arthur Carson">
    <div class="headerBox">
        <h1 class="headerContent headerName">Arthur Carson</h1>
        <h3 class="headerContent1">Full Stack </h3>
        <h3 class="headerContent2">Software Developer</h3>
      </div>
  </header>
</div>

<div class="right-side">
  <div class="tablink-container">
    <button class="tablink" onclick="openPage('Projects', this, 'red')"id="defaultOpen">Projects</button>
    <button class="tablink" onclick="openPage('Resume', this, 'green')" >Resume</button>
    <button class="tablink" onclick="openPage('About', this, 'orange')">About</button>
  </div>
<div id="About" class="tabcontent">
  <div class="interest-picture-container">
    <?php
    include('./about.php');
    ?>
  </div>
</div>

<div id="Projects" class="tabcontent">
    <?php
      include('./projects.php');
    ?>
</div>

<div id="Resume" class="tabcontent">
    <?php
      include('./resume.php')
    ?>
</div>
</div>

<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<!-- carousel control -->
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("interests-pics");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>