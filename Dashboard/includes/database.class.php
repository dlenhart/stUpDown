<?php
/*
	Author:  Drew D. Lenhart
	http://www.drewlenhart.com
	Page: database.class.php
	Date: 8/01/2015
	Desc: Get connected to DB.	
	*/
class database
{
    public $pdo;
    private static $instance;

	private function __construct(){
		$db_username = "stupdwn";
		$db_password = "viper501";
		$db_name = "stats";
		$host = "localhost";
        
	try{
		$this->pdo = new PDO('mysql:host='. $host . ';dbname='.$db_name, $db_username, $db_password);
	}
		catch ( PDOException $exception ){
            	echo "Connection error :" . $exception ->getMessage();
	}
    }

	public static function getInstance(){
		if (!isset(self::$instance))
        {
            $object = __CLASS__;
            self::$instance = new $object;
        }
        return self::$instance;
    }
    
    //Grab single entry
    function getDataSingle($query){
        $queryEx = $this->pdo->prepare($query);
        $queryEx->execute();
        return $queryEx->fetch(PDO::FETCH_ASSOC);
    }
    
    //Grab multiple entries
    function getData($query){
        $queryEx = $this->pdo->prepare($query);
        $queryEx->execute();
        return $queryEx->fetchAll(PDO::FETCH_ASSOC);
    }
    
    //use update for Delete, or Update queries
    function updateData($query, $data){
		$queryEx = $this->pdo->prepare($query);		
		return $queryEx->execute($data);
    }

    //insert data
    function insertData($query, $data){
        $queryEx = $this->pdo->prepare($query);
        return $queryEx->execute($data);
    }
    
    //close connection
    function closeConn(){
		$this->pdo = null;		
    }
}

?>