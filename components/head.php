<head>
	<!-- Required meta tags -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="icon" href="images/logo.png" type="image/png" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">

	<?php echo "<title>". $title . "</title>";   ?>
</head>
	<?php  

	if ($GLOBALS['title']) {
		$title = $GLOBALS['title'];
	}
	else {
		$GLOBALS['title'] = "Welcome to PHP Hospital";
	}

	?>

