<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<html lang="en">
<!--<![endif]-->
<head>

<!-- Basic Page Needs -->
<meta charset="utf-8">
<title>SmartNinja poletna šola</title>
<meta name="description" content="">
<meta name="author" content="Ansonika">

<!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

<!-- Mobile Specific Metas -->
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no">

<!-- CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">


	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->


<!--[if IE 7]>
  <link rel="stylesheet" href="font-awesome/css/font-awesome-ie7.min.css">
<![endif]-->
<script type="text/javascript">
function delayedRedirect(){
    window.location = "index.html"
}
</script>

</head>
<body onLoad="setTimeout('delayedRedirect()', 5000)">
<?php
						$mail = $_POST['email'];

						/*$subject = "".$_POST['subject'];*/
						$to = "info@start-up.si"; 			/* YOUR EMAIL HERE */
						$subject = "Prijava na SmartNinja poletno šolo";
						$headers = "From: SmartNinja <info@start-up.si>";
						$message = "USER INFO\n";
						$message .= "\nName: " . $_POST['firstname'];
						$message .= "\nLast Name: " . $_POST['lastname'];
						$message .= "\nEmail: " . $_POST['email'];
						$message .= "\nTelephone: " . $_POST['phone2'];
						$message .= "\nTečaj: " . $_POST['country'];
						$message .= "\nRojstni datum: " . $_POST['age'];
						$message .= "\nNaslov: " . $_POST['address'];
						$message .= "\nVišina kotizacije: " . $_POST['sleepover'];
						//$message .= "\nTerms and conditions accepted: " . $_POST['terms'] . "\n";
						/*$message .= "\nPreferences?\n" ;    CHECKBOXES */
						foreach($_POST['course_1'] as $value) 
							{ 
							$message .=   "- " .  trim(stripslashes($value)) . "\n"; 
							};
						//$message .= "\nOptional message: " . $_POST['message_apply_1'];
						//Receive Variable
						$sentOk = mail($to,$subject,$message,$headers);
						
						$user = "$mail";
						$usersubject = "Prijava na poletno šolo programiranja";
						$userheaders = "From: info@start-up.si\n";
						$usermessage = "Hvala za prijavo na SmartNinja poletno šolo programiranja. Glede nadaljnih korakov vas bomo v kratkem kontaktirali.\n\nLep pozdrav,\nMatej Ramuta\nVodja poletne šole SmartNinja";
						mail($user,$usersubject,$usermessage,$userheaders);
	
?>

<!-- END SEND MAIL SCRIPT -->   
<div class="container">
<div class="row">
        <div class="col-md-12" style="text-align:center; padding-top:80px;">
         	<h1 style="color:#333">Hvala za prijavo!</h1>
          <h3 style="color: #6C3">Prijavnica je bila uspešno poslana.</h3>
         <p>V 5 sekundah boste preusmerjeni nazaj na prvo stran Smart Ninja poletne šole.</p>
        </div>
</div>
</div>
</body>
</html>