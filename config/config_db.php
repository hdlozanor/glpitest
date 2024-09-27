<?php
require '../lib/aws.phar'; // Asegúrate de que la ruta sea correcta

use Aws\SecretsManager\SecretsManagerClient;
use Aws\Exception\AwsException;

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
        $this->loadSecrets();
    }

    private function loadSecrets() {
        $client = new SecretsManagerClient([
            'version' => 'latest',
            'region' => 'us-east-1', // Por ejemplo, 'us-west-2'
        ]);

        try {
            $result = $client->getSecretValue([
                'SecretId' => 'MySQLProyectos-3rILWQ', // ID del secreto en Secrets Manager
            ]);

            if (isset($result['SecretString'])) {
                $secret = json_decode($result['SecretString'], true);
                $this->dbhost = $secret['host'];
                $this->dbuser = $secret['username'];
                $this->dbpassword = $secret['password'];
                $this->$dbdefault = $secret['glpitest'];
            }
        } catch (AwsException $e) {
            echo "Error al recuperar el secreto: " . $e->getMessage();
        }
    }

    echo "<script>
    console.log('DB Host: " . addslashes($this->dbhost) . "');
    console.log('DB User: " . addslashes($this->dbuser) . "');
    console.log('DB Password: " . addslashes($this->dbpassword) . "');
    </script>";
}

?>