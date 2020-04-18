<?php

    /**
     * Class Db
     */
    class Db
    {
        /**
         * @var mysqli
         */
        public $conn;

        /**
         * Db constructor.
         * @param string $servername
         * @param string $username
         * @param string $password
         */
        public function __construct($servername = '', $username = '', $password = '')
        {
            $this->conn = new mysqli($servername, $username, $password);
            if ( $this->conn->connect_error) {
                die("Connection failed: " .  $this->conn->connect_error);
            }
        }



    }
