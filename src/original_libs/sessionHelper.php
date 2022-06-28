<?php
if(isset($_GET['logout'])) {
  return logOut();
}

   //EXPIRE SESSION
   function checkSessionExpire() {
 
    $urlFile = basename($_SERVER['REQUEST_URI']);                                   
 
    if(($urlFile == "dashboard.php")) {
    //Check the session start time is set or not
    if(!isset($_SESSION['start']))
    {
    //Set the session start time
        $_SESSION['start'] = time();
    }
    //Check the session is expired or not
    checkTime();
   
   }
 }
//* HOW IMPLEMENT EXPIRE SESSION
//
 function checkTime(){

 if (isset($_SESSION['start']) && isset($_POST['action']) && (time() - $_SESSION['start'] > 10)) {
  session_unset();
  session_destroy();
  echo "Session is expired.<br/>";
  header("Location: ../index.php?logout");
}
// else
  // echo "Current session exists.<br/>";

}



//LOGOUT SECTION
function destroySessionCookie()
{
if (ini_get("session.use_cookies")) {
  $params = session_get_cookie_params();
  setcookie(
      session_name(),
      '',
      time() - 42000,
      $params["path"],
      $params["domain"],
      $params["secure"],
      $params["httponly"]
  );
}
  
}

function logOut(){
  destroySessionCookie();
  session_unset();
  session_destroy();
  header("Location: ../../index.php?logout=true");
}


