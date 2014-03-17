<!doctype html> 
<html>
<head>
  <meta charset="utf-8" />
      <title>Discuss by Zaffre</title>
      <link rel="stylesheet" type="css" href="main.css">
      <link rel="stylesheet" type="css" href="foundation-5.2.1/css/foundation.css">
      <link rel="stylesheet" type="css" href="foundation-5.2.1/css/normalize.css">

      <link href="tabmenu/tabmenu.css" rel="stylesheet" type="text/css" />
      <script src="tabmenu/tabmenu.js" type="text/javascript"></script>

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
        <h3>There are <?php echo rand(0,80);?> students online</h3>
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
        <div class="large-12 columns">
        <!-- Feed Entry -->
          <div class="row">
          <div data-alert class="large-12 alert-box warning radius columns">[unresolved] <strong>Joey asked:</strong></div>
            <div class="large-2 columns small-3"><img src="pending.png" /></div>
            <div class="large-10 columns">
              <p> Why does it make sense to put dividers on long lists of menu items that have related sub-items? </p>
              <ul class="inline-list">
                <li class="left"><a href="question_comments.php?question='Why does it make sense to put dividers on long lists of menu items that have related sub-items?'&status=pending">
                  Answer Question 
                </a></li>
                <li class="left"><a href="">Promote</a></li>    
              </ul>

            </div>
          </div>
        <!-- End Feed Entry -->
   <hr />
    </div>
 <!-- New question enters queue here -->
       <?php if(isset($_POST["new_question"])){ ?>
        <div class="large-12 columns">
        <div class="row">
        <div data-alert class="large-12 alert-box warning radius columns">[unresolved] <strong>YOU asked:</strong> </div>
          <div class="large-12 columns">
            <div class="question">
              <div class="row">
                <div class="large-2 columns small-3">
                  <img src="pending.png" />
                </div>
                <div class="large-10 columns">
                    <?php echo $_POST["new_question"];?>
                  </p>
                  <ul class="inline-list">
                    <li class="left"><a href=<?php echo "question_comments.php?question=".$_POST["new_question"]."&status=pending";?>>Answer Question</a></li>
                    <li class="left"><a href="">Promote</a></li>
                  </ul>
                  
                </div>
              </div>
            </div>
          
          </div>

        </div>
        <hr/></div>
      <?php }?>
 <!--  -->
    <div class="large-12 columns">
      <!-- Feed Entry -->
      <div class="row">
      <div data-alert class="large-12 alert-box radius columns"> [answered by student] <strong>Kaley asked:</strong></div>

        <div class="large-2 columns small-3"><img src="student_solved.png" /></div>
        <div class="large-10 columns">
          <p>Are there any instances when recall is better than recognition?</p>
          <ul class="inline-list">
            <li class="left"><a href="question_comments.php?question='Are there any instances when recall is better than recognition?'&status=student_solved">Answers (2)</a></li>
            <li class="left"><a href="">Promote</a></li>
          </ul>
        </div>
      </div>
      <!-- End Feed Entry -->
 
      <hr />
      </div>
 
      <div class="large-12 columns">
      <!-- Feed Entry -->
      <div class="row">
        <div data-alert class="large-12 alert-box radius columns"> [answered by student] <strong>Jon asked:</strong></div>
        <div class="large-2 columns small-3"><img src="student_solved.png" /></div>
        <div class="large-10 columns">
          <p>Is triangulation always useful for gathering data?</p>
          <ul class="inline-list">
            <li class="left"><a href="question_comments.php?question='Is triangulation always useful for gathering data?'&status=pending">Answers (4)</a></li>
            <li class="left"><a href="">Promote</a></li>
          </ul>
        </div>
      </div>
      <!-- End Feed Entry -->
      <hr /></div>
      <div class="large-12 columns">
      <!-- Feed Entry -->
      <div class="row">
          <div data-alert class="large-12 alert-box success radius columns"> [marked resolved by professor] <strong>Marley asked:</strong></div>
        <div class="large-2 columns small-3"><img src="professor_solved.png" /></div>
        <div class="large-10 columns">
          <p>Confused about what role the designer plays with respect to the user in Contextual design</p>
          <ul class="inline-list">
            <li class="left"><a href="question_comments.php?question='Confused about what role the designer plays with respect to the user in Contextual design'&status=professor_solved">Answers (2)</a></li>
            <li class="left"><a href="">Promote</a></li>
          </ul>
        </div>
      </div>
      <!-- End Feed Entry -->
 
      <hr /></div>
      <div class="large-12 columns">
      <!-- Feed Entry -->
      <div class="row">
      <div data-alert class="large-12 alert-box success radius columns"> [marked resolved by professor] <strong>Steve asked:</strong></div>

        <div class="large-2 columns small-3"><img src="professor_solved.png" /></div>
        <div class="large-10 columns">
          <p>Am I the only who doesn't know what WIMP is?</p>
          <ul class="inline-list">
            <li class="left"><a href="question_comments.php?question='Am I the only who doesn't know what WIMP is?'&status=pending">Answers (3)</a></li>
            <li class="left"><a href="">Promote</a></li>
          </ul>
        </div>
      </div>
      <!-- End Feed Entry -->
 
      <hr /></div>
    </section>

  <a class="exit-off-canvas"></a>

</div>
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
    
 
 
 
  <!-- Footer -->
 
  <footer class="row">
    <div class="large-12 columns">
      <hr />
      <div class="row">
        <div class="large-5 columns">
          <p>© Copyright Team Zaffre</p>
        </div>
      </div>
    </div>
  </footer>
</body>   
</html> 