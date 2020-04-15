<?php

    class Account {

        private $con;
        private $errorArray;

        public function __construct($con) {
            $this->con = $con;
            $this->errorArray = array();
            // This sets the $errorArray variable to an empty array
        }

        public function login($un, $pw) {
            $pw = md5($pw);

            $query = mysqli_query($this->con, "SELECT * FROM users WHERE username='$un' AND password='$pw'");

            if (mysqli_num_rows($query) == 1) {
                return true;
            }
            else {
                array_push($this->errorArray, Constants::$loginFailed);
                return false;
            }
        }

        public function register($un, $fn, $ln, $em, $em2, $pw, $pw2) {
            $this->validateUsername($un);
            $this->validateFirstName($fn);
            $this->validateLastName($ln);
            $this->validateEmails($em, $em2);
            $this->validatePasswords($pw, $pw2);

            if (empty($this->errorArray == true)) {
                // Insert into database
                return $this->insertUserDetails($un, $fn, $ln, $em, $pw);
            }

            else {
                return false;
            }
        }

        public function getError($error) {
            if (!in_array($error, $this->errorArray)) {
                // Checks to see if the error passed in, is in the array
                $error = "";
            }
            return "<span class='errorMessage'>$error</span>";
        }

        private function insertUserDetails($un, $fn, $ln, $em, $pw) {
            // md5 is a simple password encryption function
            $encryptedPW = md5($pw);
            $profilePic = "assets/images/profile_pics/default_star.png";
            $date = date("Y-m-d");
            // the parameters match what the columns are on my database users, and it returns true if it worked or false if it didn't
            $result = mysqli_query($this->con, "INSERT INTO users VALUES ('', '$un', '$fn', '$ln', '$em', '$encryptedPW', '$date', '$profilePic')");

            return $result;
        }

        // The following functions can only be called from inside this class
        private function validateUsername($un) {
            if (strlen($un) > 25 || strlen($un) < 5) {
                array_push($this->errorArray, Constants::$usernameLength);
                return;
            }

            $checkUsernameQuery = mysqli_query($this->con, "SELECT username FROM users WHERE username='$un'");
            if (mysqli_num_rows($checkUsernameQuery) != 0) {
                array_push($this->errorArray, Constants::$usernameTaken);
                return;
            }
        }
        
        private function validateFirstName($fn) {
            if (strlen($fn) > 25 || strlen($fn) < 1) {
                array_push($this->errorArray, Constants::$firstNameLength);
                return;
            }
        }
        
        private function validateLastName($ln) {
            if (strlen($ln) > 25 || strlen($ln) < 2) {
                array_push($this->errorArray, Constants::$lastNameLength);
                return;
            }
        }
        
        private function validateEmails($em, $em2) {
            if ($em != $em2) {
                array_push($this->errorArray, Constants::$emailsDoNotMatch);
                return;
            }

            if (!filter_var($em, FILTER_VALIDATE_EMAIL)) {
                // Checks to make sure the email is valid, with endings such as .com, .edu, etc.
                array_push($this->errorArray, Constants::$emailInvalid);
                return;
            }

            $checkEmailQuery = mysqli_query($this->con, "SELECT email FROM users WHERE email='$em'");
            if (mysqli_num_rows($checkEmailQuery) != 0) {
                array_push($this->errorArray, Constants::$emailTaken);
                return;
            }
        }
        
        private function validatePasswords($pw, $pw2) {
            if ($pw != $pw2) {
                array_push($this->errorArray, Constants::$passwordsDoNotMatch);
                return;
            }

            if (preg_match('/[^A-za-z0-9]/', $pw)) {
                array_push($this->errorArray, Constants::$passwordsNotAlphanumeric);
                return;
            }

            if (strlen($pw) > 28 || strlen($pw) < 7) {
                array_push($this->errorArray, Constants::$passwordsLength);
                return;
            }
        }
        

    }

?>
