<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .company{
            text-decoration: none;
            margin-top: 500px;
            margin-left: 170px;
        }
        .admin{
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <form class="form-hidden" action="logindata.php" method="POST" id="login" >
            <div class="card">
                <div class="title">Log In</div>
                <div class="form-input"> UserName: <input type="text" name="username" placeholder="Username"
                        class="form-control" required></br></div>
                <div class="form-input">Password: <input type="password" name="Upassword" placeholder="password"
                        class="form-control" required></br></div>
                <input class="button" type="submit" value="login">
                <div class="text-center"><span>Don't have an Account?</span><a id="linksignup">Sign Up</a></div>
                <div><span class="admin">Login as</span><a class ="company" href="loginCompany.php">Admin</a></div>
            </div>
        </form>

        <form action="signupdata.php" id="signup" method="POST">
            <div class="card">
                <div class="title">Sign Up</div>
                <div class="form-input"> Email: <input type="email" name="email" placeholder="Email Address"
                        class="form-control"></div>

                <div class="form-input">UserName: <input type="text" name="username" placeholder="Username"
                        class="form-control"></div>

                        <div class="form-input">Contact: <input type="text" name="contact" placeholder="Contact"
                            class="form-control"></div>

                <div class="form-input">Password: <input type="password" name="password" placeholder="Password"
                        class="form-control"></div>
                
                <input class="button" type="submit" value="Sign-Up">
                <div class="text-center"><span>Don't have an Account?</span><a id="linklogin">Log In</a></div>
                
            </div>

        </form>

    </div>
   

    <script src="script.js"></script>
    <script src="storage.js"></script>

</body>

</html>