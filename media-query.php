<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Senac  | EAD</title>
  <style>

  /*Para janelas grandes */
  @media screen and (min-width: 880px )  {
    .responsivo {
        color: green ;
    }
    .d2, .d3{
      display: none;
    }
  }

  /*Para janelas medias */
  @media screen and (max-width: 879px )  {
    .responsivo {
        color: blue ;
    }
    .d1 , .d3{
      display: none;
    }
  }

  /*Para janelas pequenas */
  @media screen and (max-width: 510px )  {
    .responsivo {
        color: red ;
    }
    .d1 , .d2{
      display: none;
    }
    .d3{
      display: block;
    }
  }
  </style>
</head>

<body>
    <h3 class="responsivo d1">Olá conteúdo para janelas Grandes </h3>
    <h3 class="responsivo d2">Olá conteúdo para janelas Medias </h3>
    <h3 class="responsivo d3">Olá conteúdo para janelas Pequenas </h3>

</body>
</html>
