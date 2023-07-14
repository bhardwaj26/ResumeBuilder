<?php 
  session_start(); 

  if (!isset($_SESSION['userId'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['userId']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>

    
    <header class="navbar">
        <div class="nav-logo">
            <p>Resume Builder</p>
        <div class="nav-button">
            <button class="button btnLogin">
                <a href="/login/login.php">Login</a>
            </button>
            <button class="button btnSignup">
                <a href="/login/signup.php">Signup</a>
            </button>

        </div>

    </div>
        
    </header>

    
    <div class="content">
        <p class="content-1">
            Professional Resume Builder</p>
        <p class="content-2">Create, Edit, and Securely Save Your Resume Right on Our Platform, Even on Your Phone!</p>
        <button class="btn">
            <a href="/index.php" target="_blank" >Build Your Resume</a>            
            
        </button>

    </div>

    <div class="content-image">
        <img src="/resume1.png" alt="">
    </div>

    <div class="content-3">
        <p class="pra1">Not Just a Resume Builder, But a Platform!</p>
    </div>
    
    <div class="content-4">
        <div class="panel1">
            <i class="fa-solid fa-heart"></i>
            <h4>Free</h4>
            <p>The platform is accessible at no cost.</p>
        </div>

        <div class="panel2">
            <i class="fa-solid fa-check"></i>
            <h4>NO Hidden Costs</h4>
            <p>Unlike our competitor, we do not impose a subscription service on our customers.
            </p>
        </div>

        <div class="panel3">
            <i class="fa-solid fa-lock"></i>
            <h4>Private and Secure</h4>
            <p>We understand the importance of data privacy and make it our mission to protect it.</p>
        </div>

      </div>

      
      <div class="content-5">
        <p>Ready To Start?</p>
        <div class="buttons">
        <button class="btn1">Build Your Resume</button>
        <button class="btn2">Publish Your Template</button>
    </div>
      </div>

      <footer>
        
        <p class="foot-content1">This site is protected by reCAPTCHA and the Google <a href="#">Privacy Policy</a> and <a href="#">Terms of Service apply.</a></p>
      </footer>

      
  
</body>
</html>