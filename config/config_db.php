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
    }
?>