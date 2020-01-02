function validarFormulario() {

	//Recepção de Variáveis
	let isValido = false
	let isAlfabetico = false
	let estaNulo = false
	let estaEntre0e60 = true
	var cont = 0
	let NumeroDeCampos = 5

	JSnum1 = formJogo.num1.value
	JSnum2 = formJogo.num2.value
	JSnum3 = formJogo.num3.value
	JSnum4 = formJogo.num4.value
	JSnum5 = formJogo.num5.value
	JSnum6 = formJogo.num6.value

	var JSnum = [JSnum1,JSnum2,JSnum3,JSnum4,JSnum5,JSnum6]

	//Verificar se tá nulo
	for (var i = 0; i<=NumeroDeCampos;i++){
		var teste = JSnum[i]
		if (teste == null || teste == "") {
			estaNulo = true
			break
		}
	}

	//Verificar se tem letra
	for (var i = 0; i<=NumeroDeCampos;i++){
		var teste = Number(JSnum[i])
		if (teste == 0) {
			isAlfabetico = true
			break
		}
	}

	//Validação de numeros repetidos
	for (var i = 0; i<=NumeroDeCampos; i++){
		for (var j = 0; j<= NumeroDeCampos; j++){
			if (JSnum[j] == JSnum[i]) {
				cont++
			}
		}
	}

	//Validação se estão entre os números de um a sessenta
	for (var i = 0; i<=NumeroDeCampos;i++){
		var teste = JSnum[i]
		if (teste < 0 && teste > 60) {
			estaEntre0e60 = false
			break
		}
	}

	if (cont <= JSnum.length){
		isValido = true
	} else if (isAlfabetico == true){
		dispararErroDeDadosIncoerentes()
	} else if (estaEntre0e60 == false){
		dispararErroDeQuantidade()
	} else if (estaNulo == true){
		dispararErroDeCamposNulos()
	} else {
		dispararAlertaDeDoisNumerosIguais()
	}

	return isValido
}
function dispararErroDeCamposNulos(){
	$("#alerta-2iguais").text("Os valores NÃO podem estar nulos")
	$("#alerta-2iguais").fadeIn(500)
	$("#alerta-2iguais").delay(500)
	$("#alerta-2iguais").fadeOut(500)
}
function dispararErroDeQuantidade(){
	$("#alerta-2iguais").text("Os valores devem estar entre 0 e 60")
	$("#alerta-2iguais").fadeIn(500)
	$("#alerta-2iguais").delay(500)
	$("#alerta-2iguais").fadeOut(500)
}
function dispararErroDeDadosIncoerentes(){
	$("#alerta-letra-no-lugar-de-numero").fadeIn(500)
	$("#alerta-letra-no-lugar-de-numero").delay(500)
	$("#alerta-letra-no-lugar-de-numero").fadeOut(500)
}
function dispararAlertaDeDoisNumerosIguais() {
	$("#alerta-2iguais").fadeIn(500)
	$("#alerta-2iguais").delay(500)
	$("#alerta-2iguais").fadeOut(500)
}
function carregarPáginaDeAviso(){
	setTimeout(mostrarModal('#black1'), 5000);
}
function mudarEndereco(URL){
	location.href = URL
}
function mostrarModal(Id_da_modal){
	document.querySelector(Id_da_modal).style.display = "block"
}
function apagarModal(Id_da_modal){
	document.querySelector(Id_da_modal).style.display = "none"
}
function sortearNúmerosAleatórios(){
	var lista = document.querySelectorAll("#janela-aposta form ul li input[type='number']")
	var i = 0
	var numSorteado = 0
	for(i=0;i<lista.length;i++){
		numSorteado = 0
		while (numSorteado < 1 || numSorteado > 60) {
			numSorteado = Math.random() * 60 + 1
		}
		numSorteado = Math.floor(numSorteado)
		lista[i].value = numSorteado
	}
}
function retornarParaOMenuPrincipal(){
	var n = document.getElementsByTagName('div')
	var i = 0
	for(i=0;i<n.length;i++){
		document.getElementsByTagName('div')[i].style.display = "none"
	}
	document.getElementById('main').style.display = "block"
}
function mostrarJanela(id){
	document.querySelector("#main").style.display = "none"
	document.querySelector(id).style.display = "block"
}