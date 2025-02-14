<?php
   $servidor = '127.0.0.1';
   $porta = 3306;
   $user = '';
   $password = '';
   $sugestao = '';
   
   $conection = new mysqli($servidor, $user, $password, $sugestao, $porta);
   
   if ($conection->connect_error) {
       die("Conexão falhou, tente novamente: " . $conection->connect_error);
   }
   echo "Conectado com sucesso";
   
   $sendpet = $_POST['ENVIAR'];
   

   $putzoo = $conection->prepare("INSERT INTO zooputphp (zoopot) VALUES (?)");
   if (!$putzoo) {
       die('Erro na tentativa: ' . $conection->error);
   }
   

   $putzoo->bind_param("s", $sendpet);
   if (!$putzoo->execute()) {
       die('Erro ao inserir os dados: ' . $putzoo->error);
   }
   
   $putzoo->close();
   $conection->close();

   header("Location: .html");
   exit();
   ?>
   