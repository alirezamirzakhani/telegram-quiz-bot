<?php

namespace Robot\Repositories;

abstract class TelegramRepository {

	protected $tokenAPI;

	protected function sendRequest( $method, $args ) {

		$url = $this->getUrl() . $method . "?" . http_build_query($args);

		return file_get_contents($url);

	}

	protected function getUrl() {
		return "https://api.telegram.org/bot" . $this->tokenAPI . "/";
	}

	protected function sendMessage( $chat_id, $text ) {
		return $this->sendRequest( "sendMessage", [
			'chat_id' => $chat_id,
			'text'    => $text
		] );

	}

}