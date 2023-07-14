<?php
    include("server.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/login/login.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <title>signup page page</title>
</head>
<body>
    <section class="home">
        <div class="form_container">      
                    

        <!--signup page-->
            <div class="form signup_form">
                <form action="#">
                    <h2>Signup</h2>
                    <div class="input_box">
                        <input type="email" placeholder="Enter your email" required>
                        <i class="uil uil-envelope-alt email"></i>
                    </div>
                    <div class="input_box">
                        <input type="password" placeholder="Create password" required>
                        <i class="uil uil-lock password"></i>
                        <i class="uil uil-eye-slash" id="pw_hide"></i>
                    </div>

                    <div class="input_box">
                        <input type="password" placeholder="Confirm password" required>
                        <i class="uil uil-lock password"></i>
                        <i class="uil uil-eye-slash" id="pw_hide"></i>
                    </div>                    

                    <button class="button"> Signup Now</button>

                    <div class="login_signup">
                        Already have an account? 
                        <a href="/login/login.php" id="login">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="/login/login.js"></script>
</body>
</html>