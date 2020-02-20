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
  .col2, .col3, .col4, .col5 {
    width: 50%;
  }
}
@  (min-width: 980px) {
  .col1 {
    width: 60%;
  }
  .col2 {
    width: 40%;
  }
  .col3, .col4 {
    width: 33%;
  }
  .col5 {
    width: 34%;
  }
}
@media (min-width: 980px) {
  .container {
    width: 980px;
    margin-left: auto;
    margin-right: auto;
  }
}
</style>
<body>

<div class="container">
    <div class="content col1">
      Conteudo div principal
    </div>
    <div class="content col2">
      Conteudo div secundaria
    </div>
    <div class="content col3">
      Conteudo div secundaria
    </div>
    <div class="content col4">
      Conteudo div secundaria
    </div>
    <div class="content col5">
      Conteudo div secundaria
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
