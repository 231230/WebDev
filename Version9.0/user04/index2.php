<?php
$apiKey = "2ed56039ed0f285d29872c4700fcbf3a"; //You will need to add in the 
$cityId = "5046997"; //5046997 Shakopee City Id
$units = "imperial";//metric-Celcius  imperial-Farhenheit
if ($units == 'metric'){//Changes the $temp varaible to match 
    $temp = "F";
}
else {
    $temp = "F";
}
$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=" . $units . "&APPID=" . $apiKey;

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$data = json_decode($response);
$currentTime = time();
?>

<html lang="en">
<!--Version 3.0
        Name:Ritu Bollena
        Date Completed:1/31/20
    -->

<head>
	<link rel="icon" href="home%20favicon.jpeg" type="image/gif" sizes="16x16">
</head>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="SHS WebDev Menu Sample">

	<title>Web Dev User 04 </title>

	<!-- Bootstrap core JS -->
	<!-- These are needed to get the responsive menu to work -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="JS/SampleJS.js"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="CSS/SampleCSS.css">


	<!-- Custom styles for this template -->
	<style type="text/css">
		.menu {
			margin: 0px;
		}

		.wideMargin {
			margin: 15px;
		}

		#footer {
			font-size: 12px;
			text-align: center;
		}


		.report-container {
			border: #E0E0E0 1px solid;
			padding: 20px 40px 40px 40px;
			border-radius: 2px;
			width: 550px;
			margin: 0 auto;
		}

		.weather-icon {
			vertical-align: middle;
			margin-right: 20px;
		}

		.weather-forecast {
			color: #212121;
			font-size: 1.2em;
			font-weight: bold;
			margin: 20px 0px;
		}

		span.min-temperature {
			margin-left: 15px;
			color: #929292;
		}

		.time {
			line-height: 25px;
		}

	</style>
</head>

<body>
	<div class="menu">
		<nav class="navbar navbar-expand-md navbar-dark bg-dark">
			<a href="http://shakonet.isd720.com" class="navbar-brand">WebDev</a>
			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarCollapse">
				<div class="navbar-nav">
					<!---------------------------------- Edit These Items in your Menu ------------->
					<a href="index.html" class="nav-item nav-link active">Home</a>
					<a href="lululemon.html" class="nav-item nav-link">Lululemon</a>
					<a href="AE.html" class="nav-item nav-link" tabindex="-1">American Eagle</a>
					<a href="brandymelville.html" class="nav-item nav-link" tabindex="-1">Brandy Melville</a>
					<a href="urbanoutfitters.html" class="nav-item nav-link" tabindex="-1">Urban Outfitters</a>
					<a href="nike.html" class="nav-item nav-link" tabindex="-1">Nike</a>

					<!----------------------------------^ Edit These Items in your Menu ^ ------------->
				</div>
				<div class="navbar-nav ml-auto">
					<a href="login2.php" class="nav-item nav-link active">Login</a>
					<a href="register2.php" class="nav-item nav-link active">Register</a>
					<a href="logout2.php" class="nav-item nav-link active">Logout</a>
				</div>
			</div>
		</nav>
	</div>

	<div class="wideMargin" id="content">


		<p>

			Hi. Welcome to my website where you can find what some of my favorite stores are.
		</p>

		<div id="images">
			<img src="lululemon%20image.jpg" width="250" alt="lululemon">
			<img src="american%20eagle%20image.jpeg" width="250" alt="american eagle">
			<img src="brandy%20melville%20image2.png" width="250" alt="brandy melville">
			<img src="urban%20outfitters%20image.jpeg" width="250" alt="brandy melville">
			<img src="nike%20image.jpg" width="250" alt="nike">


		</div>

		<!-accordion jquery function-->

			<script>
				(function() {
					var link = $('link');
					$('button').click(function() {
						var $this = $(this);
						var stylesheet = $this.data('file');
						$(this).siblings('button').removeAttr('disabled');
						link.attr('href', stylesheet + '.css');
						$this.attr('disabled', 'disabled')

					});

				})();

			</script>


			<dl>
				<dt>Lululemon</dt>
				<dd>https://shop.lululemon.com/</dd>
				<dt>American Eagle</dt>
				<dd>https://www.ae.com/us/en</dd>
				<dt>Brandy Melville</dt>
				<dd>https://www.brandymelvilleusa.com/</dd>
				<dt>Urban Outfitters</dt>
				<dd>https://www.urbanoutfitters.com/</dd>
				<dt>Nike</dt>
				<dd>https://www.nike.com/</dd>
			</dl>

			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


			<script>
				(function() {

					$('dd').filter(':nth-child(n+4)').addClass('hide');

					$('dl').on('mouseenter', 'dt', function() {
						$(this)
							.next()
							.slideDown(200)
							.siblings('dd')
							.slideUp(200);
					});
				})();

			</script>

			<!---javascript 1----->

			<button onclick="myFunction()">Click me</button>

			<p id="demo"></p>

			<!---javascript 2--->

			<form>
				Choose how your experience was:
				<select id="browsers" onchange="preferedBrowser()">
					<option value="Good">Good</option>
					<option value="Okay">Okay</option>
					<option value="Bad">Bad</option>
				</select>
			</form>

	</div>

	<div class="report-container">
		<h2><?php echo $data->name; ?> Weather Status</h2>
		<div class="time">
			<div><?php echo date("l g:i a", $currentTime); ?></div>
			<div><?php echo date("jS F, Y",$currentTime); ?></div>
			<div><?php echo ucwords($data->weather[0]->description); ?></div>
		</div>
		<div class="weather-forecast">
			<img src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png" class="weather-icon" /> <?php echo $data->main->temp_max; ?>&deg;<?php echo $temp; ?><span class="min-temperature"><?php echo $data->main->temp_min; ?>&deg;<?php echo $temp; ?></span>
		</div>
		<div class="time">
			<div>Humidity: <?php echo $data->main->humidity; ?> %</div>
			<div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
		</div>
	</div>







	<div class="wideMargin" id="footer">
		<p>

			Webpage made by <a href="index.html" target="_blank">[Ritu Bollena]</a>
		</p>
	</div>
</body>

</html>
