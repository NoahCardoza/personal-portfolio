<?
date_default_timezone_set('America/Los_Angeles');

function ip()
{
	if (isset($_SERVER['HTTP_CLIENT_IP']))
		return $_SERVER['HTTP_CLIENT_IP'];
	else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
		return$_SERVER['HTTP_X_FORWARDED_FOR'];
	else if(isset($_SERVER['HTTP_X_FORWARDED']))
		return$_SERVER['HTTP_X_FORWARDED'];
	else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
		return$_SERVER['HTTP_FORWARDED_FOR'];
	else if(isset($_SERVER['HTTP_FORWARDED']))
		return$_SERVER['HTTP_FORWARDED'];
	else if(isset($_SERVER['REMOTE_ADDR']))
		return$_SERVER['REMOTE_ADDR'];
	else
		return'UNKNOWN';
}
?>

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
		<section class="spacer-lg"><h1>
			<?
				if (isset($_POST['message']) && isset($_POST['email'])){
					$endl = "\n";
					$date = date('Y-H-i-s');
					$contents =  $date . $endl;
					$contents .= 'IP : ' . ip() . $endl;
					$contents .= 'FROM : ' . ($_POST['email'] ? $_POST['email'] : 'UNKNOWN') . $endl; 
					$contents .= "--- START MESSAGE ---" . $endl;
					$contents .= ($_POST['message'] ? $_POST['message'] : 'NONE') . $endl;
					if (!is_dir('./messages')){
						mkdir('./messages', 0777);
					}
					var_dump(file_put_contents('./messages/' . $date . '.msg', $contents));
					echo("Thanks For Your Input!");
				} else {
					echo("Gmail Is The New Email");
				}
			?>	
		</h1></section>
		<div class="divider"><span>I say all publicity is good publicity, except spam!</span></div>
		<section class="main">
			<article>
				<h2>Contact</h2>
				<sub>If you have any comments, concerns, or death threats, those go here.</sub>
				<form id="contact-form" method="POST">
					<input type="email" name="email" placeholder="Email (optional)">
					<textarea spellcheck="false" name="message" class="msg-input" placeholder="Type your heart out!"></textarea>
					<input type="submit" value="Submit">
				</form>
			</article>
		</section>
		<div class="push"></div>
	</div>
	<?include("footer.html");?>
</body>
</html>
