<?php
/*
	session_start();
	
	require('config/define.php');

	$url = explode('/', PARAMETERS);
	$extensoes = array('.php', '.html', '.htm', '.css', '.jpg', '.jpeg', '.png', '.gif', '.bmp');
	$count_extensoes = count($extensoes) -1;
	
	if(isset($url[1]) && !empty($url[1])) {
		for($u = 0; $u <= $count_extensoes; $u++) {
			echo $arq_solicitado = $url[1] . $extensoes[$u];
			
			if(file_exists($arq_solicitado) && !is_dir($arq_solicitado)) {
				break;
			} else {
				$arq_solicitado = '';
			}
		}
	}
	exit;

	if(isset($url[2]) && !empty($url[2]) && $arq_solicitado == '') {
		for($u = 0; $u <= $count_extensoes; $u++) {
			$arq_solicitado = $url[1] . '/' . $url[2] . $extensoes[$u];
			
			if(file_exists($arq_solicitado) && !is_dir($arq_solicitado)) {
				break;
			} else {
				$arq_solicitado = '';
			}
		}
	}
	
	if(
		isset($url[1]) &&
		!empty($url[1]) &&
		file_exists($url[1]) &&
		!is_dir($url[1]) &&
		(strstr($url[1], '.php') ||
		strstr($url[1], '.html') ||
		strstr($url[1], '.htm'))
	) {
		$arq_solicitado = $url[1];
	}
	
	if(
		isset($url[2]) &&
		!empty($url[2]) &&
		file_exists($url[2]) &&
		!is_dir($url[2]) &&
		(strstr($url[2], '.php') ||
		strstr($url[2], '.html') ||
		strstr($url[2], '.htm'))
	) {
		$arq_solicitado = $url[1] . '/' . $url[2];
	}

	if(isset($manutencao) && $manutencao == 1 && (!isset($permissao_adm) || empty($permissao_adm))) {// && IP != '187.66.117.173'
		include('manutencao.php');
		
	} elseif(!isset($url[1]) || empty($url[1]) || $url[1] == 'index' || $url[1] == 'index.php') {
		include('home.php');

	} elseif($arq_solicitado != '') {
		if(
			strstr($arq_solicitado, '.jpg') ||
			strstr($arq_solicitado, '.jpeg') ||
			strstr($arq_solicitado, '.png') ||
			strstr($arq_solicitado, '.gif') ||
			strstr($arq_solicitado, '.bmp')
		) {
			echo "<a href='" . DEFAULT_URL . "' title='" . $arq_solicitado . "'><img src='" . $arq_solicitado . "' title='" . $arq_solicitado . "' alt='" . $arq_solicitado . "'></a>";
		} else {
			include($arq_solicitado);
		}
	} else {
		include('404.php');
	}
    */
?>