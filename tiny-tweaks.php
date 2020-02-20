<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Senac  | EAD</title>
</head>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript"></script>
<style>
body, html{
  margin: 0;
  height: 100%;
}
.container {
  width: 100%;
  height: 100%;

}
.content{
    text-align: center;
    height: 100%;
}


.col1 {
  padding: 15px;
  margin: 0 auto;
  width: 95%;
  font-size: 10px;

}

@media (min-width: 600px) {
  .col1 {
    padding: 25px;
    font-size: 18px;
    margin: 0 auto;
    width: 95%;

  }
}

@media (min-width: 980px) {
  .col1 {
    padding: 40px;
    font-size: 28px;
    margin: 0 auto;
    width: 95%;
    

  }
}

</style>
<body>

<div class="container">
    <div class="content col1">
      Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um texto randômico. Com mais de 2000 anos, suas raízes podem ser encontradas em uma obra de literatura latina clássica datada de 45 AC. Richard McClintock, um professor de latim do Hampden-Sydney College na Virginia, pesquisou uma das mais obscuras palavras em latim, consectetur, oriunda de uma passagem de Lorem Ipsum, e, procurando por entre citações da palavra na literatura clássica, descobriu a sua indubitável origem. Lorem Ipsum vem das seções 1.10.32 e 1.10.33 do "de Finibus Bonorum et Malorum" (Os Extremos do Bem e do Mal), de Cícero, escrito em 45 AC. Este livro é um tratado de teoria da ética muito popular na época da Renascença. A primeira linha de Lorem Ipsum, "Lorem Ipsum dolor sit amet..." vem de uma linha na seção 1.10.32.

O trecho padrão original de Lorem Ipsum, usado desde o século XVI, está reproduzido abaixo para os interessados. Seções 1.10.32 e 1.10.33 de "de Finibus Bonorum et Malorum" de Cicero também foram reproduzidas abaixo em sua forma exata original, acompanhada das versões para o inglês da tradução feita por H. Rackham em 1914.
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
