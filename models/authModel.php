<?php

    class AuthModel{
        private $db;

        public function __construct() {
            $this->db = new PDO('mysql:host=localhost;'.'dbname=muralismo;charset=utf8', 'root', '');
        }

        public function getUserByEmail($email) {
            $query = $this->db->prepare("SELECT * FROM administrador WHERE email = ?");
            $query->execute([$email]);
            return $query->fetch(PDO::FETCH_OBJ);
        }
    }