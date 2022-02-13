<?php

class db{
    private $sName = "localhost";
    private $uName = "hjuzati";
    private $pw = "WorldNeeds1@me.anytime";
    private $dbname = "falcon";
    protected $conn;

    public function __construct(){
        $this->conn = new mysqli($this->sName, $this->uName,$this->pw,$this->dbname);//db connection
    }
    public function getConnection(){
        return $this->conn;
    }
}

class Execute{
    public $numOfRows;
    public function __construct(){}

    public function execute($query){
        $conn = new db(); $conn = $conn->getConnection();
        $result = $conn->query($query);
        if($result == True){
            echo "Data inserted";
        }
    }

        //fetch_all(MYSQLI_ASSOC);
        //fetch_row(MYSQLI_ASSOC);
        //fetch_array(MYSQLI_ASSOC);
    public static function row($query){
        $conn = new db(); $conn = $conn->getConnection();
        $result = $conn->query($query);
        if($result == True){
            $this->numOfRows = $result->num_rows;
            $fetch = $result->fetch_row();
        }
        

    }

}

$query = "INSERT INTO `falcon`.`admins` (`userName`, `password`, `email`, `firstName`, `lastName`, `domainName`) VALUES ('user1', 'user1', 'user1@mail.com', 'user', 'user2', 'demo.falcon.com');";
$result = new Execute();
$result->execute($query);

?>