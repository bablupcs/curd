<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATIONPAGE</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
    .dg_err {
        color: red;
    }
    </style>
</head>

<body>
    <?php
$first_name = $last_name = $email = $gender = $password = $password2 = $address = $address2 =$city = $state = $zip = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $err = array();
    $first_name = trim($_POST["first_name"]);
    $last_name = trim($_POST["last_name"]);
    $email = trim($_POST["email"]);
    $gender = isset($_POST["gender"]) ? $_POST["gender"] : false;
    $password = trim($_POST["password"]);
    $password2 = trim($_POST["password2"]);
    $address= trim($_POST["address"]);
    $address2= trim($_POST["address2"]);
    $city= trim($_POST["city"]);
    $state= trim($_POST["state"]);
    $zip= trim($_POST["zip"]);

    if (!$first_name) {
        $err['name'] = '*Name should not be empty!';
    }
    if (!$last_name) {
        $err['last_name'] = '*Last name should not be empty!';
    }
    if (!$email) {
        $err['email'] = '*Email name should not be empty!';
    }
    if (!$gender) {
        $err['gender'] = '*Gender seleted!';
    }
    if (!$password) {
        $err['password'] = '*Enter the password';
    }
    if (!$password2) {
        $err['password2'] = '* Again';
    }
    if (!$address2) {
        $err['address'] = '*Address name should not be empty!';
    }
    if (!$address2) {
        $err['address2'] = '* Again';
    }
    if (!$city) {
        $err['city'] = '* City name should not be empty!';
    }
    if (!$state) {
        $err['state'] = '* seleted!';
    }
    if (!$zip) {
        $err['zip'] = '* Enter the Code';
    }
}
?>
    <div class="container">
        <div class="row">
            <div class="bs-regform">
                <h2 class="h2 text-center mb-4">STUDENT REGISTRATION FORM</h2>
                        <!--First Name-->
                <form class="row g-3" name="dg_registration_form" method="post"
                    action="<?php echo ($_SERVER   ["PHP_SELF"]);?>">
                    <div class="col-md-6">
                        <label for="first_name">First_name</label>
                        <input type="text" class="form-control" placeholder="First name" id="first_name"
                            name="first_name"
                            value="<?php if(isset($first_name) && $first_name){ echo($first_name); } ?>">
                        <?php
                            if (isset($err['name']) && $err['name']) {
                                ?>
                        <div class="dg_err" id="f_name_err"><?php echo $err['name']; ?> </div>
                        <?php } ?>
                    </div>
                     <!--Last Name-->
                    <div class="col-md-6">
                        <label for="last_name">Last name</label>
                        <input type="text" class="form-control" placeholder="Last name" id="last_name" name="last_name"
                            value="<?php if(isset($last_name) && $last_name){ echo($last_name); } ?>">
                        <?php if (isset($err['last_name']) && $err['last_name']) { ?>
                        <div class="dg_err" id="l_name_err"><?php echo $err['last_name'];?></div>
                        <?php } ?>
                    </div>
                     <!--email.com-->
                    <div class="col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" placeholder="abc@mail.com" id="email" name="email"
                            value="<?php if(isset($email) && $email){ echo($email); } ?>">
                        <?php
                          if (isset($err['email']) && $err['email']){
                            ?>
                        <div class="dg_err" id="email_err"><?php echo $err ['email'];?></div>
                        <?php } ?>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label">Gender</label><br>
                        <div class="form-check form-check-inline dg-gender">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline dg-gender">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                        <div class="form-check form-check-inline dg-gender">
                            <input class="form-check-input" type="radio" name="gender" id="other" value="other">

                            <label class="form-check-label" for="other">Other</label>
                        </div>
                        <?php
                            if(isset($err['gender']) && ($err['gender'])){
                           ?>
                        <div class="dg_err" id="gender_err"><?php echo $err['gender'];?> </div>
                        <?php }?>
                    </div>
                     <!--Password-->
                    <div class="col-md-6">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" placeholder="password" id="password" name="password"
                            value="<?php if(isset($password) && $password){ echo($password); } ?>">
                        <?php
                            if (isset ($err['password']) && ($err['password'])){
                                ?>
                        <div class="dg_err" id="pwd_err"> <?php echo $err['password'];?></div>
                        <?php } ?>
                    </div>
                    <div class="col-md-6">
                        <label for="password">Confirm Password</label>
                        <input type="password2" class="form-control" placeholder="Password" id="password2"
                            name="password2" value="<?php if(isset($password2) && $password){ echo($password2); } ?>">
                        <?php
                           if (isset ($err['password2']) && ($err['password2'])){
                            ?>
                        <div class="dg_err" id="pwd2_err"> <?php echo $err['password2'];?></div>
                        <?php } ?>
                    </div>
                     <!--Address-->
                    <div class="col-12">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="Full Address"
                            value="<?php if(isset($address) && $address){ echo($address); } ?>">
                        <?php
                             if (isset($err['address']) && ($err['address'])){
                            ?>
                        <div class="dg_err" id="add_err"> <?php echo $err['address'];?></div>
                        <?php } ?>
                    </div>
                    <div class="col-12">
                        <label for="address2" class="form-label">Address 2</label>
                        <input type="text" class="form-control" name="address2" id="address2" placeholder="Full Address"
                            value="<?php if(isset($address2) && $address2){ echo($address2); } ?>">
                        <?php
                           if(isset($err['address2']) && ($err['address2'])){
                            ?>
                        <div class="dg_err" id="add2_err"> <?php echo $err['address2'];?></div>
                        <?php } ?>
                    </div>
                     <!--City-->
                    <div class="col-md-6">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" name="city" id="city" placeholder="City Name"
                            value="<?php if(isset($city) && $city){ echo($city); } ?>">
                        <?php
                           if(isset($err['city']) && ($err['city'])){
                            ?>
                        <div class="dg_err" id="city_err"><?php echo $err['city'];?></div>
                        <?php } ?>
                    </div>
                     <!--State-->
                    <div class="col-md-4">
                        <label for="state" class="form-label">State</label>
                        <select id="state" name="state" class="form-select">
                            <option value="0" selected>---Select state---</option>
                            <option value="delhi">1.Delhi</option>
                            <option value="uttar pradesh">2.Uttar pradesh</option>
                            <option value="bihar">3.Bihar</option>
                            <option value="punjab">4.Punjab</option>
                        </select>
                        <?php
                            if(isset($err['state']) && ($err['state'])){
                                ?>
                        <div class="dg_err" id="state_err"><?php echo $err['state'];?></div>
                        <?php } ?>
                    </div>
                     <!--pin code-->
                    <div class="col-md-2">
                        <label for="zip" class="form-label">Zip</label>
                        <input type="text" class="form-control" name="zip" id="zip" placeholder="0-6"
                            value="<?php if(isset($zip) && $zip){ echo($zip); } ?>">
                        <?php
                          if(isset($err['zip'])&& ($err['zip'])){
                            ?>
                        <div class="dg_err" id="zip_err"><?php echo $err['zip'];?></div>
                        <?php } ?>
                    </div>
                     <!--checkbox-->
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dg_check" id="dg_check" value="1">
                            <label class="form-check-label" for="dg_check">
                                Check me out
                            </label>
                        </div>
                        <div class="dg_err" id="checkbox_err"></div>
                    </div>
                     <!--submit-->
                    <div class="col-12">
                        <button type="submit" class="btn btn-outline-primary" name="submit">Sign in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
