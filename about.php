<?php
  $pictures = array(
    "../media/interests/apex.jpeg",
    "../media/interests/burningwhite.jpg",
    "../media/interests/coffee.jpeg",
    "../media/interests/cooking1.jpeg",
    "../media/interests/dance.jpg",
    "../media/interests/harrysally.jpg",
    "../media/interests/instantpot.jpeg",
    "../media/interests/johnwick3.jpg",
    "../media/interests/liverpool.jpg",
    "../media/interests/notw.jpg",
    "../media/interests/overwatch.jpeg",
    "../media/interests/plants.jpeg",
    "../media/interests/pulpfiction.jpg",
    "../media/interests/scottpilgrim.jpeg",
    "../media/interests/startrek.jpg",
    "../media/interests/supernatural.jpeg",
    "../media/interests/wheel13.jpg",
    "../media/interests/xfiles.jpg"
  );
  foreach ($pictures as &$interest) {
    echo "<img src=$interest class='interests-pics w3-animate-fading' width='auto' height='500'/>";
  }
?>





