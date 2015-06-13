<?php
// framework/bye.php

require_once __DIR__ . '/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGLobals();

$response = new Response('Goodbye!');
$response->send();
