<?php include('server.php') ?>
<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="Foundation/css/foundation.css">
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>
  <!-- Phonebook Topbar -->
  <div class="top-bar" id="responsive-menu">
    <div class="top-bar-left">
      <ul class="dropdown menu" data-dropdown-menu>
        <li class="menu-text">PhoneBook</li>
      </ul>
    </div>
    <div class="top-bar-right">
        <a href="register.php" class="button hollow" type="button">Register</a>
    </div>
  </div>

  <!-- Login Form -->
  
  <div class="header">
    <h2>Login Form</h2>
  </div>
  
  <form method="post" action="login.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <span class="input-group-label">Username</span>
      <input class="input-group-field" type="text" name="username">
    </div>
    <div class="input-group">
      <span class="input-group-label">Password</span>
      <input class="input-group-field" type="password" name="password">
    </div>
    <div class="input-group">
      <button type="submit" class="button hollow expanded" name="login_user">Login</button>
    </div>
  </form>
</body> 

  