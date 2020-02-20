<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Senac  | EAD</title>
  <!-- Tell the browser to be responsive to screen width -->
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body>

<style type="text/css">
	
	html{
		width: 100%;
		height: 100%;
		border: solid 1px blue

	}
	.elemento{
		width:90%;
		height:100%;
		margin: 0 auto;
		border: solid red 1px;
	}

	.imagem{
		float: left;
		width: 200px;
		position: relative;
		z-index: 1;

	}

	.espelho{
		background: #ccc;
		width:200px;
		height:200px;
		float:left;
		border:solid red 1px;
		opacity: 0.2;
		margin-left: -200px;
		position: relative;
		z-index: -1
		

	}
	#titulo{
		clear: both;
		margin-left: 35px;
		margin-bottom: 41px;
		border: solid red 1px;
		padding-left: 43px;
	}

</style>

	<div class="elemento">
		<img class="imagem" src="senac-1080w.jpg" />
		<div class="espelho"> espelho </div>
		<p class="paragrafo" onclick="alertar()">
			Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.
		</p>
		<h3 class="titulo teste" id="titulo"> Novo conteudo</h3>
	</div>

</body>

<script type="text/javascript">
	

function alertar(){


alert("ola voce acabou de clicar")

}

</script>

</html>
