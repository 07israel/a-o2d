<?php

   $sql = "INSERT INTO noticias (nome, sobrenome, cidade, estado, email, data, hora, titulo, texto) 
   VALUES ('$nome', '$sobrenome', '$cidade', '$estado', '$email', '$data', '$hora', '$titulo', '$subtitulo', '$texto')";
   
   
   // hora de conectar ao banco de dados 
   
   
   $conexao = mysql_connect("localhost", "root", "root")
   or die ("Erro na conexão com o banco de dados!");
   
   $db = mysql_select_db("noticias")
   or die ("Banco de dados inexistente!");
   
   // inserindo dados 
   
   $sql = mysql_query($sql)
   or die ("Houve erro na gravação de dados, por favor, clique em 
   voltar e verifique os campos obrigatórios!");
   
   echo "<h1> Cadastro rfetuado com sucesso!</h1>";






?>