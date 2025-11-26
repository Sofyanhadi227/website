<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <style>
    /* Reset */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: Arial, sans-serif;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      /* Background gradient animasi */
      background: linear-gradient(120deg, #1e3c72, #2a5298, #00b4db, #0083b0);
      background-size: 300% 300%;
      animation: gradientBG 12s ease infinite;
    }

    /* Animasi background */
    @keyframes gradientBG {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .login-container {
      background: rgba(255, 255, 255, 0.97);
      padding: 40px 30px;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.2);
      width: 340px;
      position: relative;
      overflow: hidden;
      animation: fadeInUp 0.8s ease;
    }

    /* Garis dekor di atas card */
    .login-container::before {
      content: "";
      position: absolute;
      top: 0;
      left: -40%;
      width: 180%;
      height: 4px;
      background: linear-gradient(90deg, #007BFF, #00c6ff, #7f5af0);
      animation: barMove 3s linear infinite;
    }

    @keyframes barMove {
      0% { transform: translateX(-20%); }
      50% { transform: translateX(20%); }
      100% { transform: translateX(-20%); }
    }

    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(20px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .login-container:hover {
      box-shadow: 0 14px 30px rgba(0,0,0,0.28);
      transform: translateY(-3px);
      transition: all 0.25s ease;
    }

    .logo-circle {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      margin: 0 auto 12px;
      background: radial-gradient(circle at 30% 30%, #ffffff, #007BFF);
      display: flex;
      justify-content: center;
      align-items: center;
      color: #fff;
      font-weight: bold;
      font-size: 18px;
      letter-spacing: 1px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.25);
    }

    .login-title {
      text-align: center;
      margin-bottom: 24px;
      color: #222;
    }

    .login-title h2 {
      font-size: 20px;
      margin-bottom: 4px;
    }

    .login-title span {
      font-size: 12px;
      color: #777;
    }

    .form-group {
      margin-bottom: 18px;
    }

    .form-group label {
      display: block;
      margin-bottom: 6px;
      font-size: 13px;
      color: #555;
    }

    .input-wrapper {
      position: relative;
    }

    .input-wrapper input {
      width: 100%;
      padding: 10px 36px 10px 12px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
      transition: border-color .3s, box-shadow .3s;
    }

    .input-wrapper input:focus {
      border-color: #007BFF;
      outline: none;
      box-shadow: 0 0 0 3px rgba(0,123,255,0.15);
    }

    .input-icon {
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
      font-size: 14px;
      color: #999;
      pointer-events: none;
    }

    .login-container form input[type="submit"] {
      width: 100%;
      padding: 12px;
      margin-top: 6px;
      background: linear-gradient(120deg, #007BFF, #00c6ff);
      color: #fff;
      border: none;
      border-radius: 20px;
      font-size: 15px;
      cursor: pointer;
      letter-spacing: 0.5px;
      font-weight: 600;
      box-shadow: 0 6px 14px rgba(0,123,255,0.4);
      transition: transform .2s, box-shadow .2s, opacity .2s;
    }

    .login-container form input[type="submit"]:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 20px rgba(0,123,255,0.6);
      opacity: 0.95;
    }

    .login-container form input[type="submit"]:active {
      transform: translateY(0);
      box-shadow: 0 5px 12px rgba(0,123,255,0.5);
    }

    .footer-text {
      text-align: center;
      margin-top: 14px;
      font-size: 12px;
      color: #777;
    }

    .helper-links {
      margin-top: 10px;
      display: flex;
      justify-content: space-between;
      font-size: 12px;
    }

    .helper-links a {
      color: #007BFF;
      text-decoration: none;
      transition: color .2s;
    }

    .helper-links a:hover {
      color: #0056b3;
      text-decoration: underline;
    }

    @media (max-width: 400px) {
      .login-container {
        width: 90%;
        padding: 30px 20px;
      }
    }
  </style>
</head>
<body>

  <div class="login-container">
    <div class="logo-circle">
      CRUD
    </div>

    <div class="login-title">
      <h2>LOGIN BELAJAR CRUD</h2>
      <span>Malas Coding Edition</span>
    </div>

    <form action="login_aksi.php" method="post">
      <div class="form-group">
        <label for="username">Username</label>
        <div class="input-wrapper">
          <input type="text" name="username" id="username" required>
          <span class="input-icon">&#128100;</span>
        </div>
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <div class="input-wrapper">
          <input type="password" name="password" id="password" required>
          <span class="input-icon">&#128274;</span>
        </div>
      </div>

      <input type="submit" value="LOGIN">
    </form>
    <div class="footer-text">
      &copy; 2025 crud malas coding
    </div>
  </div>

</body>
</html>
