<!DOCTYPE html>

<?php
    include("includes/config.php");
    include("includes/classes/account.php");
    include("includes/classes/constants.php");
        $account = new Account($con);

    include("includes/handlers/register-handler.php");
    include("includes/handlers/login-handler.php");

    function getInputValue($name) {
        // takes a name of the field and remmembers it fif the field was set
        if (isset($_POST[$name])) {
            echo $_POST[$name];
        }
    }
?>

<html>
    <head>
        <title>Welcome to SpotClone</title>
    </head>
    <body>
        <div id="inputContainer">

            <form id="loginForm" action="register.php" method="POST">
                <h2>Login to your account</h2>
                <p>
                    <?php echo $account->getError(Constants::$loginFailed); ?>
                    <label for="loginUsername">Username</label>
                    <input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. User" required>
                </p>

                <p>
                    <label for="loginPassword">Password</label>
                    <input id="loginPassword" name="loginPassword" type="password" required>
                </p>

                <button type="submit" name="loginButton">LOG IN</button>
            </form>

            <form id="registerForm" action="register.php" method="POST">
                <h2>Create your free account</h2>
                <p>
                    <?php echo $account->getError(Constants::$usernameLength); ?>
                    <?php echo $account->getError(Constants::$usernameTaken); ?>
                    <label for="username">Username</label>
                    <input id="username" name="username" type="text" placeholder="e.g. User" value="<?php getInputValue('username') ?>" required>
                </p>

                <p>
                    <?php echo $account->getError(Constants::$firstNameLength); ?>
                    <label for="firstName">First name</label>
                    <input id="firstName" name="firstName" type="text" placeholder="e.g. Frank" value="<?php getInputValue('firstName') ?>" required>
                </p>

                <p>
                    <?php echo $account->getError(Constants::$lastNameLength); ?>
                    <label for="lastName">Last name</label>
                    <input id="lastName" name="lastName" type="text" placeholder="e.g. Ocean" value="<?php getInputValue('lastName') ?>" required>
                </p>

                <p>
                    <?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
                    <?php echo $account->getError(Constants::$emailInvalid); ?>
                    <?php echo $account->getError(Constants::$emailTaken); ?>
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" placeholder="e.g. frank.ocean@gmail.com" value="<?php getInputValue('email') ?>" required>
                </p>

                <p>
                    <label for="email2">Confirm email</label>
                    <input id="email2" name="email2" type="email" placeholder="e.g. frank.ocean@gmail.com" value="<?php getInputValue('email2') ?>" required>
                </p>

                <p>
                    <?php echo $account->getError(Constants::$passwordsDoNotMatch); ?>
                    <?php echo $account->getError(Constants::$passwordsNotAlphanumeric); ?>
                    <?php echo $account->getError(Constants::$passwordsLength); ?>
                    <label for="password">Password</label>
                    <input id="password" name="password" type="password" required>
                </p>

                <p>
                    <label for="password2">Confirm password</label>
                    <input id="password2" name="password2" type="password" required>
                </p>

                <button type="submit" name="registerButton">SIGN UP</button>
            </form>
        </div>
    </body>
</html>
