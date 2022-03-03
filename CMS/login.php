<?php include('DBcon.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TC ISTANBUL MEDIPOL UNIVERSITY</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'><link rel="stylesheet" href="LoginCSS/login.css">
  <script type="text/javascript" src="Front-end\LoginJS\login.js"></script>
</head>
<body>
    <P class="tip"></P>
    <div class="cont">
    <div class="form sign-in">
        <h2>User Login</h2>
        <form method="post" action="login.php" id="sign-in-form">
            <label id="email">
                <span>Email</span>
                <input type="email" name="email" id="signin_email" pleceholder="pradipdhrutl887@gmail.com"  title="please inter an email with medipol extension"></br>
            </label>

            <label>
                <span>Password</span>
                <input type="password" name="password"  id="signin_password" placeholder="*********">
            </label>
            <a href="forgot.html"><p class="forgot-pass">Forgot password?</p></a>
            <button class="submit" id="sign_in" name="login_student">Sign In</button>
            <a href="lecturer_login.php"><button type="button" class="fb-btn"><span>Continue as lecturer</span></button></a>
            
        </form>
    </div>
  <?php 







  ?>
      

 
    <div class="sub-cont">
        <div class="img">
            <div class="img_text m--up">
                <h2>New here?</h2>
                <h2>Register Now!</h2>
            </div>
            <div class="img_text m--in">
                <h3>If you already have an account , Sign in!</h3>
            </div>
            <div class="img__btn">
                <span class="m--up">Sign up</span>
                <span class="m--in">sign in</span>
            </div>
        </div>
        <div class="form sign-up">
            <form method="post" action="login.php" id="register_form">
                <label>
                    <span>Name</span>
                    <input type="text" name="name" id="fullname" placeholder="john smith" required><br>
                </label>
                <label>
                    <span>Email</span>
                    <input type="email" name="email" id="signup_email" placeholder="pradipdhrutl887@gmail.com" required title="please enter an email with medipol extension"><br>
                </label>
                <label >
                    <span>password</span>
                    <input type="password" name="password_1" id="signup_password" required title = "5 to 5 characters" placeholder="***********"><br>
                </label>
                <label >
                    <span>Confirm password</span>
                    <input type="password" name="password_2"  id="confirm_password" required title="5 to 15 characters" placeholder="***********"> <br>
                </label>
                <label >
                    <span>Phone Number</span>
                    <input type="tel" name="phone" id="phone" placeholder="9872653823" required> <br><br>
                </label>

                <label id="account">
                    <span>Account type</span>
                    <select name="acc_type">
                        <option value="student">student</option>
                        <option value="lecturer">Lecturer</option>
                        
                    </select>
                </label>

                <button class="submit" name="register_user" onclick="validate()">Sign Up</button>
            </form>
            
        </div>
        
    </div>


    </div>
    
<a class="icon-link">
  <img src="https://www.medipol.edu.tr/medium/GalleryImage-Image-41.vsf">
</a>
 <script type="text/javascript" src="Front-end\LoginJS\login.js"></script>
</body>

</body>
</html>

<?php 




?>