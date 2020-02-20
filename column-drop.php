<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Senac  | EAD</title>
</head>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript"></script>
<style>
body {
  margin: 0;
}
.container {
  margin: 0;
  padding: 0;
  width: 100%;
}
.content{
    text-align: center;
    min-height: 200px;
}

.container {
  display: -webkit-flex;
  display: flex;
  -webkit-flex-flow: row wrap;
  flex-flow: row wrap;
}

.col1, .col2, .col3, .col4, .col5 {
  width: 100%;
}

@media (min-width: 600px) {
  .col1 {
    width: 34%;
    -webkit-order: 1;
    order: 1;
  }

  .col2 {
    width: 100%;
    -webkit-order: 4;
    order: 4;
  }

  .col3 {
    width: 33%;
    -webkit-order: 3;
    order: 3;
  }

  .col4 {
    width: 33%;
    -webkit-order: 2;
    order: 2;
  }

  .col5 {
    width: 100%;
    -webkit-order: 5;
    order: 5;
  }
}


@media (min-width: 800px) {
  .col1, .col2 , .col3 , .col4 , .col5  {
    width: 20%;
  }

}
</style>
<body>

<div class="container">
    <div class="content col1">
      Conteudo div 1
    </div>
    <div class="content col2">
      Conteudo div 2
    </div>
    <div class="content col3">
      Conteudo div 3
    </div>
    <div class="content col4">
      Conteudo div 4
    </div>
    <div class="content col5">
      Conteudo div 5
    </div>
<div>
<script>
$(function(){
  $(".content").each(function(index,data){
    var color = "#"+((1<<24)*Math.random()|0).toString(16)
    $(data).css("background",color);
  })
})
</script>
</body>
</html>
