
<?php
session_start();
class DB {
    // Properties
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "myharvest";
    private $session_users;

    // Create connection
    public function mysqli() {

        $mysqli = new mysqli(
            $this->servername,
            $this->username,
            $this->password,
            $this->database
        );

        if ($mysqli -> connect_errno) {
            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
            exit();
        }

        return $mysqli;
    }

    public function get($sql) {
        return $this->mysqli()->query($sql);
    }

    public function post($sql) {
        return $this->mysqli()->query($sql);
    }

    public function update($sql) {
        return $this->mysqli()->query($sql);
    }


    public function login($REQ){
        // Request filtering
        $con = $this->mysqli();
        $filtered_email = $con->real_escape_string($_POST['mail']);
        $filtered_password = $con->real_escape_string($_POST['password']);

        $loginquery = "SELECT * FROM user WHERE email='".$filtered_email."' AND password='".$filtered_password."' LIMIT 1";
        $result = $this->get($loginquery);


        // check if reset does have any count of rows
        if(gettype($result->fetch_row()) == 'NULL'){
            echo json_encode((object) ["loggined_in" => false, "message" => 'Credentials not valid']);
        }else{
            $this->session_users = $result -> fetch_all(MYSQLI_ASSOC);
            $_SESSION["session_users"] = $this->session_users;
            $_SESSION["loggined_in"] = true;
            echo json_encode((object) ["loggined_in" => true, "message" => 'Logged in successfully']);
        }
    }
    
}
?>
