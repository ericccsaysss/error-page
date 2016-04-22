<?php
date_default_timezone_set('America/Phoenix');

  $date      = date(Ymd);
  $contact   = $_POST['emailcontact'];
  $filename  = "./" . $date . "-contactlist.txt";

  if (filter_var($contact, FILTER_VALIDATE_EMAIL)) {
    if (!exec('grep '.escapeshellarg($contact).' '.$filename)) {
      file_put_contents( $filename, $contact . "\n", FILE_APPEND);
    } else {
      $contact = "Whoops! </br> We already have your address.";
    };
  };
?>

<html>
<head>
<title>Server Maintenance</title>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link rel='stylesheet' type='text/css' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
</head>
<body>
  <div class="jumbotron" style="background-color: #D0F4FF;">
    <h1><?php print $contact ?></h1>
    </br>
      <p>
        We will send an email as soon as we have a resolution.
      </p>
    </br>
</body>
</html>
