<?php declare(strict_types = 1);

if (defined('TOOLKIT_PHPCS_AUTOLOAD_SET') === false) {

	// Check if this is a stand-alone installation.
	if (is_file(__DIR__ . '/../vendor/autoload.php')) {
		require_once __DIR__ . '/../vendor/autoload.php';
	}

	define('TOOLKIT_PHPCS_AUTOLOAD_SET', true);
}
