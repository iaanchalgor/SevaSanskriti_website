<?php
require_once('header.php');
require_once('connection.php');

$fnm = $lnm = $em = $phno = $pw = $cpw =  $bdate = $address =$id= "";
$gen = "Male";
$fnmError = $lnmError = $emError = $phnoError = $pwError = $cpwError = $genError = $bdateError = $addressError = "";

if (isset($_REQUEST['id'])) {

  $id = $_REQUEST['id'];
  

  }
if (isset($_POST['btnRegister'])) {
  $fnm = $_POST['fname'];
  $lnm = $_POST['lname'];
  $em = $_POST['email'];
  $phno = $_POST['phno'];
  $gen = $_POST['gen'];
  $bdate = $_POST['birthdate'];
  $address = $_POST['address'];
  if (empty($fnm)) {
    $fnmError = "Required *";
  } else {
    if (!preg_match('/^[a-zA-Z]+$/', $fnm)) {
      $fnmError = "Please Enter Valid Value";
    }
  }
  if (empty($lnm)) {
    $lnmError = "Required *";
  } else {
    if (!preg_match('/^[a-zA-Z]+$/', $lnm)) {
      $lnmError = "Please Enter Valid Value";
    }
  }
  if (empty($em)) {
    $emError = "Required *";
  } else {
    if (!filter_var($em, FILTER_VALIDATE_EMAIL)) {
      $emError = "Please Enter Valid Value";
    }
  }
  if (empty($phno)) {
    $phnoError = "Required *";
  } else {
    if (strlen($phno) != 10) {
      $phnoError = "Please Enter Valid Value";
    }
  }
  if (empty($pw)) {
    $pwError = "Required *";
  } else {
    if (strlen($pw) <= 6) {
      $pwError = "Password shoud be greater than 6 characters";
    }
  }
  if (empty($cpw)) {
    $cpwError = "Required *";
  } else {
    if (strcmp($cpw, $pw) != 0) {
      $cpwError = "Both password should be same";
    }
  }
  if (empty($bdate)) {
    $bdateError = "Required *";
  } else {
    $a = countAge($bdate);
    if ($a < 18) {
      $bdateError = "Age should be greater than 18";
    }
  }
  if (empty($address)) {
    $addressError = "Required *";
  }

  if ($fnmError == "" && $lnmError == "" && $emError == "" && $phnoError == "" & $pwError == "" && $cpwError == "" && $genError == "" && $bdateError == "" && $addressError == "") {
    
    //edit code

  }
}

function countAge($date)
{
  $birthdate = new DateTime($date);

  $currentDate = new DateTime();

  $age = $currentDate->diff($birthdate)->y;

  return $age;
}

?>
<div class="container">
  <div class="brownText fs-1 my-1 fw-bold text-center">EDIT PROFILE</div>
  <!-- <br /> -->
  <form class="contactForm" method="POST" id="registrationForm">
    <div class="row">
      <div class="col-sm-6 mb-2">
        <input type="text" name="fname" class="form-control form-control-lg" placeholder="First Name" value="<?php echo $fnm ?>" />
        <label for="" class="text-danger"><?php echo $fnmError; ?></label>
      </div>
      <div class="col-sm-6">
        <input type="text" name="lname" class="form-control form-control-lg" placeholder="Last Name" value="<?php echo $lnm ?>" />
        <label for="" class="text-danger"><?php echo $lnmError; ?></label>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6 mb-2">
        <input type="text" name="email" class="form-control form-control-lg" placeholder="Email Address" value="<?php echo $em ?>" />
        <label for="" class="text-danger"><?php echo $emError; ?></label>
      </div>
      <div class="col-sm-6 mb-3 ">

        <input type="text" name="phno" id="number" class="form-control form-control-lg formInputColor py-2 " style="border: none;" placeholder="Phone No." value="<?php echo $phno ?>" />
        <label for="" class="text-danger"><?php echo $phnoError; ?></label>
      </div>
    </div>
   
    <div class="row">
      <div class="col-sm-6 fs-5 ">
        <span>Gender :</span>
        <input type="radio" id="sub" name="gen" <?php echo $gen == 'Male' ? 'checked' : ''; ?> value="Male" />
        Male
        <input type="radio" id="sub" name="gen" <?php echo $gen == 'Female' ? 'checked' : ''; ?> value="Female" />
        Female
        <input type="radio" id="sub" name="gen" <?php echo $gen == 'Other' ? 'checked' : ''; ?> value="Other" />
        Other
      </div>
      <div class="col-sm-6 d-flex align-items-center ">

        <span class="fs-5 px-1">Birthdate:</span>
        <input type="date" id="sub" name="birthdate" class="form-control flex-grow-1 formInputColor" value="<?php echo $bdate ?>" />

      </div>
      <div class="row">
        <div class="col-sm-6 fs-5 mb-4"></div>
        <div class="col-sm-6 fs-5 mb-4 "><label for="" class="text-danger px-1" style="margin-left:105px;font-size: 16px;"><?php echo $bdateError; ?></label></div>
      </div>

    </div>
    <div class="row">
      <div class="col-sm-12">
        <textarea class="form-control form-control-lg " name="address" id="msg" rows="5" placeholder="Address" value="<?php echo $address ?>"><?php echo $address; ?></textarea>
        <label for="" class="text-danger px-1"><?php echo $addressError; ?></label>
      </div>
    </div>
    <!-- <input type="checkbox" name="tc" id="tc" />
      <label for="tc"
        >Accept
        <a class="contactLink" href="../php/terms.php">Terms & Conditions</a>
        And Privacy Policy.</label
      ><br /><br /> -->

    <center>
      <label for="" id="err" class="text-danger"></label>
    </center>
    <center>
      <button type="submit" name="btnRegister" class="formBtn px-5 mb-2 fs-5">
        Edit
      </button>
      
    </center>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>const passwordField = document.getElementById("password");
const togglePassword = document.querySelector(".password-toggle-icon i");

togglePassword.addEventListener("click", function () {
  if (passwordField.type === "password") {
    passwordField.type = "text";
    togglePassword.classList.remove("fa-eye");
    togglePassword.classList.add("fa-eye-slash");
  } else {
    passwordField.type = "password";
    togglePassword.classList.remove("fa-eye-slash");
    togglePassword.classList.add("fa-eye");
  }
});
</script>
</body>

</html>