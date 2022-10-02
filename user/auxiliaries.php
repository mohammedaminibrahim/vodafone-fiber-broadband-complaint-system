<?php



function userLogin($email) {
    $_SESSION['email'] = $email;
   // echo '<script>window.location = "";</script>';
   header("location: index.php");
    
}

function userIsLogin(){
    if (isset($_SESSION['email']) && $_SESSION['email'] > 0) {
        return true;
    }
    return false;
}

	// Redirect If not Logged in
	function userLoginErrorRedirect() {
		$_SESSION['flash_error'] = 'Oops... you must be logged in to access that page.';
        $_SESSION['alert'] = "alert alert-primary";
        header("location: login.php");
	}













;?>