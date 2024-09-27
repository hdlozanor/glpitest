<?php
require 'config/aws.phar'; // Asegúrate de que la ruta sea correcta

use Aws\SecretsManager\SecretsManagerClient;
use Aws\Exception\AwsException;

public $dbhost1;
public $dbuser1;
public $dbpassword1;
public $dbdefault1;

$client = new SecretsManagerClient([
            'version' => 'latest',
            'region' => 'us-east-1', // Por ejemplo, 'us-west-2'
        ]);

        try {
            $result = $client->getSecretValue([
                'SecretId' => 'arn:aws:secretsmanager:us-east-1:699001025740:secret:MySQLProyectos-3rILWQ', // ID del secreto en Secrets Manager
            ]);

            if (isset($result['SecretString'])) {
                $secret = json_decode($result['SecretString'], true);
                $this->dbhost1 = $secret['host'];
                $this->dbuser1 = $secret['username'];
                $this->dbpassword1 = $secret['password'];
                $this->$dbdefault1 = $secret['dbdefault'];
                echo "<script>
                    console.log('DB Host: " . addslashes($this->dbhost1) . "');
                    console.log('DB User: " . addslashes($this->dbuser1) . "');
                    console.log('DB Password: " . addslashes($this->dbpassword1) . "');
                </script>";
            }
        } catch (AwsException $e) {
            echo "Error al recuperar el secreto: " . $e->getMessage();
        }

?>