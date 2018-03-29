<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . '/constants.php');
  require_once(BASEDIR . 'db.php');
  require_once(BASEDIR . 'functions.php');
?>

<!doctype html>
<html lang="ru">
  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      <link rel="stylesheet" href="/assets/css/reg_adm.css">

      <title><?= $title; ?></title>
  </head>

<body>
    <form id="sec_form" class="form-inline">
      <div class="form-group mx-sm-3 mb-2">
        <label for="login" class="sr-only">Login</label>
        <input class="form-control" id="login" name="login" placeholder="Login">
      </div>
      <div class="form-group mx-sm-3 mb-2">
        <label for="pass" class="sr-only">Password</label>
        <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
      </div>
      <input type="hidden" name="action" value="reg_adm">
      <button type="button" class="btn btn-primary mb-2">Confirm identity</button>
    </form>

    <div id="main">
    </div>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
    integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
    crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="/assets/js/reg_adm.js"></script>
</body>
</html>