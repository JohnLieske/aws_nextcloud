<?php

$CONFIG = array(
'instanceid' => '',
'passwordsalt' => '',
'datadirectory' => '/var/www/html/nextcloud/data',
'version' => '',
'dbtype' => 'MySQL',
'dbhost' => '',
'dbname' => 'nextcloud',
'dbuser' => '',
'dbpassword' => '',
'dbtableprefix' => '',
'installed' => false,
'default_language' => 'en',
'defaultapp' => 'files',
'remember_login_cookie_lifetime' => 30*30*12*7,
'session_lifetime' => 30 * 30 * 12,
'session_keepalive' => true,
'auth.bruteforce.protection.enabled' => true,
/*'skeletondirectory' => '/path/to/nextcloud/core/skeleton',
 */
'overwritewebroot' => '/nextcloud',
'trashbin_retention_obligation' => 'auto',
'versions_retention_obligation' => 'auto',
'check_for_working_webdav' => true,
'check_for_working_wellknown_setup' => true,
'config_is_read_only' => false,
'logfile' => '/var/log/nextcloud.log',
'loglevel' => 2,
/**
 * The timezone for logfiles. You may change this; see
 * http://php.net/manual/en/timezones.php
 *
 * Defaults to ``UTC``
 */
'logtimezone' => 'America/New_York',
'appstoreenabled' => false,
'enable_previews' => true,
'preview_max_x' => 2048,
'preview_max_y' => 2048,
'supportedDatabases' => array(
	'sqlite',
	'mysql',
	'pgsql',
	'oci',
),
);
