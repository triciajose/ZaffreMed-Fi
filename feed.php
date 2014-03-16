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
              <textarea name="new_question" placeholder="New Question"></textarea>
            </div>
            <div class="small-2 columns">
              <input type="submit" class="button postfix" value="Go"/>
            </div>
          </div>
        </form>
      </div>
        <div class="large-12 columns">
        <!-- Feed Entry -->
          <div class="row">
          <div data-alert class="large-12 alert-box warning radius columns"><strong>Question 1</strong> [unresolved]</div>
            <div class="large-2 columns small-3"><img src="pending.png" /></div>
            <div class="large-10 columns">
              <p> Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong.</p>
              <ul class="inline-list">
                <li class="left"><a href="question_comments.php?question='Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong.'&status=pending">
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
        <div data-alert class="large-12 alert-box warning radius columns"><strong>New Question</strong> [unresolved]</div>
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
      <div data-alert class="large-12 alert-box radius columns"><strong>Question 2</strong> [answered by student]</div>

        <div class="large-2 columns small-3"><img src="student_solved.png" /></div>
        <div class="large-10 columns">
          <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong.</p>
          <ul class="inline-list">
            <li class="left"><a href="question_comments.php?question='Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong.'&status=student_solved">Answers (2)</a></li>
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
        <div data-alert class="large-12 alert-box radius columns"><strong>Question 3</strong> [answered by student]</div>
        <div class="large-2 columns small-3"><img src="student_solved.png" /></div>
        <div class="large-10 columns">
          <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong.</p>
          <ul class="inline-list">
            <li class="left"><a href="question_comments.php?question='Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong.'&status=pending">Answers (4)</a></li>
            <li class="left"><a href="">Promote</a></li>
          </ul>
        </div>
      </div>
      <!-- End Feed Entry -->
      <hr /></div>
      <div class="large-12 columns">
      <!-- Feed Entry -->
      <div class="row">
          <div data-alert class="large-12 alert-box success radius columns"><strong>Question 4</strong> [marked resolved by professor]</div>
        <div class="large-2 columns small-3"><img src="professor_solved.png" /></div>
        <div class="large-10 columns">
          <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong.</p>
          <ul class="inline-list">
            <li class="left"><a href="question_comments.php?question='Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong.'&status=professor_solved">Answers (2)</a></li>
            <li class="left"><a href="">Promote</a></li>
          </ul>
        </div>
      </div>
      <!-- End Feed Entry -->
 
      <hr /></div>
      <div class="large-12 columns">
      <!-- Feed Entry -->
      <div class="row">
      <div data-alert class="large-12 alert-box success radius columns"><strong>Question 5</strong> [marked resolved by professor]</div>

        <div class="large-2 columns small-3"><img src="professor_solved.png" /></div>
        <div class="large-10 columns">
          <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong.</p>
          <ul class="inline-list">
            <li class="left"><a href="question_comments.php?question='Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong.'&status=pending">Answers (3)</a></li>
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
        <div class="large-7 columns">
          <ul class="inline-list right">
            <li><a href="#">Section 1</a></li>
            <li><a href="#">Section 2</a></li>
            <li><a href="#">Section 3</a></li>
            <li><a href="#">Section 4</a></li>
            <li><a href="#">Section 5</a></li>
            <li><a href="#">Section 6</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</body>   
</html> 