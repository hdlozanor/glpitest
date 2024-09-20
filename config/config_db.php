<?php
class DB extends DBmysql {
    public $dbhost;
    public $dbuser;
    public $dbpassword;
    public $dbdefault;
    public $use_timezones = true;
    public $use_utf8mb4 = true;
    public $allow_myisam = false;
    public $allow_datetime = false;
    public $allow_signed_keys = false;

    public function __construct() {
        $this->dbhost = $_SERVER['dbhost'];
        $this->dbuser = $_SERVER['dbuser'];
        $this->dbpassword = $_SERVER['dbpassword'];
        $this->dbdefault = $_SERVER['dbdefault'];

	error_log("DB Host: " . $this->dbhost);
    	error_log("DB User: " . $this->dbuser);
    	error_log("DB Password: " . $this->dbpassword);
    	error_log("DB Name: " . $this->dbdefault);

	try {
        	$dsn = "mysql:host=$this->dbhost;dbname=$this->dbdefault;charset=utf8mb4";
        	$this->pdo = new PDO($dsn, $this->dbuser, $this->dbpassword);
        	$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	} catch (PDOException $e) {
        	error_log("Connection failed: " . $e->getMessage());
        	throw new Exception("Database connection error.");
    	}
    }
}
?>