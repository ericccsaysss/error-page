<?php
$content = nl2br(file_get_contents('./content.txt'));
?>
<html>
<head>
<title>Maintenance</title>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link rel='stylesheet' type='text/css' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
</head>
<body>
  <div class="jumbotron" style="background-color: #D0F4FF;">
    <h1> We'll be back soon! </h1>
    <p>
    </br>
      <?php
        echo $content;
      ?>
    </br>
    </br>
    <div class="well" style="position: center; width: 50%">
      <form method="POST" action="./contact.php">
        <div class="form-group">
          <label for="emailcontact">To recieve an email when our service is returned</label>
          <input type="email" class="form-control" name="emailcontact" placeholder="email@domain.com">
        </div>
        <div class="form-group">
          <button id="newContact" type="submit" class="btn btn-primary btn-sm btn-block btn-submit">SUBMIT</button>
        </div>
      </form>
    </div>
    </p>
  </div>
</body>
</html>
