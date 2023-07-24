
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    </form>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <title>perpus</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    /* CSS untuk styling halaman */
    body {
      font-family: Arial, sans-serif;
      background-color: #A9A9A9;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
    }

    label {
      display: block;
      margin-bottom: 10px;
    }

    input[type="username"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type="submit"] {
      width: 100%;
      background-color: #A9A9A9;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #A9A9A9;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2> Login </h2>
    <form action="proses_login.php" method="POST">
      <label for="username">username</label>
      <input type="username" id="username" name="username" required>
      
      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>
      
      <input type="submit" value="Login">
    </form>
  </div>
</body>
</html>
