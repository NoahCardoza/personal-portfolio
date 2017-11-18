<!DOCTYPE html>
<html lang="en" data-nav="contact">
<head>
	<title>Contact - Noah Cardoza</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<div class="wrapper">
		<?include("navbar.html");?>
		<section class="spacer-lg"><h1>Gmail Is The New Email</h1></section>
		<div class="divider"><span>I say all publicity is good publicity, except spam!</span></div>
		<section class="main">
			<article>
				<h2>Contact</h2>
				<sub>If you have any comments, concerns, or death threats, those go here.</sub>
				<form id="contact-form" method="POST">
					<input type="email" name="email" placeholder="Email (optional)">
					<textarea spellcheck="false" name="msg" class="msg-input" placeholder="Type your heart out!"></textarea>
					<input type="submit" value="Submit">
				</form>
			</article>
		</section>
		<div class="push"></div>
	</div>
	<?include("footer.html");?>
</body>
</html>
