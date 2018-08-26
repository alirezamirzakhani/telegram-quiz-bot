<?php

require_once 'vendor/autoload.php';
require_once  'Robot/variables.php';

$apiToken = "514486185:AAFeEGZhQWPE8aaN7p1vsvuX6bngW2xS7G8";
$ownerID = "370516187";

$quizBot = new Robot\QuizOnline($apiToken, $ownerID, $request);

$bot['from_id'] == $ownerID ? $quizBot->run(new \Robot\Users\Owner()) : null;
