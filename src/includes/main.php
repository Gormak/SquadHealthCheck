<?php

/*
	This is the main include file.
	It is only used in index.php and keeps it much cleaner.
*/

require_once "includes/config.php";
require_once "includes/connect.php";
require_once "includes/helpers.php";
require_once "includes/models/results.model.php";
require_once "includes/models/start.model.php";
require_once "includes/models/session.model.php";
require_once "includes/controllers/home.controller.php";
require_once "includes/controllers/results.controller.php";
require_once "includes/controllers/start.controller.php";
require_once "includes/controllers/session.controller.php";


// This will allow the browser to cache the pages.

header('Cache-Control: max-age=3600, public');
header('Pragma: cache');
header("Last-Modified: ".gmdate("D, d M Y H:i:s",time())." GMT");
header("Expires: ".gmdate("D, d M Y H:i:s",time()+3600)." GMT");

?>