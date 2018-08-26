<?php

namespace Robot;

use Robot\Repositories\TelegramRepository;
use Robot\Users\Contracts\BaseUsers;

class QuizOnline extends TelegramRepository {

	protected $tokenAPI;
	protected $request;
	protected $ownerID;
	protected $bot;

	public function __construct( $tokenAPI, $ownerID, $request ) {

		global $bot;
		$this->bot      = $bot;
		$this->tokenAPI = $tokenAPI;
		$this->ownerID  = $ownerID;
		$this->request  = json_decode( $request );

	}


	public function run( BaseUsers $user ) {
		$user->commands();
	}


}