document.getElementById("nome").focus();

function verifica_cadastro(valor){
	if(document.getElementById("nome").value=="") {
		alert("Informe o seu nome");
		document.getElementById("nome").focus();
		return false;
	}

	if(document.getElementById("email").value=="") {
		alert("Informe o seu e-mail favorito");
		document.getElementById("email").focus();
		return false;
	}

	if(document.getElementById("email").value!='') {
		if(
            document.form_cadastro.email.value.indexOf('@',0)==-1 ||
            document.form_cadastro.email.value.indexOf('.',0)==-1 ||
            document.form_cadastro.email.value=='@.'
        ) {
			alert("O e-mail informado é inválido.");
			document.getElementById("email").focus();
			return false;
		}
	}
	
	return true;
}

function envia_cadastro() {
	if(verifica_cadastro()) {
		document.getElementById("form_cadastro").submit();
	}
}