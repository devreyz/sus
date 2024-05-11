<?php
class DataBase
{
    public function getConection()
    {

        $conn = new mysqli('localhost', 'root', '', "sis-admin");
        return $conn;
        if ($conn->connect_error) {

            die("Conexão Falohu: " . $conn->connect_error);
        } else {
            return $conn;
        }
    }
}
