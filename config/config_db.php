<?php
class DB extends DBmysql {
   public $dbhost = $_SERVER['dbhost'];
   public $dbuser = $_SERVER['dbuser'];
   public $dbpassword = $_SERVER['dbpassword'];
   public $dbdefault = $_SERVER['dbdefault'];
   public $use_timezones = true;
   public $use_utf8mb4 = true;
   public $allow_myisam = false;
   public $allow_datetime = false;
   public $allow_signed_keys = false;
}
