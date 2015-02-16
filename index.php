
<?php
// session_start()

// Define your username and password

$username = "USERNAME";

$password = "PASSWORD";

//Testing the username and password

if ($_POST['txtUsername'] != $username || $_POST['txtPassword'] != $password) {

?>
<body>
<h3>Log In To Use Secure Intranet Pages</h3>

<h1>Content Login</h1>

<form name="login" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<p><font><label for="txtUsername">Username:</label>

<br /><input type="text" title="Enter your Username" name="txtUsername" /></p>

<p><font><label for="txtpassword">Password:</label>

<br /><input type="password" title="Enter your password" name="txtPassword" /></p>

<p><input type="submit" name="Submit" value="Login" /></p>

</form>
<?php

}

else {
?>

<?php
include ("mainscreen.htm");
?>
<?php
}
?>
