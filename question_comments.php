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
		<?php if((isset($_GET["question"]) && isset($_GET["status"])) || (isset($_POST["question"]) && isset($_POST["status"]))) {?>
			<?php if(isset($_POST["status"])) $status = $_POST["status"]; else $status = $_GET["status"]?>
			<?php switch($status) {
				 case "pending": 
						echo "<img src= \"pending.png\">"; 						
					 break;
				 case "professor_solved": 
						echo "<img src= \"professor_solved.png\">"; 
					 break;
				 case "student_solved": 
						echo "<img src= \"student_solved.png\">"; 
					 break;
				 default: 
					echo "<img src=\"http://placehold.it/250x250&text=[logo]\">"; 
			 }?>
			<div class="row">
				<div class="large-12 columns">
					<h1><?php if(isset($_GET["question"])) {echo $_GET["question"];} else {echo $_POST["question"]; }?></h1>
				</div>
			</div>
			<div class="row">
				<div class="large-12 columns">
					<form action="question_comments.php" method="post">
						<input type="hidden" name="question" value=<?php if(isset($_GET["question"])) {echo $_GET["question"];} else {echo $_POST["question"]; }?>>
						<input type="hidden" name="status" value=<?php if(isset($_GET["status"])) {echo $_GET["status"];} else {echo $_POST["status"]; }?>>
						<textarea cols="50" rows="3" name="new_comment" placeholder="Type your comment here"></textarea>
						<input type="submit" value="Answer" />
					</form>
					<ul>
						<?php for($i = 0; $i <=6; $i++){?>
							<li>	
								Comment
							</li>
						<?php }?>
						<?php if(isset($_POST["new_comment"])) {?>
							<li><?php echo $_POST["new_comment"];?></li>
						<?php } ?>
					</ul>
				</div>
			</div>
		<?php }?>
		<div class="row">
			<div class="large-12 columns">
				<a href="feed.php">Back</a>
			</div>
		</div>
	</body>


</html>