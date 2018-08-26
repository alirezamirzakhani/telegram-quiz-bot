<?php

$request = json_decode( file_get_contents( "php://input" ) );


$bot     = [

	'from_id' => $request['message']['from']['id'],
	'chat_id' => $request['message']['chat']['id'],

];