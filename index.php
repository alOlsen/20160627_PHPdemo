<?php

echo "<h1>Hello World</h1>";

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

	<script src="js/velocity.min.js"></script>


	<script src="js/velocity.ui.js"></script>

	<script>
	$(document).ready( function(){

		$("#userInput").click( function(){
				$("#userInput").velocity("transition.expandIn");
		})
	

	})
	</script>

</head>
<body>
<form action="backend.php" method='POST'>
	<input type="text" name="userInput" id="userInput"/>
	<input type="hidden" name="datasrc" value="demo">
<input type="submit" value="submit"/>
</form>
</body>
</html>