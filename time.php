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

if (isset($_POST['message']) || isset($_POST['email'])){
	$endl = "\n";
	$date = date('Y-H-i-s');
	$contents =  $date . $endl;
	$contents .= 'IP : ' . ip() . $endl;
	$contents .= 'FROM : ' . (isset($_POST['email']) ? $_POST['email'] : 'UNKNOWN') . $endl; 
	$contents .= "--- START MESSAGE ---" . $endl;
	$contents .= (isset($_POST['message']) ? $_POST['message'] : 'NONE') . $endl;
	file_put_contents('./messages/' . $date . '.msg', $contents);
}

?>