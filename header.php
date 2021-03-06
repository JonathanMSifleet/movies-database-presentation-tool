<?php

set_time_limit(6000);

require_once "helper.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/mystyle.css">
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/grid.css">
    <link rel="stylesheet" type="text/css" href="css/searchbar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Barlow&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap: -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js"></script>

	<?php
	if (contains('search_movie.php', $_SERVER['REQUEST_URI'])) {
		echo "<script src='js/sliderValues.js'></script>";
		echo "<script src='js/searchMovie.js''></script>";
	}
	?>

    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</head>
<h1>Movie Database Presentation Tool</h1>

<?php
if (contains("search_movie.php", $_SERVER['REQUEST_URI'])) {
	$_SESSION['page'] = "searchMovie";
} else {
	$_SESSION['page'] = "";
}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbar" style="<?php if ($_SESSION['page'] == "searchMovie") {
	echo "margin-left: 12vw; width: 88vw;";
} ?>">
    <a class="navbar-brand" href="home.php">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="search_movie.php">Search database</a>
            </li>
        </ul>
    </div>
</nav>