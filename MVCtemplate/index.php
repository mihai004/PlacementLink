<?php

session_start();
$view = new stdClass();
$view->pageTitle = 'HOME';

require_once('Views/index.phtml');
