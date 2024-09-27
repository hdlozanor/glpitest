<?php
require 'config/aws.phar'; // Asegúrate de que la ruta sea correcta

use Aws\SecretsManager\SecretsManagerClient;
use Aws\Exception\AwsException;

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
                $this->dbhost = $secret['host'];
                $this->dbuser = $secret['username'];
                $this->dbpassword = $secret['password'];
                $this->$dbdefault = $secret['dbdefault'];
                echo "<script>
                    console.log('DB Host: " . addslashes($this->dbhost) . "');
                    console.log('DB User: " . addslashes($this->dbuser) . "');
                    console.log('DB Password: " . addslashes($this->dbpassword) . "');
                </script>";
            }
        } catch (AwsException $e) {
            echo "Error al recuperar el secreto: " . $e->getMessage();
        }

?>