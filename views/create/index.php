<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.min.css" integrity="sha512-o/MhoRPVLExxZjCFVBsm17Pkztkzmh7Dp8k7/3JrtNCHh0AQ489kwpfA3dPSHzKDe8YCuEhxXq3Y71eb/o6amg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Document</title>
</head>
<body>
<?php

    ?>
    <!------------ Employee form------------>
    <form class="container" action="http://localhost:8080/php-employee-management-v2/employee/createEmployee" method="post" role="form" targe="_blank">
        <div class="row g-3">
            <div class="col">
                <label for=""></label>
                <input type="text" name="name" class="form-control" placeholder="First name" aria-label="First name">
            </div>
            <div class="col">
                <label for=""></label>
                <input type="text" name="lastName"  class="form-control" placeholder="Last name" aria-label="Last name">
            </div>
        </div>
        <div class="row g-3 mt-2">
            <div class="col">
                <label for=""></label>
                <input type="text" name="email"  class="form-control" placeholder="Example@example.com" aria-label="Email">
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
                <input type="text" name="city"  class="form-control" placeholder="City" aria-label="City">
            </div>
            <div class="col">
                <label for=""></label>
                <input type="text" name="streetAddress" class="form-control" placeholder="Street Address" aria-label="Street Address">
            </div>
        </div>
        <div class="row g-3 mt-2">
            <div class="col">
                <label for=""></label>
                <input type="text" name="state" class="form-control" placeholder="State" aria-label="State">
            </div>
            <div class="col">
                <label for=""></label>
                <input type="text" name="age" class="form-control" placeholder="Age" aria-label="Age">
            </div>
        </div>
        <div class="row g-3 mt-2">
            <div class="col">
                <label for=""></label>
                <input type="text" name="postalCode"  class="form-control" placeholder="Postal Code" aria-label="Postal Code">
            </div>
            <div class="col">
                <label for=""></label>
                <input type="text" name="phoneNumber" class="form-control" placeholder="PhoneNumber" aria-label="PhoneNumber">
            </div>
        </div>
        <button id="btn-submit" type="submit" class="btn btn-info mt-5">Submit</button>
        <button type="submit" class="btn btn-secondary mt-5">Return</button>
    </form>
    
</body>
</html>