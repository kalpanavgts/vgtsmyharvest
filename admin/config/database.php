
<?php
class DB {
    // Properties
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "mcproduction";

    // Create connection
    private function mysqli() {

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


    public function login($email,$password){
        $loginquery = "SELECT id FROM user WHERE email='".$email."' AND password='".$password."'"
        $result = $this->get($loginquery);

        if($result->field_count();){

        }else{
            
        }

    }



}
?>
