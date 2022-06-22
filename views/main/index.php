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
    <!-- <meta http-equiv="refresh" content= "10; ../index.php?logout.php"/> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css" />
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css" />
    <script type="text/javascript" src="../assets/js/index.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.min.css" integrity="sha512-o/MhoRPVLExxZjCFVBsm17Pkztkzmh7Dp8k7/3JrtNCHh0AQ489kwpfA3dPSHzKDe8YCuEhxXq3Y71eb/o6amg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../public/assets/css/main.css">

 
    <title>Document</title>
</head>
<body>
   
    <!------------ Header ------------>
    <?php
  // include ('./library/sessionHelper.php');
  // checkSessionExpire();

    ?>

    <?php
    require BASE_PATH .'/public/assets/html/header.html';
    ?>



     <!------------ Table JsGrid ------------>
    <div id="wrapper">
        <?php echo "Hello World!"?>
    </div>


     <!------------ Footer ------------>
     <?php
    require BASE_PATH .'/public/assets/html/footer.html';
    ?>

    
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>
     <script src="../../public/assets/js/script.js"></script>
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