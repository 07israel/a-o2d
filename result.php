<!DOCTYPE HTML>

<?php
    include"conection.php";
?>

<html lang="pt-br">
<link rel="shortcut icon" href="_img/mega.png"/>
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110338179-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-110338179-1');
</script>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Ação 2D </title>



<!-- Descrição Geral -->
   <meta name="description" content="O Ação 2D foi projetado para os apaixonados por jogos antigos, com a intenção de reviver as emoções em zerar games nas madrugadas, se juntar aos amigos e fazer vaquinhas para jogar nos fliperamas, anotar paswords em cadernos e se divertir de verdade.">
   <link rel="canonical" href="http://acao2d.com.br">
   <meta name="author" content="Israel Cesar de Limam Mota">
   <meta name="robots" content="index.html">
    <meta name="keywords" content="site sobre games antigos,tudo sobre games retro, games retro, jogos 2d, jogos pixel art, jogos dos anos 90 e 80, super nintendo, mega drive, gba,snes,nes,zelda, mario, super mario wolrd, donkey kong country, febre retro, retro gamer,fliperama, ação 2d, acao 2d">
   
   
 <!-- Descrição para google Plus -->

<meta itemprop="name" content="Ação 2D">
<meta itemprop="description" content="O Ação 2D foi projetado para os apaixonados por jogos antigos, com a intenção de reviver as emoções em zerar games nas madrugadas, se juntar aos amigos e fazer vaquinhas para jogar nos fliperamas, anotar paswords em cadernos e se divertir de verdade.">
<meta itemprop="image" content="http://acao2d.com.br/imagens/loggo.png">
<link href="http://plus.google.com/+minhapagina" rel="publisher">


 <!--Descrição para facebook -->
 
  <meta property="og:title" content="">
  <meta property="og:url"           content="http://acao2d.com.br/index.php" >
  <meta property="og:type"          content="website" >
  <meta property="og:title"         content="AÇÃO 2D" >
  <meta property="og:description"   content="O Ação 2D foi projetado para os apaixonados por jogos antigos, com a intenção de reviver as emoções em zerar games nas madrugadas, se juntar aos amigos e fazer vaquinhas para jogar nos fliperamas, anotar paswords em cadernos e se divertir de verdade." >
  <meta property="og:image"         content="" >
  <meta property="og:site_name" content="Ação 2D">

<link rel="stylesheet" type="text/css"  href="_css/one-page-resolution.css"> 
<link rel="stylesheet" type="text/css"  href="_css/anuncios.css">
<link rel="stylesheet" type="text/css"  href="_css/style.css">
<link rel="stylesheet" type="text/css"  href="_css/article.css"> 

  
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.0.min.js"></script>
<script type="text/javascript" src="_js/anime.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-3123465537058436",
    enable_page_level_ads: true
  });
</script>



</head>
<body>
   <div class="cabecalho"> 
           <?php include 'busca.php' ?>
			<div class="cabecalho-nun">	
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- topo -->
<ins class="adsbygoogle"
     style="display:inline-block;width:468px;height:60px"
     data-ad-client="ca-pub-3123465537058436"
     data-ad-slot="8859168543"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
	</div>
		<a href="http://www.acao2d.com.br/"><img class="logo-top" src="_img/logo.png" class="img-fluid img-logo" alt="Responsive image"> </a>     
   </div>
    <div class="n-logo">
	      <a href="http://www.acao2d.com.br/"> <img src="_img/logo.png" class="img-fluid img-logo" alt="Responsive image"> </a>
      </div>   
      <div class="marc" id="home">
	  </div>
  <?php include 'menu.php';?> 
   <div class="corpo-busca">
     <div class="p-busca"> 
  
   <?php
    $buscar=$_POST['buscar'];
    $sql = mysql_query (" SELECT * FROM home WHERE nome LIKE '%".$buscar."%'");
	$row = mysql_num_rows($sql);
	   if($row >0) {
		   
		   while($linha = mysqli_fetch_array($sql))
		   {
			 $nome = $linha['nome'];
             $snome =$linha['snome'];
             $idade = $linha['idade'];
             $descricado = $linha['descricao'];
          
                echo "<strong>nome: </strong>".@$nome;
                                echo"<br/><br/>";
                echo"<strong>snome: </strong>".@$snome;
                                echo"<br/><br/>";
                echo"<strong>idade: </strong>".@$idade;	
                                echo"<br/><br/>";
                echo"<strong>descricao: </strong>".@$descricao;	
                          echo"<br/><br/>";
       					  
	   }       
	   }else{
		   echo"Deslculpe não temos o que você procura!";
	   }
	
   ?>
 </div><br><br>
  </div>

   <footer class="rodape-artc"><br>
	    <p>© 2017 Ação 2D Entertainment. Todos os direitos reservados. Ação 2D, acao2d.com.br <br>
			        e o logotipo Ação 2D são marcas registradas da Ação 2D Entertainment no Brasil.</p>
	          <img  src="_img/logo.png" class="img-fluid img-logo " alt="Responsive image"> 
			 
      </footer>
</body>





</html>