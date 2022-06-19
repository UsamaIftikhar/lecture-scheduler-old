<?php
include_once('./database/config.php');
?>
<?php
if (isset($_POST['submit'])) {
    echo 'hello';
    $email = $_POST['email'];
    $pass = $_POST['password'];
    // $pass = password_hash($pass, PASSWORD_DEFAULT);

    // echo $email,$pass;
    $select = $connection->prepare("Select *from user where email='$email' and password='$pass' ");

    $select->setFetchMode(PDO::FETCH_ASSOC);

    $select->execute();

    $data = $select->fetch();

    if ($data['email'] != $email and $data['password'] != $pass) {
        header("location:login1.php");
    } else {
        $_SESSION['email'] = $data['email'];
        $_SESSION['password'] = $data['password'];

        header("location:profile.php");
    }
}
?>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Lecture Scheduler - Signin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Inline validation is very easy to implement using the Architect Framework.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="./main.css" rel="stylesheet">
    <link href="./assets/registration.css" rel="stylesheet">
</head>
</head>

<body>
    <section class="bg-image" style="background-image: url('./assets/images/background.png');">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px; margin-top: 150px; margin-bottom: 150px;">
                            <div class="card-body p-5 ">
                                <h2 class="text-uppercase text-center">Sign In to Scheduler</h2>
                                <div class="text-gray-400 fw-bold fs-4 mb-3 d-flex justify-content-center">New Here?&nbsp
                                    <a href="../../demo9/dist/authentication/flows/basic/sign-in.html" class="link-primary fw-bolder">create an account</a>
                                </div>
                                <form method="POST" class="needs-validation" novalidate>
                                    <div class="mb-3">
                                        <label for="validationTooltip02">Email</label>
                                        <input type="email" name="email" class="form-control" id="validationTooltip02" placeholder="Email" required autocomplete="nope" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="validationTooltip02">Password</label>
                                        <input type="password" name="password" class="form-control" id="validationTooltip02" placeholder="Password" required autocomplete="nope" />
                                    </div>


                                    <div class="d-flex justify-content-center">
                                        <button type="submit" name="submit" id="submit" class="btn btn-primary btn-block btn-lg gradient-custom-4 text-body">Continue as Student</button>
                                    </div>

                                    <div>
                                        <p class="option-color d-flex justify-content-center pt-2 pb-2 mb-0">OR</p>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" name="teacher" class="btn btn-primary btn-block btn-lg gradient-custom-4 text-body">Continue as Teacher</button>
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