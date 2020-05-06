<?php

    class Artist {

        private $con;
        private $id;

        public function __construct($con, $id) {
            $this->con = $con;
            $this->id = $id;
        }

        public function getName() {
            // Had to change from $con to $this->con because in this class it's not a local variable.
            $artistQuery = mysqli_query($this->con, "SELECT name FROM artists WHERE id='$this->id'");
            $artist = mysqli_fetch_array($artistQuery);
            return $artist['name'];
        }
    }
?>
