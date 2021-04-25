<?php
  /// playworks project
  $playworks_media = '../media/projects/Playworks.mp4';
  $playworks_content = "
    <div class='project-content'>
    <a href='https://github.com/Real-Arthur/playworks' target='_blank'>
    <button class='project-button slide_right'>
    <h4>PlayWorks Step Challenge App</h4>
    </button>
    </a>
    <h5>Problem: How will the PlayWorks organization organize step challenge fundraisers simply and efficiently?</h5>
    <h5>Solution: Automate daily leader boards, streamline photo approval, and simplify the creation of contests and daily challenges</h5>
    <h5>Duration: Three Weeks</h5>
    <h5 class='emphasis'>Technologies Used: AWS S3, Heroku, Passport, PostgresQL, Redux.js, Axios,</h5>
    <h5 class='emphasis'>React, Node.js, Material UI, Jquery, Javascript, CSS, HTML</h5>
    <video class='sagasimg' controls>
      <source src=$playworks_media type='video/mp4' />
    </video>  
    </div>
    ";

  /// castwatch project
  $castwatch_media = '../media/projects/CastWatch.mp4';
  $castwatch_content = "
    <div class='project-content'>
    <a href='https://github.com/Real-Arthur/solo-project' target='_blank'>
    <button class='project-button slide_right'>
    <h4>Cast Watch</h4>
    </button>
    </a>
    <h5>Problem: Where have I seen that actor/actress before?</h5>
    <h5>Solution: Compare a movie's cast list to cast list of movies the user has seen</h5>
    <h5>Duration: Two Weeks</h5>
    <h5 class='emphasis'>Technologies Used: PostgresQL, Third-party APIs, Redux.js, Axios,</h5>
    <h5 class='emphasis'> React, Node.js, Material UI, Jquery, Javascript, CSS, HTML</h5>
    <video class='sagasimg' controls>
      <source src=$castwatch_media type='video/mp4'/>
    </video>
    </div>
    ";

  /// anygood project
  $anygood_media = '../media/projects/anygood.mp4';
  $anygood_content = "
    <div class='project-content'>
      <a href='https://github.com/Real-Arthur/any-good-backend' target='_blank'>
      <button class='project-button slide_right'>
      <h4>Any Good?</h4>
      </button>
      </a>
      <h5>Problem: Is that actor/actress any good?</h5>
      <h5>Solution: Average the user scores of everything the person has been involved in.</h5>
      <h5>Make judgments based on the average scores.</h5>
      <h5>Duration: One Week</h5>
      <h5 class='emphasis'>Technologies Used: Python, Flask, Third-party API, Heroku,</h5>
      <h5 class='emphasis'>React, Material UI, Javascript, CSS, HTML</h5>
      <video class='sagasimg' controls>
        <source src=$anygood_media type='video/mp4' />
      </video> 
    </div>
  ";

  /// moviesagas project
  $moviesagas_media = '../media/projects/MovieSagas.jpg';
  $moviesagas_content = "
  <div class='project-content'>
    <a href='https://github.com/Real-Arthur/movie-sagas' target='_blank'>
    <button class='project-button slide_right'>
    <h4>Movie Gallery</h4>
    </button>
    </a>
    <h6>A movie library that displays a movie poster, title, description, </h6>
    <h6>and a list of genres for movies in a database.</h6> 
    <h6>Allows users to edit and add movies.</h6>
    <h6>Duration: Weekend Project</h6>
    <h6 class='emphasis'>Technologies: Javascript, React, Redux, Express, Node.js, Material-UI, PostgreSQL</h6>
    <img class='sagasimg' src=$moviesagas_media />
  </div>
  ";

  echo $playworks_content;
  echo $castwatch_content;
  echo $anygood_content;
  echo $moviesagas_content;
?>
