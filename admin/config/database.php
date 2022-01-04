
<?php
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


    public function login($REQ){
        // Request filtering
        $con = $this->mysqli();
        $filtered_email = $con->real_escape_string($_POST['email']);
        $filtered_password = $con->real_escape_string($_POST['password']);

        $loginquery = "SELECT id FROM user WHERE email='".$filtered_email."' AND password='".$filtered_password."' LIMIT 1";
        $result = $this->get($loginquery);

        if($result->field_count()){
            $this->session_users = $result -> fetch_assoc();
            $_SESSION["session_users"] = $this->session_users;
            $_SESSION["loggined_in"] = true;
            echo json_encode((object) ["loggined_in" => true, "message" => 'Message has been sent']);
        }else{
            echo json_encode((object) ["loggined_in" => false, "message" => 'Credentials not valid']);
        }
    }
    
}
?>
