<?php 
   if (isset($_SESSION['user'])) {
    $_SESSION['user'] = time();
} else if (time() - $_SESSION['user'] > 1800) {
    // session started more than 30 minutes ago
      header('location:page-login.php');  // change session ID for the current session and invalidate old session ID
    $_SESSION['user'] = time();  // update creation time
}
 ?>