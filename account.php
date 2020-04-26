<!--
    todo: This file is intended to have both the sign up and login form.
    todo: Remember to use Materializes form classes!!!
-->

<?php

//check to see if the data is sent to server, when the user
//clicks on the submit button (login form)
//htmlspecialchars to protect the user from hackers


//to check for errors and output error message
$email = $username =$password = '';
$errors = array('email'=>'', 'username'=>'', 'password'=>'');


if(isset($_POST['submit'])) {

//check if the fields are empty
    if (empty($_POST['email'])) {
        $errors['email'] = 'An email is required <br/>';
    } else {
        $email = $_POST['email'];
    }

    if (empty($_POST['username'])) {
        $errors['username'] = 'A username is required <br/>';
    } else {
        $username = ($_POST['username']);
        if (!preg_match('/^[a-zA-Z ]{6,15}$/i', $username)) {
            $errors['username'] = 'Username must be 6-15 chars & alphabatic only';
        }
    }

    if (empty($_POST['password'])) {
        $errors['password'] = 'A password is required <br/>';
    } else {
        $password = ($_POST['password']);
        if (!preg_match('/^[\d\w@-]{8,20}$/i', $password)) {
            $errors['password'] = "Enter a password between 8 - 20";
        }
    }

}

//end of the POST check

?>



<?php include "template/header.php"?>


<style>



</style>

<!-- LOGIN SECTION -->

<section class="container grey-text">
    <form class="login" action="account.php" method="POST">
        <h4 class="center">LOGIN</h4>


        <div class="input-field col s6">
        <input placeholder="Email" id="email" type="email" class="validate" value="<?php echo htmlspecialchars($email) ?>"
        style="background-color: white; border: solid 3px #F8C96D; border-radius: 10px;">
            <div class="red-text"><?php echo $errors['email']; ?></div>

            <span class="helper-text" data-error="wrong" data-success="right"></span>
        </div>



        <div class="input-field col s6">
        <input placeholder="Password" id="password" type="password" class="validate"
               style="background-color: white; border: solid 3px #F8C96D; border-radius: 10px;">
            <div class="red-text"><?php echo $errors['password']; ?></div>

        </div>


        <div class="center">
            <input type="submit" name="submit" value="Login" class="btn brand z-depth-0">
        </div>
        <p class="center" style="color: white; font-weight: lighter;">Don’t have an account? <br> Click here to register! </p>


    </form>
</section>



<!-- REGISTER SECTION -->

<section class="container grey-text">
    <form class="register" action="account.php" method="POST">
        <h4 class="center">REGISTER</h4>

        <div class="input-field col s6">
            <input placeholder="Username" id="username" type="text" class="validate" data-length="10" value="<?php echo htmlspecialchars($username) ?>"
                   style="background-color: white; border: solid 3px #F8C96D; border-radius: 10px;">
            <div class="red-text"><?php echo $errors['username']; ?></div>
            <span class="helper-text" data-error="wrong" data-success="right"></span>
        </div>

        <div class="input-field col s6">
            <input placeholder="Email" id="email" type="email" class="validate" value="<?php echo htmlspecialchars($email) ?>"
                   style="background-color: white; border: solid 3px #F8C96D; border-radius: 10px;">
            <div class="red-text"><?php echo $errors['email']; ?></div>

            <span class="helper-text" data-error="wrong" data-success="right"></span>
        </div>


        <div class="input-field col s6">
            <input placeholder="Password" id="password" type="password" class="validate"
                   style="background-color: white; border: solid 3px #F8C96D; border-radius: 10px;">
            <div class="red-text"><?php echo $errors['password']; ?></div>

        </div>

        <div class="center">
            <input type="submit" name="submit" value="create" class="btn brand z-depth-0">
        </div>

    </form>


</section>
<?php include "template/footer.php" ?>


