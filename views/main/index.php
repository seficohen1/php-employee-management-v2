<!-- TODO Main view or Employees Grid View here is where you get when logged here there's the grid of employees -->
<?php
// require_once ('./library/employeeManager.php');

// if (isset($_SERVER['HTTPS']) &&
//     ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
//     isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
//     $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
//   $ssl = 'https';
// }
// else {
//   $ssl = 'http';
// }

// $app_url = ($ssl  )
//           . "://".$_SERVER['HTTP_HOST']
//           . (dirname($_SERVER["SCRIPT_NAME"]) == DIRECTORY_SEPARATOR ? "" : "/")
//           . trim(str_replace("\\", "/", dirname($_SERVER["SCRIPT_NAME"])), "/");
// ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css" />
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.min.css" integrity="sha512-o/MhoRPVLExxZjCFVBsm17Pkztkzmh7Dp8k7/3JrtNCHh0AQ489kwpfA3dPSHzKDe8YCuEhxXq3Y71eb/o6amg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href= "<?php echo JS; ?>main.css">
 
    <title>Document</title>
</head>
<body>
   
    <!------------ Header ------------>
    <?php
  // include ('./library/sessionHelper.php');
  // checkSessionExpire();

    ?>
    <body>
    <header
      class="d-flex justify-content-around mt-3 bg-light align-items-center"
    >
      <div>
        <h1 class="p-5">LOGO</h1>
      </div>
      <div class="nav-head d-flex">
        <div class="dash">
          <span class="btn_load_screen" call_type="dashboard"></span>
          <a href="./dashboard.php" class="text-decoration-none" call_type="dashboard"><p class="fs-4  mb-">Dashboard</p></a>
        </div>
        <div class="employ">
          
          <span class="btn_load_screen" call_type="employee"></span>
          <a href="./employee.php" class="text-decoration-none "><p class="fs-4">Employee</p></a>
        </div>
      </div>
      <div>
        <form method="GET" action="library/sessionHelper.php">
          <button type="submit" class="btn btn-warning" name="logout">
            Logout
          </button>
        </form>
      
      </div>
      <div class="test">

      </div>
    </header>

     <!------------ Table JsGrid ------------>
    <div id="wrapper">
        <?php echo "Hello World"?>
    </div>


     <!------------ Footer ------------>
     <footer
      class="d-flex justify-content-around mt-3 bg-light align-items-center"
    >
      <p>
        Copyright &copy; 2027 by Employee Management, Inc. All rights reserved.
      </p>
    </footer>

    
    <script src="jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>
     <script src="<?php echo JS; ?>/script.js"></script>
     
     <!-- <script>
setInterval(function() {
    checkUser();
},10000);
function checkUser() {
    jQuery.ajax({
        url:'library/sessionHelper.php',
        type:'POST',
        data:{action: 'test'},
        success: function(result) {
                //window.location.href = '../index.php';
            
        }
    })
}
     </script> -->

 
</body>
</html>