<!doctype html> 
<html>
<head>
  <meta charset="utf-8" />
      <title>Discuss by Zaffre</title>
      <link rel="stylesheet" type="css" href="main.css">
      <link rel="stylesheet" type="css" href="foundation-5.2.1/css/foundation.css">
      <link rel="stylesheet" type="css" href="foundation-5.2.1/css/normalize.css">

</head>
<body>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="main.js"></script>
      <script src="foundation-4.3.2/js/vendor/jquery.js"></script>
      <script src="foundation-4.3.2/js/foundation.min.js"></script>


    <script>
      $(document).foundation();

    </script>
    <!-- Main Feed -->
    <!-- Navigation -->

<?php
  $host = "localhost";
  $user = "root";
  $pass = "password";
  $directory = "zaffre";

  $mysqli = new mysqli($host, $user, $pass, $directory);
    ?>

    <nav class="top-bar">
  <ul class="title-area">
    <!-- Title Area -->
    <li class="name">
      <h1><a href="feed.php"><img id="tiny"src="logowhite.gif"></a></h1>
    </li>
    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Left Nav Section -->
    <ul class="left">
      <li class="divider"></li>
      <li class="active"><a href="#">EECE 418</a></li>
      <li class="divider"></li>
      <li><a href="#">EECE 527</a></li>
      <li class="divider"></li>
      <li><a href="#">Add a class +</a></li>
      <li class="divider"></li>
    </ul>

    <!-- Right Nav Section -->
    <ul class="right">
      <li class="divider hide-for-small"></li>
      <li><a href="index.html">Logout</a>

      </li>
        
    </ul>
  </section>
</nav>


    <br />

<?php if(isset($_POST["new_question"])){

  $query = $mysqli->real_escape_string($_POST["new_question"]);

  $new = "INSERT INTO post (comment) VALUES ('$query') ";
  mysqli_query($mysqli,$new); ?>

    <div data-alert class="alert-box info radius"> <?php

  echo "Your question has been posted <a href='#' class='close'>&times;</a>";
 } ?>
</div>
      <div class="large-12 columns">
      <div class="row">
        <form action="feed.php" method="post">
          <div class="row">
            <div class="small-10 columns">
              <input type="text" name="new_question" placeholder="New Question"></input>
            </div>
            <div class="small-2 columns">
              <input type="submit" class="button postfix" value="Go"/>
            </div>
            </div>
          </div>
        </form>
      </div>
        
 <!-- New question enters queue here -->

<?php
  $select = "SELECT * from post";
  $return = mysqli_query($mysqli, $select);

  while($row = mysqli_fetch_row($return)) { 
    $files[] = $row;

  }
  arsort($files);
  foreach ($files as $key => $row) { ?>

  <div class="large-12 columns">
        <div class="row">
        <?php if ($row[2] == 0) { ?>
        <div data-alert class="large-12 alert-box warning radius columns">
            <ul class="right">
              <a id="count" href="promote.php?val= <?php echo $row[3]; ?>" ><img id="tiny" src= "fi-arrow-up.svg" /> Promote (<?php echo($row[0]); ?>)</a>
            </ul>
            <ul class="left">
              <p><strong> <?php 
              if (strlen($row[1]) < 15) {
                echo $row[1];
              }
              else {
                echo substr($row[1], 0, 15) . "...";
              }
              ?> 
              </strong> [answered by student]</p>
            </ul>
        </div>
        <?php } else if ($row[2] == 1) { ?>
        <div data-alert class="large-12 alert-box radius columns">
            <ul class="right">
              <a id="count" href="promote.php?val= <?php echo $row[3]; ?>"><img id="tiny" src= "fi-arrow-up.svg" /> Promote (<?php echo($row[0]); ?>)</a>
            </ul>
            <ul class="left">
              <p>[answered by student]</p>
            </ul>
        </div>
        <?php } else { ?>
        <div data-alert class="large-12 alert-box success radius columns">
            <ul class="right">
              <a id="count" href="promote.php?val= <?php echo $row[3]; ?>"><img id="tiny" src= "fi-arrow-up.svg" /> Promote (<?php echo($row[0]); ?>)</a>
            </ul>
            <ul class="left">
              <p>[marked resolved by professor]</p>
            </ul>
        </div>
        <?php } ?>

        
          <div class="large-12 columns">
            <div class="question">
              <div class="row">
                <div class="large-2 columns small-3">
                  <?php if ($row[2] == 0) { ?>
                  <img src="pending.png" />
                  <?php } else if ($row[2] == 1) { ?>
                  <img src="student_solved.png" />
                  <?php } else { ?>
                  <img src="professor_solved.png" />
                  <?php } ?>
                </div>
                <div class="large-10 columns">
                  <strong> Someone asked:</strong>
                    <?php echo $row[1];?>
                  </p>
                  <ul class="inline-list">
                    <li class="left"><a href="#" data-reveal-id="comments" data-reveal>Answer Question</a></li>
                  </ul>
                  
                </div>
              </div>
            </div>
          
          </div>

        </div>
        <hr/></div>
  <?php }?>

  <a class="exit-off-canvas"></a>

</div>
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->

<div id="comments" class="reveal-modal large" data-reveal>
          <form action="#" method="post">
          <br />    
            <textarea placeholder="Type your response here"></textarea>
            <input type="submit" class="button postfix" value="Answer"/>          
            </form>
 
      <a class="close-reveal-modal">&#215;</a>
     </div>
 
 
 
  <!-- Footer -->
 
  <footer class="row">
    <div class="large-12 columns">
      <div class="row">
        <div class="large-5 columns">
          <p>© Copyright Team Zaffre</p>
        </div>
      </div>
    </div>
  </footer>
</body>   
</html> 