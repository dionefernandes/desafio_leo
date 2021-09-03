<?php
    namespace app\models;

    class DB {
        // Dados de acesso ao banco de dados
        protected function accessData() {
            $dataConnection = [
                'DB_CONNECTION' => 'mysql',
                'DB_HOST' => '127.0.0.1',
                'DB_PORT' => '3306',
                'DB_DATABASE' => 'desafio_leo',
                'DB_USERNAME' => 'root',
                'DB_PASSWORD' => ''
            ];

            return $dataConnection;
        }

        // Faz a conexão com o banco
        public function connect() {
            $acessData = $this->accessData();

            $this->connect = @mysqli_connect(
                $acessData['DB_HOST'],
                $acessData['DB_USERNAME'],
                $acessData['DB_PASSWORD'],
                $acessData['DB_DATABASE']
            ) or exit ("Não foi possível conectar: ". mysqli_connect_error());

            return $this->connect;
        }

        // Desconecta com o banco
        public function disconnect() {
			if($this->connect)
				mysqli_close($this->connect);
		}
    }
?>