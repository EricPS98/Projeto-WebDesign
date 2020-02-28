<?php

/*
Site: Projeto Final (Curso - Web Design)
Autor: Eric Palmeira de Souza
Data: 24/02/2020
*/

// Define a página atual pela URL 
$pag = 'home';

if(isset($_GET['pag'])){
	$pag = addslashes($_GET['pag']);
}

// Carrega o header.php
include 'app/views/header.php';

//Carrega a página escolhida dinamicamente pelo usuário
switch ($pag) {

	case 'sobre':
	include 'app/views/sobre.php';
	break;

/*
	case ''
	include 'app/views/.php';
	break;

	case 'home'
	include 'app/views/.php';
	break;
*/

	default:
	include 'app/views/home.php';
	break;

}

//Carrega o footer.php
include 'app/views/footer.php';