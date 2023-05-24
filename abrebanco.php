<?php
        $servername = "easyinfo_senac";
        $username = "easyinfo_senac";
        $password = "easyinfo_senac";
        $dbname = "easyinfo_senac";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

       // Verifica se a conexão foi bem sucedida
       if (!$conn) {
           die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
       }