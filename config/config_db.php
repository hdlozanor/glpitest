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
        $this->dbhost = 'proyectos-instance-1.c8an9arwoaua.us-east-1.rds.amazonaws.com';
        $this->dbuser = $_SERVER['dbuser'];
        $this->dbpassword = $_SERVER['dbpassword'];
        $this->dbdefault = $_SERVER['dbdefault'];
    }
}
?>