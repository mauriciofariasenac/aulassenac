<?php


        // Abre o banco de Dados
        include("AbreBanco.php"); 
        
        // Consulta SQL para selecionar todos os registros da tabela
        
        $idregiao = $_POST["idregiao"];
        $descricaoregiao = $_POST["descricaoregiao"];
        
        $sql = "Insert into regiao (idregiao, descricaoregiao) values (". $idregiao.",'".$descricaoregiao."');";
        $result = mysqli_query($conn, $sql);
        
        
                // Consulta SQL para selecionar todos os registros da tabela
        $sql2 = "SELECT * FROM regiao";
        $result2 = mysqli_query($conn, $sql2);

        //var_dump($result);

        // Verifica se há resultados na consulta
        if (mysqli_num_rows($result2) > 0) {
            // Exibe cada registro da tabela
            while ($row = mysqli_fetch_assoc($result2)) {
                echo " ID Regiao : " . $row["IDRegiao"] . " - Descrição Regiao: " . $row["DescricaoRegiao"] . "<br>";
            }
        } else {
            echo "Nenhum registro encontrado na tabela.";
        }

  
        

        //Verifica se tem erro;
        //var_dump($result);
        
        
        
        
        
                // Fecha a conexão com o banco de dados
        include("FechaBanco.php");