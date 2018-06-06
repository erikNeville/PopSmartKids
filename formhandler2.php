<?php
// Checks if form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    function post_captcha($user_response) {
        $fields_string = '';
        $fields = array(
            'secret' => '6Ld3zVwUAAAAAO3Fi-ZUu_raXqgXAdMgilgE9l3z',
            'response' => $user_response
        );
        foreach($fields as $key1=>$value1)
        $fields_string .= $key1 . '=' . $value1 . '&';
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }

    // Call the function post_captcha
    $res = post_captcha($_POST['g-recaptcha-response']);

    if (!$res['success']) {
        // What happens when the CAPTCHA wasn't checked
        echo '<p>Error: Please go back and make sure you check the security CAPTCHA box.</p><br>';
        echo "<script>setTimeout(\"location.href = 'http://smart2.icoolshow.net/testimonial.html';\",2500);</script>";

    } else {
        // If CAPTCHA is successfully completed...

        // Paste mail function or whatever else you want to happen here!
        if (empty($_POST)) {
		header('Location: '.$_SERVER['HTTP_REFERER']);
		exit();
	}

//Creates function that removes magic escaping, if it's been applied, from values and then removes extra newlines and returns to foil spammers.
function clear_user_input($value) {
	if (get_magic_quotes_gpc()) $value=stripslashes($value);
	$value= str_replace( "\n", '', trim($value));
	$value= str_replace( "\r", '', $value);
	return $value;
	}


if ($_POST['comments'] == 'Please share any comments you have here') $_POST['comments'] = '';	

//Create body of message by cleaning each field and then appending each name and value to it

$body ="Message from TESTIMONIAL PAGE:\n";

foreach ($_POST as $key => $value) {
	if(is_array($value)){ 				// if this post element is a checkbox group or multiple select box
		$value = implode(', ',$value);	// show array of values selected
		
	}

	$key = clear_user_input($key); 
	$value = clear_user_input($value);
	$$key = $value;
	
	$body .= "$key: $value\n";
}


	
	
$from='From: '. $email . "(" . $name . ")" . "\r\n" . 'Bcc:' . "\r\n";
// sends bcc to alternate address 

//Creates intelligible subject line that shows where it came from
$subject = 'Email from the TESTIMONIAL page'; // if your client has more than one web site, you can put the site name here.

// for troubleshooting, uncomment the two lines below. Send your form, and you'll get a browser message showing your results.
//echo "mail ('clientname@domain.com', $subject, $body, $from);";
//exit();

//Sends email, with elements created above

/****
 * Enter a email address between the single quote
 ****/
mail ('popsmartkids2@gmail.com', $subject, $body, $from);

header('Location: thx.html'); 
   }
} else { 
}
?>