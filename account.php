<?php include "template/header.php"?>
<?php
//check to see if the data is sent to server, when the user
//clicks on the submit button (login form)
//htmlspecialchars to protect the user from hackers

include "config/db_connect.php";

//to check for errors and output error message
$email = $username = $password = '';
$errors = array(
    'email' => '',
    'username'=>'',
    'password'=>''
);

if (isset($_GET['logout'])) {
    $_SESSION['isLoggedIn'] = false;
    unset($_SESSION['userID']);
    unset($_SESSION['name']);
}


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

    if (!array_filter($errors)) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $sql = "INSERT INTO users(email, username, password) VALUES ('$email', '$username', '$password')";

        if (mysqli_query($conn, $sql)) {
            $query = "SELECT * FROM users WHERE email='$email'";
            $result = $conn->query($query);
            if (!$result) die($conn->error);
            elseif ($result->num_rows) {
                $rows = $result->fetch_array(MYSQLI_NUM);

                $result->close();

                if ($_POST['password'] == $rows[3]) {
                    $_SESSION['isLoggedIn'] = true;
                    $_SESSION['userID'] = $rows[0];
                    $_SESSION['name'] = $rows[1];
                    header('Location: index.php');
                } else {
                    $errors['email'] = "Something went wrong";
                }
            }
        } else {
            echo 'query error: ' . mysqli_error($conn);
        }
    }

}
//end of the POST check

$errorsLogin = [
    'email'=>'',
    'pass'=>''
];

if (isset($_POST['submitLogin'])) {
    if (empty($_POST['emailLogin'])) {
        $errorsLogin['email'] = 'type your email';
    } else {
        $emailLogin = $_POST['emailLogin'];
        if (!filter_var($emailLogin, FILTER_VALIDATE_EMAIL)) {
            $errorsLogin['email'] = 'Email must be a valid email address';
        }

        $query = "SELECT * FROM users WHERE email='$emailLogin'";

        $result = $conn->query($query);
        if (!$result) die($conn->error);
        elseif ($result->num_rows) {
            $rows = $result->fetch_array(MYSQLI_NUM);

            $result->close();

            if ($_POST['passwordLogin'] == $rows[3]) {
                $_SESSION['isLoggedIn'] = true;
                $_SESSION['userID'] = $rows[0];
                $_SESSION['name'] = $rows[1];
                header('Location: index.php');
            } else {
                $errorsLogin['email'] = "Wrong email or password.";
            }
        }
    }
}

    if ($_SESSION['isLoggedIn'] == true) {
        header('Location: index.php');
    }
?>

<!-- LOGIN SECTION -->
<div class="container">
    <section class="container grey-text">
        <form class="login" action="account.php" method="POST">
            <h4 class="center">LOGIN</h4>
            <div class="input-field col s6">
            <input placeholder="Email" name="emailLogin" id="email" type="email" class="validate" value="<?php echo htmlspecialchars($email) ?>"
            style="background-color: white; border: solid 3px #F8C96D; border-radius: 10px;">
                <div class="red-text"><?php echo $errorsLogin['email']; ?></div>
                <span class="helper-text" data-error="wrong" data-success="right"></span>
            </div>

            <div class="input-field col s6">
            <input placeholder="Password" name="passwordLogin" id="password" type="password" class="validate"
                   style="background-color: white; border: solid 3px #F8C96D; border-radius: 10px;">
                <div class="red-text"><?php echo $errorsLogin['pass']; ?></div>
            </div>

            <div class="center">
                <input type="submit" name="submitLogin" value="Login" class="btn brand z-depth-0">
            </div>
        </form>
    </section>

    <!-- REGISTER SECTION -->
    <section class="container grey-text">
        <form class="register" action="account.php" method="POST">
            <h4 class="center">REGISTER</h4>

            <div class="input-field col s6">
                <input placeholder="Username" name="username" id="username" type="text" class="validate" data-length="10" value="<?php echo htmlspecialchars($username) ?>"
                       style="background-color: white; border: solid 3px #F8C96D; border-radius: 10px;">
                <div class="red-text"><?php echo $errors['username']; ?></div>
                <span class="helper-text" data-error="wrong" data-success="right"></span>
            </div>

            <div class="input-field col s6">
                <input placeholder="Email" id="email" name="email" type="email" class="validate" value="<?php echo htmlspecialchars($email) ?>"
                       style="background-color: white; border: solid 3px #F8C96D; border-radius: 10px;">
                <div class="red-text"><?php echo $errors['email']; ?></div>

                <span class="helper-text" data-error="wrong" data-success="right"></span>
            </div>

            <div class="input-field col s6">
                <input placeholder="Password" id="password" name="password" type="password" class="validate"
                       style="background-color: white; border: solid 3px #F8C96D; border-radius: 10px;">
                <div class="red-text"><?php echo $errors['password']; ?></div>
            </div>

            <div class="center">
                <input type="submit" name="submit" value="create" class="btn brand z-depth-0">
            </div>
        </form>
    </section>
</div>

<?php include "template/footer.php" ?>


