<?php

// PATHs para considerar no autoload
set_include_path(join(PATH_SEPARATOR, array(
	__DIR__ . '/../../library',
	get_include_path()
)));

require_once 'PHPUnit/Autoload.php';
require_once 'PHPUnit/Framework/Assert/Functions.php';