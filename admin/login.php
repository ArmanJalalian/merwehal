<?php

include("../assets/settings/config.php");

$username = null;
$password = null;

if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $encrypt_name = md5($username);
    $encrypt_password = md5($password);

    $login_query = "SELECT * FROM admin WHERE username = '$encrypt_name' AND password = '$encrypt_password'";
    $result = $db->query($login_query);

    $count = 0;

    while($row = mysqli_fetch_array($result))
    {
        $count++;
    }

    if($count === 1)
    {
        session_start();
        $_SESSION['loggedIn'] = true;
        $_SESSION['username'] = $_POST['username'];

        header('Location: admin.php');
        exit;
    }
    else
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
    echo $_POST['username'];
        echo $_POST['password'];
        echo "Gebruikersnaam en/of wachtwoord komen niet overeen!";
    }
}

?>
<!doctype html>
<html>
    <head>
        <title></title>
        <meta name = "description" content = ""/>
        <meta charset = "utf-8"/>
        <link rel= "stylesheet" href= "../assets/css/bootstrap.min.css"/>
        <link rel= "stylesheet" href= "../assets/css/login.css"/>
    </head>
    <body>

        <div class="container">
            <form action="<?php print $_SERVER['PHP_SELF']; ?>" class="form-login" method="post">
                <h2>Sign in</h2>
                <div class="form-group">
                    <label for="Username" class="sr-only">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?php echo $username; ?>"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Password" class="sr-only">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?php echo $password; ?>"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="submit" class="btn btn-default" name="submit" value="Login"/>
                    </div>
                </div>
            </form>
        </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    </body>
</html>

        