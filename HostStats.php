<?php
/**
 * The HostStats extension adds a special page that displays
 * the statistics of the host that the wiki is running on.
 *
 * This extension may expose some private information about
 * your server, so please use it with care, especially when
 * you change $wgHostStatsCommands below.
 *
 * @file
 * @ingroup Extensions
 */

// Ensure that the script cannot be executed outside of MediaWiki.
if ( !defined( 'MEDIAWIKI' ) ) {
    die( 'This is an extension to the MediaWiki package and cannot be run standalone.' );
}

// Display extension properties on MediaWiki.
$wgExtensionCredits['specialpage'][] = array(
	'path' => __FILE__,
	'name' => 'HostStats',
	'author' => array(
		'Hydriz',
		'...'
		),
	'url' => 'https://www.mediawiki.org/wiki/Extension:HostStats',
	'descriptionmsg' => 'hoststats-desc',
	'version' => '1.4.0',
	'license-name' => 'GPL-3.0-or-later'
);

// An array of commands that you wish to run and output.
$wgHostStatsCommands = array(
	'hostname',
	'df -h'
);

// Register extension class.
$wgAutoloadClasses['SpecialHostStats'] = __DIR__ . '/SpecialHostStats.php';

// Register extension messages and other localisation.
$wgMessagesDirs['HostStats'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['HostStatsAlias'] = __DIR__ . '/HostStats.alias.php';

// Register special page into MediaWiki.
$wgSpecialPages['HostStats'] = 'SpecialHostStats';

// Create new right.
$wgAvailableRights[] = 'hoststats';
