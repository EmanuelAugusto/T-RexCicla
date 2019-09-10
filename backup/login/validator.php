<?php 
$nome = "";
$sobre_mim = "";

if ($_POST['email'] == 'emanuel02augusto@gmail.com' ){
	$nome = "Emanuel Augusto";
	$sobre_mim = "Tecnologia é meu lema mas sempre pensando no desenvolvimento sustentável.";
}

if ($_POST['email'] == 'leandro.spigolon@a.ficr.edu.br'){
	$nome = "Leandro spigolon";
	$sobre_mim = "Adoro uma corrida nos finais de semana, mas sempre penso em ecologia.";
}
if ($_POST['email'] == 'francisco.marinho@a.ficr.edu.br'){
	$nome = "Francisco Marinho";
	$sobre_mim = "Adoro uma academia tarde da noite, arroz com frango, sempre visando a sustabilidade";
}
if ($_POST['email'] == 'paulo.esilva@a.ficr.edu.br'){
	$nome = "Paulo Emanuel";
	$sobre_mim = "Conteúdo e futuro indefinido";
}


if($_POST['email'] == 'emanuel02augusto@gmail.com'  && $_POST['senha'] == "0101bravo" || 'leandro.spigolon@a.ficr.edu.br' && $_POST['senha'] == "1234" || $_POST['email'] == 'francisco.marinho@a.ficr.edu.br' && $_POST['senha'] == "1234" ||
$_POST['email'] == 'paulo.esilva@a.ficr.edu.br' && $_POST['senha'] == "1234"){
	print<<<_HTML

 <html lang="pt-br">
<head>

  <meta charset="utf-8">
  <title>T-RexCicla</title>
  <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            
</head>
<body>
<!--inicio da barra de navegação-->
<div id="modal1" class="modal">
    <div class="modal-content">
      <!--conteudo-->
      <a href="quiz/quiz.html"><img class="responsive-img" src="img/quiz.png"></a>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Fechar</a>
    </div>
  </div>

<!--inicio da barra de navegação-->
  <nav>
    <div class="nav-wrapper orange darken-1">
      <a href="../index.html" class="brand-logo"><img src="LOGOSITE.png"></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="../index.html">HOME</a></li>
        <li><a href="../4rs/4Rs.html">4R'S</a></li>
        <li><a href="../dicas/dica.html">Você sabe?</a></li>
        <li><a href="quiz.html">Quiz</a></li>
        <li><a href="../mapaUrb/mapaurbano.html">Mapa Urbano</a></li>
        <li><a href="../quem/Quemsomos.html">Quem Somos</a></li>
        <li><a href="login.html">Login</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="../index.html">Home</a></li>
    <li><a href="../4rs/4Rs.html">4 R´s</a></li>
    <li><a href="../dicas/dica.html">Você sabe?</a></li>
    <li><a href="quiz.html">Quiz</a></li>
    <li><a href="../mapaUrb/mapaurbano.html">Mapa Urbano</a></li>
    <li><a href="../quem/Quemsomos.html">Quem Somos</a></li>
    <li><a href="#">Login</a></li>
  </ul>
    

 <script>
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
  });
  </script>
<!-- BARRA DE PESQUISA-->
 
<!--final--> 
<br>
<!--inicio conteudo S para celular m para tablet ou Pc-->
  <div class="container">

    <h4>Perfil</h4>

<div class="row">
<div class="col s12 m6">
   <p> <img class="responsive-img" src="https://i0.wp.com/www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png?fit=256%2C256&quality=100&ssl=1" style="width: 60px; heigth: 60px;">$nome<p>
   </div>
  
<div class="col s12 m6">
   <p><img class="responsive-img" src="https://pngimage.net/wp-content/uploads/2018/06/level-icon-png-7.png" style="width: 60px; heigth: 60px;">Nível 5 - Reciclador Master</p>
</div>
</div>
<div class="row">

<div class="col s12 m6">
<h4>Sobre mim</h4>

<p>$sobre_mim</p>

</div>

<div class="col s12 m6">
<h5>Nível: <img class="responsive-img" src="nivel.png" style="width:100px; heigth: 100px;">

</div>


  </div>
  </div>
<!--fim conteudo-->
<br>
<br>

<footer class="page-footer indigo darken-4">
  <script src="js/index.js"></script>
          <div class="container">
            <div class="row">
               <div class="col l6 s12">
                <h5 class="white-text">T-RexCicla</h5>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Nossas Páginas</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">instagram</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2019 Prime Solutions
            <a class="grey-text text-lighten-4 right" href="#!">Mais</a>
            </div>
          </div>
        </footer>        
</body>
</html>


_HTML;
}

if ($_POST['email'] !== 'emanuel02augusto@gmail.com'  && $_POST['senha'] !== "0101bravo" || 'leandro.spigolon@a.ficr.edu.br' && $_POST['senha'] !== "1234" || $_POST['email'] !== 'francisco.marinho@a.ficr.edu.br' && $_POST['senha'] !== "1234" ||
$_POST['email'] != 'paulo.esilva@a.ficr.edu.br' && $_POST['senha'] != "1234"){
   print<<<_HTML

 <html lang="pt-br">
<head>

  <meta charset="utf-8">
  <title>T-RexCicla</title>
  <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            
</head>
<body>
<!--inicio da barra de navegação-->
<div id="modal1" class="modal">
    <div class="modal-content">
      <!--conteudo-->
      <a href="quiz/quiz.html"><img class="responsive-img" src="img/quiz.png"></a>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Fechar</a>
    </div>
  </div>

<!--inicio da barra de navegação-->
  <nav>
    <div class="nav-wrapper orange darken-1">
      <a href="../index.html" class="brand-logo"><img src="LOGOSITE.png"></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="../index.html">HOME</a></li>
        <li><a href="../4rs/4Rs.html">4R'S</a></li>
        <li><a href="../dicas/dica.html">Você sabe?</a></li>
        <li><a href="quiz.html">Quiz</a></li>
        <li><a href="../mapaUrb/mapaurbano.html">Mapa Urbano</a></li>
        <li><a href="../quem/Quemsomos.html">Quem Somos</a></li>
        <li><a href="login.html">Login</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="../index.html">Home</a></li>
    <li><a href="../4rs/4Rs.html">4 R´s</a></li>
    <li><a href="../dicas/dica.html">Você sabe?</a></li>
    <li><a href="quiz.html">Quiz</a></li>
    <li><a href="../mapaUrb/mapaurbano.html">Mapa Urbano</a></li>
    <li><a href="../quem/Quemsomos.html">Quem Somos</a></li>
    <li><a href="#">Login</a></li>
  </ul>
    

 <script>
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
  });
  </script>
<!-- BARRA DE PESQUISA-->
 
<!--final--> 
<br>
<!--inicio conteudo S para celular m para tablet ou Pc-->
  <div class="container">
<div class="center">
   <h3>Estou em desenvolvimento</h3>
   <img class="responsive-img" src="https://wallazee.global.ssl.fastly.net/images/dynamic/items/72-1024.png" style="width:200px; heigth:200px;">
   <p>Mas posso não ter reconhecido você<p>
   </div>
  </div>
<!--fim conteudo-->
<br>
<br>

<footer class="page-footer indigo darken-4">
  <script src="js/index.js"></script>
          <div class="container">
            <div class="row">
               <div class="col l6 s12">
                <h5 class="white-text">T-RexCicla</h5>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Nossas Páginas</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">instagram</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2019 Prime Solutions
            <a class="grey-text text-lighten-4 right" href="#!">Mais</a>
            </div>
          </div>
        </footer>        
</body>
</html>


_HTML;

}




?>