<?php
include_once('./database/config.php');
?>
<?php
try {
    if (isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        echo 'hello';

        $sql = "INSERT INTO user(fname,lname,email,password,type) VALUES(:fname,:lname,:email,:password,:type)";
        $insert = $connection->prepare($sql);

        $data = [
            ':fname' => $fname,
            ':lname' => $lname,
            ':email' => $email,
            ':password' => password_hash($pass, PASSWORD_DEFAULT),
            ':type' => 'student'
        ];

        $result = $insert->execute($data);
        //   if($result){
        //       echo 'Successfully saved.';
        //   }else{
        //       echo 'There were erros while saving the data.';
        //   }
    }
} catch (Exception $e) {
    echo $e;
}

// }else{
// 	echo 'No data';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Lecture Scheduler - Signup</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Inline validation is very easy to implement using the Architect Framework.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="./main.css" rel="stylesheet">
    <link href="./assets/registration.css" rel="stylesheet">
</head>
</head>

<body>
    <div>

    </div>
    <section class="bg-image" style="background-image: url('./assets/images/background.png');">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="d-flex justify-content-center heading">
                            <h2>Teacher Signup</h2>
                        </div>
                        <div class="card" style="border-radius: 15px; margin-top: 10px; margin-bottom: 150px;">
                            <div class="card-body p-5 ">
                                <h2 class="text-uppercase text-center">Create an account</h2>
                                <div class="text-gray-400 fw-bold fs-4 mb-5 d-flex justify-content-center">Already have
                                    an account?&nbsp
                                    <a href="../../demo9/dist/authentication/flows/basic/sign-in.html" class="link-primary fw-bolder">Sign in here</a>
                                </div>
                                <form class="needs-validation" novalidate action="student-signup.php" method="POST">

                                    <div class="mb-3">
                                        <label for="validationTooltip02">First name</label>
                                        <input type="text" class="form-control" name="fname" placeholder="First name" required autocomplete="nope" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="validationTooltip02">Last name</label>
                                        <input type="text" class="form-control" name="lname" placeholder="Last name" required autocomplete="nope" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="validationTooltip02">Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="Email" required autocomplete="nope" />
                                    </div>
                                    <div class="form-group" id="password11">
                                        <div class="mb-3">
                                            <label for="validationTooltip02">Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Password" required autocomplete="nope" id="pass1" required minlength="6" onkeyup="checkPass(); return false;" />
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div id="error-nwl"></div>
                                        <div class="form-group" id="password22">
                                            <label for="validationTooltip02">Confirm Password</label>
                                            <input type="password" class="form-control" name="confirm_password" placeholder="Re-enter Password" required autocomplete="nope" id="pass2" required minlength="6" onkeyup="checkPass(); return false;" />

                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" name="submit" id="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                                    </div>


                                </form>
                                <script>
                                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                                    (function() {
                                        'use strict';
                                        window.addEventListener('load', function() {
                                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                            var forms = document.getElementsByClassName('needs-validation');
                                            // Loop over them and prevent submission
                                            var validation = Array.prototype.filter.call(forms, function(form) {
                                                form.addEventListener('submit', function(event) {
                                                    if (form.checkValidity() === false) {
                                                        event.preventDefault();
                                                        event.stopPropagation();
                                                    }
                                                    form.classList.add('was-validated');
                                                }, false);
                                            });
                                        }, false);
                                    })();


                                    function checkPass() {
                                        var pass1 = document.getElementById('pass1');

                                        var pass2 = document.getElementById('pass2');
                                        var message = document.getElementById('error-nwl');

                                        if (pass1.value.length > 5) {
                                            message.innerHTML = ""
                                        } else {
                                            message.style.color = "#ff6666";
                                            message.innerHTML = " Password length should be more than 6 digits!"
                                            return;
                                        }

                                        if (pass1.value == pass2.value) {
                                            document.getElementById('submit').disabled = false;
                                            message.innerHTML = ""
                                        } else {
                                            document.getElementById('submit').disabled = true;

                                            message.style.color = "#ff6666";
                                            message.innerHTML = " These passwords don't match!"
                                        }
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>