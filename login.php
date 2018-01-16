<?php
require_once('Views/login.phtml');
require_once('Models/Login.php');
if(isset($_POST['submit']))
{
    $userEmail = htmlentities($_POST['username']);
    $userPassword = htmlentities($_POST['password']);
    $loginModel = new Login();
    $auth = $loginModel->signIn($userEmail, $userPassword);
    if($auth)
    {
        header('Location: admin.php');
        exit();
    }
    else
    {
        echo '<p>Unrecognised user details</p>';
    }
}
?>


<footer>
    <!-- Scripts -->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
</footer>
