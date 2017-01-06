<?php

/* 
vous ajouterez ici les fonctions qui vous sont utiles dans le site,
je vous ai créé la première qui est pour le moment incomplète et qui devra contenir
la logique pour choisir la page à charger
*/

function getContent(){
	if(!isset($_GET['p'])){
		include __DIR__.'/../pages/home.php';
	}
	else if(isset($_GET['p'])) {
		include __DIR__.'/../pages/'.$_GET['p'].'.php';
	}

}

function getPart($name){
	include __DIR__ . '/../parts/'. $name . '.php';
};

function getUserData(){
	$filename = file_get_contents('../data/user.json');
	$filenamedecode = json_decode($filename, true);
	foreach ($filenamedecode as $key => $value) {
		return $value;
	}
};