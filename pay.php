<?php



if (isset($_POST['paynow'])) {
	$phone = $_POST['phone'];
	$name = $_POST['name'];

        
        $ch = curl_init('https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials');
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Authorization: Basic cFJZcjZ6anEwaThMMXp6d1FETUxwWkIzeVBDa2hNc2M6UmYyMkJmWm9nMHFRR2xWOQ==']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        curl_close($ch);
	$response = json_decode($response);
        echo $response;


	echo("Hello " . $name . '<br>Your Phone number is ' . $phone . ' and your access token is ' . $response->access_token);
}else {
	header('Location: index.php');
}
?>
