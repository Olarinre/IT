<!doctype html>
<html>
<head>
	<link rel = "stylsheet" type = "text/css" href ="trialstylesheet.css">
	<title>
		everything on thio page is done by myself.
	</title>

<meta charset = "utf-8">
	
</head>
<body>
	<h1 align ="center"> Simple form processing, retrieval from database</h1>
	<div class ="form">
	<fieldset>
	<legend style = "font-variant:small-caps">Application form</legend>
	<form name ="application form" method ="post" >
	<label for ="firstname">Firstname</label><br> <input type ="text" name ="firstname" placeholder="firstname" maxlength="50"><br>
	<label for ="othername">Othername</label><br> <input type ="text" name ="othername" placeholder="othername" maxlength="50"><br>
	<label for ="surname">Surname</label><br> <input type ="text" name ="surname" placeholder="surname" maxlength="50"><br>
	<label for ="email">Email</label><br> <input type ="email" name ="email" placeholder="youremail@example.ccom" maxlength="50"><br>
	<label for ="sex">Sex</label> <br> <input type ="radio" name ="sex" value = "m" >m <input type ="radio" name ="sex" value ="f">f<br>
	<input type ="submit" name ="submit">


	
		




	</form>

		
	</fieldset>
</div>
<?php include "trial.php" ?>
<style>
	<?php
	include "trialstylesheet.css"
	?>
</style>



	
</body>
</html>