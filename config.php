<?php

function __autoload($c){
	require_once "classes/{$c}.class.php";
}
