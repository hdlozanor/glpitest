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

    public function initialize() {
        $this->dbhost = getenv('dbhost'); // valor por defecto
        $this->dbuser = getenv('dbuser'); // valor por defecto
        $this->dbpassword = getenv('dbpassword'); // valor por defecto
        $this->dbdefault = getenv('dbdefault'); // valor por defecto
    }
}
    DB::initialize();

    echo DB::$dbhost;
?>