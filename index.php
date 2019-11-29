<?php

  session_start();

?>
<!DOCTYPE html>

<html lang="en">
<head>
  
  <title>McMusic</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 400 15px/1.8 Lato, sans-serif;
    color: #777;
  }
  h3, h4 {
    margin: 10px 0 30px 0;
    letter-spacing: 10px;      
    font-size: 20px;
    color: #111;
  }
  .container {
    padding: 80px 120px;
  }
  .person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    opacity: 0.7;
  }
  .person:hover {
    border-color: #f1f1f1;
  }
  .carousel-inner img {
    -webkit-filter: grayscale(90%);
    filter: grayscale(90%); 
    width: 100%;
    margin: auto;
  }
  .carousel-caption h3 {
    color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  .bg-1 {
    background: #2d2d30;
    color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
  }
  .list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail p {
    margin-top: 15px;
    color: #555;
  }
  .btn {
    padding: 10px 20px;
    background-color: #333;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
  }
  .modal-header, h4, .close {
    background-color: #333;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
  .nav-tabs li a {
    color: #777;
  }
  #googleMap {
    width: 100%;
    height: 400px;
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
  }  
  .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
    color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .open .dropdown-toggle {
    color: #fff;
    background-color: #555 !important;
  }
  .dropdown-menu li a {
    color: #000 !important;
  }
  .dropdown-menu li a:hover {
    background-color: red !important;
  }
  footer {
    background-color: #2d2d30;
    color: #f5f5f5;
    padding: 32px;
  }
  footer a {
    color: #f5f5f5;
  }
  footer a:hover {
    color: #777;
    text-decoration: none;
  }  
  .form-control {
    border-radius: 0;
  }
  textarea {
    resize: none;
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">MC MUSIC</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">INICIO</a></li>
        <li><a href="#band">BANDA</a></li>
        <li><a href="#tour">TOUR</a></li>
        <li><a href="#contact">CONTATOS</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Mais
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="login.php">Login</a></li>
            <li><a href="Registro.html">Cadastre-se</a></li> 
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

   
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="IMG/p3.jpg" alt="New York" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Melhor Venda de discos</h3>
          <p></p>
        </div>      
      </div>

      <div class="item">
        <img src="IMG/p2.jpg" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Os maiores Hits</h3>
          <p></p>
        </div>      
      </div>
    
      <div class="item">
        <img src="IMG/p4.jpg" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
          <h3>E o melhor equipamento de som</h3>
          <p></p>
        </div>      
      </div>
    </div>

  
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>


<div id="band" class="container text-center">
  <h3>MC MUSIC</h3>
  <p><em>A Música é uma ave que pousa na alma, canta melodias sem palavras e nunca cessa.</em></p>
  <p>Nós somos a MC Music. Somos a maior empresa de música no mundo. Em tudo o que fazemos, estamos comprometidos com a arte, inovação e empreendedorismo.

    Nós controlamos uma ampla gama de empresas envolvidas na música, na parte da edição de música, merchandising, e conteúdos audiovisuais em mais de 60 países.
    
    Nós identificamos e desenvolvemos artistas e compositores, e nós produzimos, distribuímos e promovemos a música dos maiores artistas para encantar e entreter os fãs ao redor do mundo.</p>
  <br>
  <h2>Olá <?php echo $_SESSION['login']; ?>!</h2> 
<?php echo date('d/m/y H:i:s');
//resultado: 2017/02/15 14:29:14?> 
<hr>
<a href="logout.php"><i class="fa fa-arrow-left"></i> Sair</a> 
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>Estudios</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="IMG/o1.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
        <p>Melhores programas de gravação</p>
        <p>Com os melhores produtores </p>
        <p>Desde 1988</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Shows</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="IMG/o2.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p>Shows mais lotados </p>
        <p>Com melhores empresarios </p>
        <p>E Turnes de melhores qualidades</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Equipamentos</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="IMG/o3.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p>Melhores equipamentos de som</p>
        <p>das melhores marcas </p>
        <p>Sempre novos</p>
      </div>
    </div>
  </div>
</div>


<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">DATA TOURS</h3>
    <p class="text-center">As Bandas mais famosas da gravadora.<br> agora disponível a compra de ingressos </p>
    <ul class="list-group">
      <li class="list-group-item">Setembro <span class="label label-danger">Esgotado!</span></li>
      <li class="list-group-item">Outubro <span class="label label-danger">Esgotado!</span></li> 
      <li class="list-group-item">Novembro <span class="badge">3</span></li> 
    </ul>
    
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="IMG/l1.jpg" alt="Paris" width="400" height="300">
          <p><strong>Paris</strong></p>
          <p>Segunda 27 de setembro de 2020</p>
          <a href="carrinho.php?acao=add&id=<?=$prod['id']?>" class="btn btn-warning btn-block">Adicionar ao carrinho</a>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="IMG/l2.jpg" alt="New York" width="400" height="300">
          <p><strong>New York</strong></p>
          <p>Quinta-feira 30 de outubro de 2020</p>
          <a href="carrinho.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</a>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="IMG/l3.jpg" alt="San Francisco" width="400" height="300">
          <p><strong>San Francisco</strong></p>
          <p>Domingo 29 de Novembro de 2020</p>
          <a href="carrinho.php?acao=add&id=<?=$ing['id']?>" class="btn btn-warning btn-block">Adicionar ao carrinho</a>
        </div>
      </div>
    </div>
  </div>
  
 
 
     
      
        
        </div>
      </div>
    </div>
  </div>
</div>


<div id="contact" class="container">
  <h3 class="text-center">Contatos</h3>
  <p class="text-center"><em>Nós amamos nossos fãs!</em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Insira uma nota </p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Campo Grande, RJ</p>
      <p><span class="glyphicon glyphicon-phone"></span>Telefone: +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: McMusic@gmail.com</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Nome" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comentario" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Enviar</button>
        </div>
      </div>
    </div>
  </div>
  <br>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Luana</a></li>
    <li><a data-toggle="tab" href="#menu1">Lucas</a></li>
    <li><a data-toggle="tab" href="#menu2">Carlos</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2>Luana, Gerente</h2>
      <p>Estou aqui para poder manter nossa marca e melhorar nossa Empresa.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h2>lucas, Produtor</h2>
      <p>Sempre um prazer. Espero que tenha gostado do meu trabalho.</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h2>Carlos Eduardo, Empresário</h2>
      <p>Sempre um prazer descobrir novas lendas para nossa gravadora.</p>
    </div>
  </div>
</div>


<img src="IMG/l4.jpg" class="img-responsive" style="width:100%">


<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="Topo">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p> <a href="#" data-toggle="tooltip" title="#"> McMusic@gmail.com</p> 
</footer>

<script>
$(document).ready(function(){

  $('[data-toggle="tooltip"]').tooltip(); 
  
 
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    if (this.hash !== "") {

      event.preventDefault();

      
      var hash = this.hash;

   
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
     
        window.location.hash = hash;
      });
    } 
  });
})
</script>


</body>
</html>