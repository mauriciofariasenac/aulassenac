<html>
   <head>
      <title>Selecting MySQL Database</title>
   </head>
   <body>  
    <?php 
        // Abre o banco de Dados
        include("abrebanco.php"); 

        // Consulta SQL para selecionar todos os registros da tabela
        $sql = "SELECT * FROM clientes";
        $result = mysqli_query($conn, $sql);

        //var_dump($result);

        // Verifica se há resultados na consulta
        if (mysqli_num_rows($result) > 0) {
            // Exibe cada registro da tabela
            while ($row = mysqli_fetch_assoc($result)) {
                echo " ID Cliente: " . $row["IDCliente"] . " - Nome de Contato: " . $row["NomeContato"] . "<br>";
            }
        } else {
            echo "Nenhum registro encontrado na tabela.";
        }

        // Fecha a conexão com o banco de dados
        include("fechabanco.php"); 
       
    ?>      
   
   </body>
</html>