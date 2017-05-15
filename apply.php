<?php
	if (isset($_POST["name"])) {
		$sumitted = 1;
		require_once "database.php";
		DB::$user = "accesfpr_bharath";
		DB::$password = "1Anand01*";
		DB::$dbName = "accesfpr_bharathacks";
		DB::insert("people", array(
			"type" => $_POST["type"],
			"name" => $_POST["name"],
			"email" => $_POST["email"],
			"number" => $_POST["number"],
			"links" => $_POST["links"]
		));
	} else {
		$sumitted = 0;
	}
?>
<!doctype html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="description" content="BharatHacks is a hackathon for solving India-specific problems. Programmers, designers, engineers, and entrepreneurs will come together to build products to make lives beter.">

		<link rel="apple-touch-icon" sizes="180x180" href="/assets/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon-16x16.png">
		<link rel="manifest" href="/manifest.json">
		<link rel="mask-icon" href="/assets/safari-pinned-tab.svg" color="#5bbad5">
		<link rel="shortcut icon" href="/assets/favicon.ico">
		<meta name="msapplication-config" content="/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"" media="none" onload="if (media != 'all') media = 'all'">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Hind:400,500" media="none" onload="if (media != 'all') media = 'all'">
		<noscript>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
			<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700">
		</noscript>

		<title>Apply for BharatHacks</title>

		<script> var host = "bharathacks.com"; host == window.location.host && "https:" != window.location.protocol && (window.location.protocol = "https"); </script>

		<style>
			body { font-family: "Hind" }
			.sponsors { background: whitesmoke; padding: 10vh 0 }
			.sponsors .col-6 {
				height: 130px;
				display: flex;
				align-items: center;
				justify-content: center;
			}
			.sponsors img { width: 150px; max-width: 80%; }
			.sponsors img[alt="DigitalOcean"] { width: 190px }
			.sponsors img[alt="WisdomGeek"] { width: 175px }
			.sponsors img[alt="DesiredWings"] { width: 190px }
			.sponsors img[alt="91springboard"] { width: 190px }
			.sponsors img[alt="Melangebox"] { width: 190px }
			.sponsors img[alt="Nimblepost"] { width: 180px }
			.sponsors img[alt="Flairlift"] { width: 120px }
			.sponsors img[alt="DelhiStartups"] { width: 200px }
			.sponsors img[alt="SixteenInches"] { width: 180px }
			.sponsors img[alt="Startup Nexus"] { width: 180px }
			.sponsors img[alt="Delhi Angels"] { width: 180px }
			.sponsors div { color: #888 }
			.sponsors div + a {
				margin-top: 10px;
				display: inline-block;
			}
			.home {
				padding: 13vh 0
			}
			.animated-logo {
				display: inline-block;
				background: #1abc9c;
				animation: colors 60s infinite;
				width: 250px;
				max-width: 50%;
			}
			@keyframes colors {
				0% { background: #1abc9c; }
				10% { background: #2ecc71; }
				20% { background: #3498db; }
				30% { background: #9b59b6; }
				40% { background: #34495e; }
				50% { background: #7f8c8d }
				60% { background: #f1c40f }
				70% { background: #e67e22 }
				80% { background: #7f8c8d }
				90% { background: #e74c3c }
				100% { background: #1abc9c; }
			}
			.animated-logo img {
				width: 100%;
			}
			.animated-logo {
				margin-bottom: 5vh;
			}
			.animated-logo + * + * {
				margin: 2.5vh 0;
			}
			.about { background: whitesmoke; padding: 10vh 0 }
			.prizes, .event { padding: 10vh 0 }
			p:last-child { margin-bottom: 0 }
			.prizes { animation: colors 60s infinite; background: #1abc9c; color: #fff }
			.event h4 { margin-bottom: 30px }
			footer { padding: 5vh 0 }
		</style>

	</head>

	<body>

		<a href="#content" class="sr-only sr-only-focusable">Skip to main content</a>

		<section class="home text-center">
			<div class="container">
				<h3>BharatHacks Application</h3>
			</div>
		</section>

		<section class="about">
			<div class="container">
				<div class="row">
					<div class="col-md-6 push-md-3">
						<?php
							if ($sumitted == 1) {
						?>
						<p><strong>We have received your application. We will review it and get in touch with you soon.</strong></p>
						<?php
							}
						?>
						<p>Please note that this is an application form and does not confirm your admission. We will select 200 participants from these applications and get in touch with you by the end of this month.</p>
						<form method="post">
							<div class="form-group">
								<label for="nameInput">Apply as</label>
								<select name="type" class="form-control" required>
									<option>Hacker</option>
									<option>Investor</option>
									<option>Startup</option>
								</select>
							</div>
							<div class="form-group">
								<label for="nameInput">Name</label>
								<input type="text" name="name" class="form-control" id="nameInput" placeholder="Enter your full name" autofocus required>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Email address</label>
								<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
								<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
							</div>
							<div class="form-group">
								<label for="numberInput">Contact number</label>
								<input type="tel" name="number" class="form-control" id="numberInput" placeholder="Enter your number with country code" autofocus required>
							</div>
							<div class="form-group">
								<label for="linkInput">Links</label>
								<textarea rows="5" name="links" class="form-control" id="linkInput" aria-describedby="emailHelp" placeholder="Enter one link in each line" required></textarea>
								<small id="emailHelp" class="form-text text-muted">Enter your Github, LinkedIn, Behance, or website links. Give us reasons to select you.</small>
							</div>
							<button type="submit" class="btn btn-primary">Apply</button>
						</form>
					</div>
				</div>
			</div>
		</section>

		<footer class="text-center">
			<div class="container">
				<p><a href="/">&larr; Back to BharatHacks</a></p>
			</div>
		</footer>

	</body>

</html>
