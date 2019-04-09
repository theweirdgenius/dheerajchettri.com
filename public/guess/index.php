<?php require_once('../../private/initialize.php'); ?>

<?php include (SHARED_PATH . '/header.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Dheeraj Chettri | Guess Game</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Quando" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo url_for('/guess/css/style.css'); ?>" >

</head>
<body>
  <div id="content">
	<h1 align="center"> Guess the Number </h1>
	<button id = "gameButton" class="button" style="vertical-align:middle"> <span>Play Game</span> </button>
  </div>




<?php include (SHARED_PATH . '/footer.php'); ?>









<script src="<?php echo url_for('/guess/js/main.js'); ?>"> </script>
</body>
</html>