document.getElementById("titulo").focus();

function verifica_cadastro(valor){
	if(document.getElementById("titulo").value=="") {
		alert("Informe o título do curso");
		document.getElementById("titulo").focus();
		return false;
	}

	if(document.getElementById("descricao").value=="") {
		alert("Informe a descrição do curso");
		document.getElementById("descricao").focus();
		return false;
	}

	return true;
}

function envia_cadastro() {
	if(verifica_cadastro()) {
		document.getElementById("form_cadastro").submit();
	}
}