
<?php
   $servidor = '127.0.0.1';
   $porta = 3306;
   $user = 'root';
   $password = '';
   $banco_name= 'Kaiji_Data';
   
   $conection = new mysqli($servidor, $user, $password, $banco_name, $porta);
   
   if ($conection->connect_error) {
       die("Conexão falhou, tente novamente: " . $conection->connect_error);
   }
   echo "Conectado com sucesso";
   
   $send_game = $_POST['Enviar Sugestão'];
   

   $putzoo = $conection->prepare("INSERT INTO kaiji_data_game (nometabela) VALUES (?)");
   if (!$banco_name) {
       die('Erro na tentativa: ' . $conection->error);
   }
   

   $banco_name->bind_param("s", $send_game);

   if (!$banco_game->execute()) {
       die('Erro ao inserir os dados: ' . $banco_name->error);
   }
   
   $banco_name->close();
   $conection->close();

   header("Location:");
   exit();
   ?>
   
