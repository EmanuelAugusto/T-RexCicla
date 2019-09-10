<?php 
$con = mysqli_connect("localhost", "id2129533_root", "0101bravo", "id2129533_trexcicla");

if (mysqli_errno($con)){
	echo "Erro" . mysql_error($con);
}else{
	$dados = "INSERT INTO trexcicla VALUES (

	'$_POST[nome]','$_POST[sobre]','$_POST[senha]', '$_POST[email]', ID)";
	if (mysqli_query($con,$dados)){
		$situ1 ="Você foi cadastrado";
		$situ2 ='http://www.pngall.com/wp-content/uploads/2016/07/Success-PNG-Image.png';
	}else{
	    $situ1 = "Erro de Cadastro";
		echo "erro" . mysqli_error($con);
	}

	mysqli_close($con);
}


?>

<!DOCTYPE html>
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
        <li><a href="../quiz/quiz.html">Quiz</a></li>
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
    <li><a href="../quiz/quiz.html">Quiz</a></li>
    <li><a href="../mapaUrb/mapaurbano.html">Mapa Urbano</a></li>
    <li><a href="../quem/Quemsomos.html">Quem Somos</a></li>
    <li><a href="login.html">Login</a></li>
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
      <h3><img class="responsive-img" src="dinoDica.png">
          
<?php
  	print $situ1;
?>
	<img class="responsive-img" src="<?php print $situ2; ?>" style="width: 40px; heigth: 40px;">
</h3>

<h5>Obrigado pelo cadastro, Aguarde novidades.</h5>
   
  </div>
 
<div style="heigth:900px; width:100%;"></div>
  </div>
<!--fim conteudo-->

<br>
<br>
<br>
<br>
<br>
<br>
<br>
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