<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Senac  | EAD</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/tema.css">
  <link rel="stylesheet" href="assets/css/skin-yellow-light.css">



  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <style>
            canvas {
                background: #ffffff;
                border: solid black 1px;
                cursor: crosshair;

            }
        </style>
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-yellow-light layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="noticias.php" class="navbar-brand"><b>Senac</b> EAD</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="">Cursos</a></li>
          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
            </div>
          </form>
        </div>

      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">

      </section>

      <!-- Main content -->
      <section class="content  align-self-baseline">

        <div class="row">
          <div class="col-xs-12 col-md-4 col-sm-6">

            <canvas id='myCanvas'  >
                Canvas não suportado
            </canvas>
            <button class="btn btn-primary limpar">Limpar</button>
          </div>


        </div>


        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">

footer

    </div>
    <!-- /.container -->
  </footer>
</div>



<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="assets/js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/js/bootstrap.min.js"></script>


<script>


</script>

<script>
var canvas = document.getElementById('myCanvas');
var context = canvas.getContext('2d');
var estouDesenhando = false;
var correcaoPontoZero = 80;

$("body").on("mousedown","#myCanvas",function(ev){
  context.moveTo(ev.clientX - correcaoPontoZero,ev.clientY - correcaoPontoZero);
  estouDesenhando = true;
})

$("body").on("mouseup","#myCanvas",function(ev){
  estouDesenhando = false;
})

$("body").on("mousemove","#myCanvas",function(ev){
  if(estouDesenhando){
    context.lineTo(ev.clientX - correcaoPontoZero,ev.clientY - correcaoPontoZero);
    context.stroke();
    estouDesenhando = true;
  }
})

$("body").on("click",".limpar",function(){
  context.clearRect(0,0,400,400)
  context.beginPath();
})


</script>

</body>
</html>
