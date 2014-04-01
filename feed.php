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
  <script src="foundation-5.2.1/js/vendor/jquery.js"></script>
  <script src="foundation-5.2.1/js/foundation.min.js"></script>


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
    <div class="off-canvas-wrap">
  <div class="inner-wrap">
<!--     <div class="sticky">
 -->    <nav class="tab-bar">
      <section class="left-small">
        <a class="left-off-canvas-toggle menu-icon" ><span></span></a>
      </section>

      <section class="middle tab-bar-section">
        <h1 class="title"> Welcome, <?php if(isset($_POST["username"])){ echo $_POST["username"];} ?> </h1>
      </section>
      <section class="middle tab-bar-section center">
      <!-- <h3>There are <?php echo rand(0,80);?> students online</h3> -->
      </section>

      <section class="right">
        <strong>Current Class:</strong> EECE 418
      </section>
    </nav>
<!--     </div>
 -->
    <aside class="left-off-canvas-menu">
      <ul class="off-canvas-list">
        <li><label>My Classes</label></li>
        <li><a href="#">EECE 418</a></li>
        <li><a href="#">NAPS 425</a></li>
        <li><a href="#">NOMS 300</a></li>
        <li><label>Settings</label></li>
        <li><a href="#">Add a class</a></li>
        <li><a href="#">Edit profile</a></li>
        <li><a href="#">Logout</a></li>


      </ul>
    </aside>
    <section class="main-section">
      <div data-alert class="alert-box info radius large-12 center">
        <h7>There are <?php echo rand(0,80);?> students online</h7>
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

 <?php if(isset($_POST["new_question"])){

  $query = $mysqli->real_escape_string($_POST["new_question"]);

  $new = "INSERT INTO post (comment) VALUES ('$query') ";
  mysqli_query($mysqli,$new);
 } ?>


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
              <p>[answered by student]</p>
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
                    <li class="left"><a href="<?php echo "question_comments.php?question=".$row[1]."&status=pending";?>">Answer Question</a></li>
                  </ul>
                  
                </div>
              </div>
            </div>
          
          </div>

        </div>
        <hr/></div>
  <?php }?>
    </section>

  <a class="exit-off-canvas"></a>

</div>
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
    
 
 
 
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