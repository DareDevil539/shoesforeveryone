<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Log.IN</title>
  <link rel="shortcut icon" href="/img/admin-favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="/css/admin.css">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="wio-login">
        <img src="../img/admin-logo.svg" alt="Web.IO Admin Panel">
        <form action="wio_admin" method="post">
          <label for="username">Login</label>
          <input type="text" placeholder="Login" id="username" name="username">
          <label for="password">Password</label>
          <input type="password" placeholder="Password" id="password" name="password">
          <input type="submit" value="Log In">
        </form>
      </div>
    </div>
  </div>
</body>

</html>