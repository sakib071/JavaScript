<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Registration form</title>
</head>

<body>
    <div class="container">
        <div class="display-3 mt-5">
            Registration form
        </div>
        <br>
        <form action="registration.php" method="post" class="card p-3">
            <div class="row g-3">
                <div class="col-md-6">
                    <input type="text" class="form-control" name="fname" placeholder="First name">
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="lname" placeholder="Last name">
                </div>

                <div class="col-md-6">
                    <label class="gender">Gender</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="Male">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="Female">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Female
                        </label>
                    </div>
                </div>

                <div class="col-md-6">
                    <select name="blood">
                        <option disabled selected value="Select Blood Group">Select Blood Group</option>
                        <option>A+</option>
                        <option>A-</option>
                        <option>B+</option>
                        <option>B-</option>
                        <option>AB+</option>
                        <option>AB-</option>
                        <option>O+</option>
                        <option>O-</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <input type="number" class="form-control" name="phone" placeholder="Phone">
                </div>
                <div class="col-md-12">
                    <input type="text" class="form-control" name="email" placeholder="Email">
                </div>

                <h5>Address</h5>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="state" placeholder="State">
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="region" placeholder="Region">
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="country" placeholder="Country">
                </div>
                <div class="col-mb-3">
                    <input type="submit" class="btn btn-success" id="subbtn" name="subbtn" action="">
                </div>
            </div>

        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</html>

<?php
$submitbutton = $_POST['subbtn'];

/*if(!$submitbutton)
    {
        die("not found!".mysqli_connect_error());
    }
    else
    {
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $phone=$_POST['phone'];
        $gender=$_POST['gender'];
        $blood=$_POST['blood'];
        $email=$_POST['email'];
        $state=$_POST['state'];
        $region=$_POST['region'];
        $country=$_POST['country'];


        $connection = mysqli_connect("localhost","root","","registration_form_c193055");
        mysqli_query($connection,"INSERT INTO registration_form(fname,lname,phone,gender,blood,email,state,region,country)values('$fname','$lname','$phone','$gender','$blood','$email','$state','$region','$country')");

        echo "Submitted!" ;
        $connection->close();
    }*/


$connection = mysqli_connect("localhost", "root", "", "registration_form_c193055");

if (isset($_POST['subbtn'])) {
    if (!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['phone']) && !empty($_POST['gender']) && !empty($_POST['blood']) && !empty($_POST['email']) && !empty($_POST['state']) && !empty($_POST['region']) && !empty($_POST['country'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $blood = $_POST['blood'];
        $email = $_POST['email'];
        $state = $_POST['state'];
        $region = $_POST['region'];
        $country = $_POST['country'];

        //$connection = mysqli_connect("localhost", "root", "", "registration_form_c193055");
        //mysqli_query($connection, "INSERT INTO registration_form(fname,lname,phone,gender,blood,email,state,region,country)values('$fname','$lname','$phone','$gender','$blood','$email','$state','$region','$country')");

        $query = "insert into registration_form(fname,lname,phone,gender,blood,email,state,region,country) values('$fname','$lname','$phone','$gender','$blood','$email','$state','$region','$country')";

        $run =  mysqli_query($connection, $query);

        if ($run) {
            echo "Submitted";
        } else {
            echo "Not submitted";
        }
    } else {
        echo "all fields required";
    }
}
?>