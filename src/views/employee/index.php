<!-- TODO Employee view -->
<!-- TODO Main view or Employees Grid View here is where you get when logged here there's the grid of employees -->

<?php 

    $id = !empty($data) ? $data[0]->id : null;
    $firstName = !empty($data) ? $data[0]->name : "First Name";
    $lastName = !empty($data) ? $data[0]->lastName : "Last Name";
    $email = !empty($data) ? $data[0]->email : "Email";
    $city = !empty($data) ? $data[0]->city : "City";
    $streetAddress = !empty($data) ? $data[0]->streetAddress : "Street Address";
    $state = !empty($data) ? $data[0]->state : "State";
    $age = !empty($data) ? $data[0]->age : "Age";
    $postalCode = !empty($data) ? $data[0]->postalCode : "Postal Code";
    $phoneMumber = !empty($data) ? $data[0]->phoneNumber : "Phone Code";
    $formAction = !empty($data) ? BASE_URL. 'employee/updateEmpolyee' : BASE_URL. 'employee/addNewEmployee';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.min.css" integrity="sha512-o/MhoRPVLExxZjCFVBsm17Pkztkzmh7Dp8k7/3JrtNCHh0AQ489kwpfA3dPSHzKDe8YCuEhxXq3Y71eb/o6amg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link type="text/css" rel="stylesheet" href="/node_modules/jsgrid/jsgrid.min.css" />
    <link type="text/css" rel="stylesheet" href="/node_modules/jsgrid/jsgrid-theme.min.css" />
    <link rel="stylesheet" href="../assets/css/main.css">


    <title>Employee Management</title>
</head>

<body>
    <!------------ Header ------------>
    <?php
    include BASE_PATH ."/assets/html/header.php";
    ?>



    <!------------ Employee form------------>
    <form class="container" action="<?=$formAction?>" method="post" role="form" targe="_blank">
        <div class="row g-3">
        <input type="hidden" name="id" class="form-control" placeholder="" aria-label="First name" value="<?=$id?>">
            <div class="col">
                <label for=""></label>
                <input type="text" name="name" class="form-control" placeholder="" aria-label="First name" value="<?=$firstName?>">
            </div>
            <div class="col">
                <label for=""></label>
                <input type="text" name="lastName"  class="form-control" placeholder="Last name" aria-label="Last name" value="<?=$lastName?>">
            </div>
        </div>
        <div class="row g-3 mt-2">
            <div class="col">
                <label for=""></label>
                <input type="text" name="email"  class="form-control" placeholder="Example@example.com" aria-label="Email" value="<?=$email?>">
            </div>
            <div class="col">
                <label for=""></label>
                <select class="form-control" name="gender"  id="">
                        <option value="Man">Man</option>
                        <option value="Woman">Woman</option>
                    </select>
            </div>
        </div>
        <div class="row g-3 mt-2">
            <div class="col">
                <label for=""></label>
                <input type="text" name="city"  class="form-control" placeholder="City" aria-label="City" value="<?=$city?>">
            </div>
            <div class="col">
                <label for=""></label>
                <input type="text" name="streetAddress" class="form-control" placeholder="Street Address" aria-label="Street Address" value="<?=$streetAddress?>">
            </div>
        </div>
        <div class="row g-3 mt-2">
            <div class="col">
                <label for=""></label>
                <input type="text" name="state" class="form-control" placeholder="State" aria-label="State" value="<?=$state?>">
            </div>
            <div class="col">
                <label for=""></label>
                <input type="text" name="age" class="form-control" placeholder="Age" aria-label="Age" value="<?=$age?>">
            </div>
        </div>
        <div class="row g-3 mt-2">
            <div class="col">
                <label for=""></label>
                <input type="text" name="postalCode"  class="form-control" placeholder="Postal Code" aria-label="Postal Code" value="<?=$postalCode?>">
            </div>
            <div class="col">
                <label for=""></label>
                <input type="text" name="phoneNumber" class="form-control" placeholder="PhoneNumber" aria-label="PhoneNumber" value="<?=$phoneMumber?>">
            </div>
        </div>
        <button id="btn-submit" type="submit" class="btn btn-info mt-5">Submit</button>
        <button type="submit" class="btn btn-secondary mt-5">Return</button>
    </form>
    

   
    <!------------ Footer ------------>
    <?php
    include BASE_PATH. "/assets/html/footer.php";
    ?>


    <script type="text/javascript" src="/node_modules/jsgrid/jsgrid.min.js"></script>
</body>

</html>
