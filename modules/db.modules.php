<?php

class Mysql {

    /**'
     * @return void
     * Create connection with database
     */
    function CreateConnectionDB() {
        $server = "localhost";
        $usuario = "root";
        $senha = "adm";
        $dbname = "devIo";

        $conn = self::CheckConnection(new mysqli($server, $usuario, $senha, $dbname));
    }

    /**'
     * @param $conn
     * @return mixed|void
     *
     * Validate if connection with database is successfully
     */
    function CheckConnection($conn) {
        return $conn->connect_error ? die("Connection Failed: " . $conn->connect_error) : $conn;
    }

    /**'
     * @param $conn
     * @return void
     *
     * Close All Mysql Connection
     */
    function CloseConnectionDB($conn) {
        $conn->mysqli_close();
    }
}
