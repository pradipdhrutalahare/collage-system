<?php include('DBcon.php') ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TC INSTANBUL MEDIPOL University</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'><link rel="stylesheet" href="LoginCSS/AdminLogin.css">

</head>
<body>

<!-- Pratial: index.partial.html -->
<p class="tip"></p>
<div class="cont">
    <div class="form sign-in">
        <form method="post" id="admin_login" action="lecturer_login.php">
            <h2>Lecturer Login</h2>
            <label >
                <span>Email</span>
             <input type="Email" name="email" id="admin_signin_email" placeholder="johnsmith@medipol.edu.tr" title="please enter an email with medipol extension"><br>    
           </label>
           <label>
          <span>Password</span>
          <input type="password" name="password" id="admin_signin_password" pattern=".{5,15}" required title="5 to 15 characters" placeholder="**********" > <br>
      </label>
    <button class="submit" name="login_lecturer">Sign In</button>
            
        </form>
        
    </div>
    
</div>
<a class="icon-link">
  <img src="https://www.medipol.edu.tr/medium/GalleryImage-Image-41.vsf">
</a>
    
</body>
</html>