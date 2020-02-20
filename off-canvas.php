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

body {
  overflow-x: hidden;
}

.container {
  display: block;
}

.col1, .col3 {
  position: absolute;
  width: 250px;
  height: 100%;

  /*
    Utilizado nas versoes novas do chrome
  */
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;

  -webkit-transition: -webkit-transform 0.4s ease-out;
  transition: transform 0.4s ease-out;

  z-index: 1;
}

.col1 {
  /*
  Para as versoes mais antigas do chrome
  */
  -webkit-transform: translate(-250px,0);
  transform: translate(-250px,0);
}

.col2 {
  width: 100%;
  position: absolute;
}

.col3 {
  left: 100%;
}

.col1.open {
  -webkit-transform: translate(0,0);
  transform: translate(0,0);
}

.col3.open {
  -webkit-transform: translate(-250px,0);
  transform: translate(-250px,0);
}

@media (min-width: 510px) {
  /* If the screen is wider then 500px, use Flexbox */
  .container {
    display: -webkit-flex;
    display: flex;
    -webkit-flex-flow: row nowrap;
    flex-flow: row nowrap;
  }
  .col1 {
    position: relative;
    -webkit-transition: none 0s ease-out;
    transition: none 0s ease-out;
    -webkit-transform: translate(0,0);
    transform: translate(0,0);
  }
  .col2 {
    position: static;
  }
}

@media (min-width: 980px) {
  body {
    overflow-x: auto;
  }
  .col3 {
    position: relative;
    left: auto;
    -webkit-transition: none 0s ease-out;
    transition: none 0s ease-out;
    -webkit-transform: translate(0,0);
    transform: translate(0,0);
  }
}


</style>
<body>

<div class="container">
    <div class="content col1">
      Conteudo div 1
    </div>
    <div class="content col2">
      <code>Click para ver o conteudo</code>
    </div>
    <div class="content col3">
      Conteudo div 3
    </div>

<div>
<script>
$(function(){
  $(".content").each(function(index,data){
    var color = "#"+((1<<24)*Math.random()|0).toString(16)
    $(data).css("background",color);

      var position = 0;
      var col2 = $(".col2");
      var col1 = $(".col1");
      var col3 = $(".col3");

      $("body").on("click",".content",function(){
        position++;
        if (position % 3 == 0) {
          col1.removeClass("open");
          col3.removeClass("open");
        } else if (position % 3 == 1) {
          col1.addClass("open");
          col3.removeClass("open");
        } else {
          col1.removeClass("open");
          col3.addClass("open");
        }
      })


  })
})
</script>
</body>
</html>
