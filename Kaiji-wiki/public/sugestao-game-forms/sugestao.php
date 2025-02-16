<?php
   $servidor = '';
   $porta = 3306;
   $user = '';
   $password = '';
   $sugestao = '';
   
   $conection = new mysqli($servidor, $user, $password, $sugestao, $porta);
   
   if ($conection->connect_error) {
       die("Conexão falhou, tente novamente: " . $conection->connect_error);
   }
   echo "Conectado com sucesso";
   
   $enviar = $_POST['ENVIAR'];
   

   $banco= $conection->prepare("INSERT INTO nomedobanco(tabela) VALUES (?)");
   if (!$banco) {
       die('Erro na tentativa: ' . $conection->error);
   }
   

   $banco->bind_param("s", $enviar);
   if (!$banco->execute()) {
       die('Erro ao inserir os dados: ' . $banco->error);
   }
   
   $banco->close();
   $conection->close();

   header("Location: .html");
   exit();
   ?>
   