<?php
/**
* Simulação da MegaSena Eletrônica
* Ver 0.1
* Autor: Lucas Matheus
*/

//Variáveis primitivas
$ultimoSorteio = 2200;
$valorDoProximoPremio = 2000000.00;

//Conversão em string - NÃO MEXA!
$valorDoProximoPremio = strval($valorDoProximoPremio);
str_replace(".", ",", $valorDoProximoPremio);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!-- METADADOS -->
	<title>Simulador da Mega Sena</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="generator" content="Sublime Text 3">
	<meta name="rating" content="general">
	<!-- IMPORTAÇÕES -->
	<link rel="stylesheet" type="text/css" href="css/design.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body onload="carregarPáginaDeAviso()">
	<div id="black1">
		<div id="Modal-Aviso">
			<h1>Aviso</h1>
			<p>Isso é um algoritmo de como seria um jogo da megasena em sua versão digital, <strong>NÃO</strong> coloque nenhum dado pessoal ou bancário real neste programa.</p>
			<button class="btn btn-primary" onclick="apagarModal('#black1')">Eu compreendi a mensagem, agora feche essa janela</button>
		</div>
	</div>
	<header>
		<h1><img src="media/ico_folha4.svg" alt="Trevo" id="trevo"/> MEGASENA ELETRÔNICA</h1>
		<p>Último Concurso : <?=$ultimoSorteio;?></p>
		<p>Premio Acumulado pro próximo : R$ <?=$valorDoProximoPremio;?></p>
	</header>
	<noscript>
		<p class="alert alert-danger">Você precisa ativar o <strong>Javascript</strong> ou controles <strong>ActiveX</strong> se você está no Internet Explorer</p>
	</noscript>
	<section id="paginaPrincipal">
		<div id="main">
			<h1>Qual opção você deseja</h1>
			<ul id="listaDeOpcoes">
				<li><button class="btn btn-info">Info</button></li>
				<li><button class="btn btn-outline-dark">Github</button></li>
			</ul>
			<nav>
				<li>
					<a href="javascript:mostrarJanela('#janela-aposta')">
						<img src="media/ico_fazerAposta.svg" alt="Icone de Aposta">
						<p>Fazer um Jogo/Aposta</p>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="media/ico_jackpot.svg" alt="Útlimo Ganhador">
						<p>Ver o último Ganhador</p>
					</a>
				</li>
				<li>
					<a href="https://www.google.com.br">
						<img src="media/ico_sair.svg" alt="Sair do Programa">
						<p>Sair do Programa</p>
					</a>
				</li>
			</nav>
		</div>
		<div id="janela-aposta">
			<h1>Seu Jogo</h1>
			<p class="alert alert-danger" id="alerta-letra-no-lugar-de-numero">Digite numeros inteiros positivos nos campos apenas</p>
			<p class="alert alert-danger" id="alerta-2iguais">Não pode ter dois ou mais campos com números iguais.</p>
			<form name="formJogo" method="post" action="confirma.php">
				<ul>
					<li><input type="number" min="1" max="60" name="num1" placeholder="03" required></li>
					<li><input type="number" min="1" max="60" name="num2" placeholder="15" required></li>
					<li><input type="number" min="1" max="60" name="num3" placeholder="31" required></li>
					<li><input type="number" min="1" max="60" name="num4" placeholder="45" required></li>
					<li><input type="number" min="1" max="60" name="num5" placeholder="53" required></li>
					<li><input type="number" min="1" max="60" name="num6" placeholder="60" required></li>
				</ul>
				<button class="btn btn-primary" type="submit" onclick="return validarFormulario()">Confirmar Jogo</button>
				<button class="btn btn-danger" type="reset">Limpar</button>
				<button class="btn btn-secoundary" type="button" onclick="retornarParaOMenuPrincipal()">Voltar para a tela inicial</button>
				<br/><br/>
				<a href="javascript:void(0)" class="text-primary" onclick="sortearNúmerosAleatórios()">Advinhe os meus números</a>
			</form>
		</div>
	</section>
	<footer>
		&copy; 2020 - Estúdio Do Luk <br/>
		Made by: Teclucas98 <br/>
		Email : <a href="mailto:teclucas.costa@hotmail.com">teclucas.costa@hotmail.com</a><br/>
		Ver 0.1
	</footer>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
</body>
</html>