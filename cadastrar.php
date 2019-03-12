<?php

  $data = date("Y-m-d");
  $hora = date("H-i-s");
  $novadata = substr($data,8,2) . "/" . substr($data,5,2) . "/" . substr($data,0,4);
  $novahora = substr($hora,0,2) . "h" . substr($hora,3,3) . "min";
  
  echo "<h1>Sistema de cadastro de notícias</h1>";
  
  echo "<hr><br>";
  echo "<form action = 'inserir.php' method='post'>";
  echo "Nome:<input name='nome' type='text' size=30>*<br>";
  echo "sobrenome:<input name='sobrenome' type='text' size=30>*<br>";
  echo "cidade:<input name='cidade' type='text' size=30>*<br>";
  echo "estado:<i>(exemplo: SP, RS , BA)</i><input name='estado' type='text' size=5>*<br>";
  echo "email: <i>(exemplo:algumacoisa@gmail.com)</i><input name='email' type='text' size=30><br><br>";
  echo "titulo do texto:<input name='titulo' type='text' size=30>*<br>";
  echo "subtitulo do texto:<textarea name='subtitulo' rows=5 cols=30></textarea><br>";
  echo "texto:<textarea name='texto' rows=10 cols=30></textarea>*<br>";
  echo "<input name='data' type='hidden' value='$data'><input name='hora' type='hidden' value='$hora'>";
  echo "<input type='submit' value='cadastrar'>";
  echo "</form>";
  echo "<br><br>";
  echo "<i>Campor marcados com <b> * </b> são obrigatórios no cadastro<br>";
  echo "<b> Observação</b>: Será inserido cadastro a data atual, bem como a hora atual do cadastro<br>";
  echo "Data: $novadata - Hora: $novahora<br>";
  
  ?>