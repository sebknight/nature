<?php
//Start with setting session variables
session_start();

//Get form input and validate
if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {
    if ($_POST['username'] == 'seb' && $_POST['password'] == 'yasqueen') {
        $_SESSION['valid'] = true;
        $_SESSION['timeout'] = time();
        $_SESSION['username'] = 'seb';
        echo ("<script>document.getElementByID('notification').innerHTML('<p>Logged in</p>')</script>");
    } else {
        echo ('wrong username/password');
    }
}

// $logoutButton = 

// // if (!empty($_SESSION['username'])) {
    
// } else {
//     echo ('You have to be logged in to log out...');
// }


$page = "login";
require "templates/meta.php";
require "templates/header.php"

?>

<div id="notification"></h2></div>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
  <fieldset>
    <label for="username">Username</label>
    <input type="text" placeholder="Enter your username" name="username" required>
    <label for="password">Password</label>
    <input type="password" placeholder="Enter your password" name="password" required>
    <input class="button-primary" name="login" type="submit" value="Log in"">
    <input id="logout-button" class="button button-outline" name="logout" onclick="window.location.href='/nature/logout.php'" value="Log out" disabled>

  </fieldset>
</form>
<!-- column ends -->
</div> 

<?php
if (!empty($_POST['username']) && !empty($_POST['password'])) {
    if ($_POST['username'] == 'seb' && $_POST['password'] == 'yasqueen') {
        $_SESSION['valid'] = true;
        $_SESSION['timeout'] = time();
        $_SESSION['username'] = 'seb';
        echo "<script>console.log('working'); function enableLogout() {
            document.getElementById('logout-button').disabled = false;} enableLogout();</script>";
    } 
}
        
require "templates/footer.php"
?>
