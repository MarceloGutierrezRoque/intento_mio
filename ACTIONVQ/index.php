<?php 
	$ru0='../';
	$dbs='database';
	$cl1='web_paginas';
	$di1='';//solo se utilza cuando es contato/ nsootrso/
	//-----------------------------
	function index($rut,$sid,$pag_id){
		global $dbs,$cl1;//estas variables estan fueran de la funcion por lo que las llamo con global
		//-----------------contanst no, cuando envio un formulario a la accion ahgo un if, esta funcion la estoy llamandod esde la vista, esta funcion index esta usando las constantes tons no la debo vovler a llamar, porq ue esta usa la variable ruta de la vista, uso esto cunado mi vista invoca algo de la accion, lo del if es cuando agrego edito elimino importo o cuando algo una accionq ue a las finales de la vista me va a llevar la informaicon a la version todo eso es enviar por ser acciones que se tienen que realizar en la accion; en la vista al cargar la pagina lo que hago es invocar
		require_once($rut.DIRMOR.$dbs.'.php');
		require_once($rut.DIRMOR.$cl1.'.php');
		$_dbs = new $dbs();
		$_cl1 = new $cl1();//hasta aqui la clase le esta devolviendo la infomaciona  la accion, la esta guardadndo en data, y falta retornanloa  la vista
		$data = new stdClass();
		//-----------------------------
		$data->inf = $_cl1->callID($_dbs->conectar(),$pag_id);//inf va a contener todo loq ue esta contenieno al clase
		//-----------------------------
		return $data; //retorno a la vista
	}