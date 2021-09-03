<?php
	//Caso não haja sessão ativa, inicia e configura a sessão
	if ( session_status() !== PHP_SESSION_ACTIVE ) {
		session_cache_limiter('private');
		session_cache_expire(60);
		session_start();
	}

	//Altera o tempo e a quantidade de memória limites do navegador para permitir execuções de códigos mais longos
	set_time_limit(0);
	ini_set("memory_limit","1556m");
	ini_set("file_uploads","On");
	ini_set("upload_max_filesize","20M");
	ini_set("post_max_size","20M");
	
	// Definições padrões do site
	define('BASE', '..\\');
	define('SITE_NAME', "Desafio LEO");
	define('SITE_FULL_NAME', "Desafio LEO Learning Brasil");
	define('DEFAULT_EMAIL', "contato@leolearning.com");
	define('TECNICO_EMAIL', "suporte@leolearning.com");
    define('PROTOCOL', 'http://');
	define('DEFAULT_URL', PROTOCOL . $_SERVER['SERVER_NAME'] . '/desafio_leo' . '/');
    define('ACTUAL_URL', PROTOCOL . $_SERVER['SERVER_NAME'] . $_SERVER ['REQUEST_URI']);
    define('PARAMETERS', $_SERVER ['REQUEST_URI']);
	define('SHORT_URL', basename(ACTUAL_URL));
	define('IP', $_SERVER['REMOTE_ADDR']);
	define('BANCO_DADOS', 'gerencia_cursos');
	define('DEFAULT_CSS', DEFAULT_URL . 'public/css/');
	define('DEFAULT_SCRIPTS', DEFAULT_URL . 'public/js/');
	define('DEFAULT_IMG', DEFAULT_URL . 'public/images/');
	define('FAVICON', DEFAULT_IMG . 'public/favicon.jpg');
	define('META_KEYWORDS', 'E-learning, Plataforma LMS, Educação Corporativa, Soluções Digitais, Treinamentos Corporativos, Universidade Corporativa EAD, Treinamento de Colaboradores, Treinamento e Desenvolvimento');
	define('META_DESCRIPTION', 'Com experiência em educação corporativa, LEO Learning Brasil desenvolve soluções digitais para empresas de todos os tamanhos e segmentos.');
	
    //Define qual fuso horário será usado pelo sistema
	date_default_timezone_set('America/Sao_Paulo');
	
	//Informações que serão usadas na identificação do usuário e acesso ao sistema

	if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
		$user_id = $_SESSION['user_id'];
	
	if(isset($_SESSION['user_nome']) && !empty($_SESSION['user_nome']))
		$user_nome = $_SESSION['user_nome'];
	
    /******************************************************************************
	//Exibição de erros
    ******************************************************************************/

	//error_reporting(0);
	//ini_set('display_errors', 0 );
	
	
	//Carrega as classes do sistema das camadas 'model' e 'controller' de forma dinâmica
	spl_autoload_register(function ($class) {
		if(file_exists(BASE . $class . '.php')) {
			include_once(BASE . $class . '.php');
		}
	});

	require_once("../app/functions/functions.php")
?>