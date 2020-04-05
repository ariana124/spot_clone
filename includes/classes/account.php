<?php

    class Account {

        private $errorArray;

        public function __construct() {
            $this->errorArray = array();
            // This sets the $errorArray variable to an empty array
        }

        public function register($un, $fn, $ln, $em, $em2, $pw, $pw2) {
            $this->validateUsername($un);
            $this->validateFirstName($fn);
            $this->validateLastName($ln);
            $this->validateEmails($em, $em2);
            $this->validatePasswords($pw, $pw2);

            if (empty($this->errorArray == true)) {
                // Insert into database
                return true;
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

        // The following functions can only be called from inside this class
        private function validateUsername($un) {
            if (strlen($un) > 25 || strlen($un) < 5) {
                array_push($this->errorArray, Constants::$usernameLength);
                return;
            }

            // If statement to check if username exists
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

            // If statement to check that username hasn't been used

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
